<?php

// Sample output from invoking Mailman scripts:
/*
$ ./add_members -r - test <<< test@test.com
Subscribed: test@test.com
$ ./find_member test@test.com
test@test.com found in:
     test
$ ./remove_members -f - test <<< test@test.com
$ ./find_member test@test.com
$ ./remove_members -f - test <<< test@test.com
No such member: test@test.com
$ ./add_members -r - test <<< test@test.com
Subscribed: test@test.com
$ ./add_members -r - test <<< test@test.com
Already a member: test@test.com
*/

// The location of all the Mailman2 scripts used in Lists.
define('MAIL_BIN', '/var/lib/mailman/bin/');

// The Lists API is a simple python API wrapper around Mailman2 just for
// managing member subscriptions; this should be further wrapped for REST use.
// TODO: Support multiple add, remove, find, info.
class Lists {
    protected function __construct() {}
    protected function __clone() {}

    // List all available mailing lists.
    // Returns the array of all mailing lists.
    public static function all(): array {
        $api_bin = MAIL_BIN; // TODO: remove
        $output = `bash -c '{$api_bin}list_lists -a -b'` ?: '';
        return preg_split("/[\s]+/", $output, -1, PREG_SPLIT_NO_EMPTY);
    }

    // Lists all members of a given mailing $list.
    // Returns the array of all members on the $list.
    public static function list(string $list): array {
        $api_bin = MAIL_BIN; // TODO: remove
        $output = `bash -c '{$api_bin}list_members {$list}'` ?: '';
        if (strpos($output, 'No such list:') === false) {
            return preg_split("/[\s]+/", $output, -1, PREG_SPLIT_NO_EMPTY);
        } else return [];
    }

    // Add a member by $email to a mailing $list.
    // Returns true if successfully added, false if otherwise.
    public static function add(string $list, string $email): bool {
        $api_bin = MAIL_BIN; // TODO: remove
        $output = `bash -c '{$api_bin}add_members -r - {$list} <<< {$email}'` ?: '';
        return (strpos($output, 'Subscribed:') !== false);
    }

    // Finds a member by $email in all mailing lists.
    // Returns the array of all mailing lists subscribed.
    public static function find(string $email): array {
        $api_bin = MAIL_BIN; // TODO: remove
        $output = `bash -c '{$api_bin}find_member {$email}'` ?: '';
        if ($output !== '') {
            $output = preg_replace('/([\s\S]*found in:\n)/i', '', $output);
            $output = preg_split("/[\s]+/", $output, -1, PREG_SPLIT_NO_EMPTY);
            return $output;
        } else return [];
    }

    // Gets a member's info by $email if it is a Purdue Career Account.
    // Returns the array of information Purdue's LDAP server gives.
    public static function info(string $email): array {
        $id = preg_replace('/(@purdue.edu)/i', '', $email, -1, $count);
        if ($count !== 1) return [];
        $ds = ldap_connect("ped.purdue.edu");
    	if (!$ds) return [];
    	$r = ldap_bind($ds);
    	$sr = ldap_search($ds, "dc=purdue,dc=edu", "uid=$id");
    	$info = ldap_get_entries($ds, $sr);
    	ldap_close($ds);
    	return convert_ldap($info);
    }

    // Remove a member by $email from a mailing $list.
    // Returns true if successfully removed, false if otherwise.
    public static function remove(string $list, string $email): bool {
        $api_bin = MAIL_BIN; // TODO: remove
        $output = `bash -c '{$api_bin}remove_members -f - {$list} <<< {$email}'` ?: '';
        return (strpos($output, 'No such member:') === false);
    }
}

// Utility for returning JSON along with a response code.
function http_return($value, $code = 200) {
    http_response_code($code);
    $body = json_encode($value)."\n";
    header('Content-Type: application/json');
    header('Content-Length: '.strlen($body));
    exit($body);
}

// Utility to convert an LDAP result to something readable.
function convert_ldap($info) {
    if ($info['count'] == 0)
        return [];
    foreach ($info as $inf) {
        if (!is_array($inf)) continue;
        foreach ($inf as $key => $in) {
            if ((count($inf[$key]) - 1) > 0) {
                if (is_array($in))
                    unset($inf[$key]["count"]);
                $results[$key] = $inf[$key];
            }
        }
    }
    //$results["dn"] = explode(',', $info[0]["dn"]);
    return $results;
}

// Dynamically invokes a method and maps the associative array of arguments
// onto the method's parameter names. If any non-optional arguments are
// missing, the $missing callback is invoked with the parameter name.
// If the $arguments array contains more arguments than method parameters exist,
// these leftover arguments will be automatically discarded.
function dynamic_invoke($method, $arguments, callable $missing) {
    $values = [];
    $all = (new \ReflectionMethod($method))->getParameters();
    foreach ($all as $p) {
        $name = $p->getName();
        $exists = array_key_exists($name, $arguments);
        if (!$exists && !$p->isDefaultValueAvailable()) {
            $missing($name);
            $arguments[$name] = null;
        }
        $values[$p->getPosition()] = $exists ? $arguments[$name] : $p->getDefaultValue();
    }
    return $method(...$values);
}

// If this script was directly invoked, magically turn into an HTTP API!
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {

    // Extract the method from the parameters first.
    $params = $_GET;
    if (!isset($params['method']))
        return http_return(["error" => "no method given"], 400);
    $method = $params['method'];
    unset($params['method']);

    // Dynamically invoke the right method with the right args.
    try {
        return http_return(["result" => dynamic_invoke("Lists::$method", $params, function($x) {
            return http_return(["error" => "invalid parameter $x"], 400);
        })]);
    } catch (ReflectionException $e) {
        return http_return(["error" => "no such method"], 400);
    }
}
?>
