<?php
    require_once 'lists.php';
    $mailing_lists = Lists::all(true);
    $email = preg_replace('/[^a-z0-9@_+.-]/i', '_', $_POST['email']);

    $message_return = "";
    $error_return = "";
    $error_subscribe = false;

    $list = $_POST['list'];
    foreach($list as $item) {
        if (isset($mailing_lists[$item])) {
            $list_name = $mailing_lists[$item];
            if (Lists::add($item, $email)) {
                $message_return .= "&bull; $list_name<br>";
            } else {
                $error_subscribe = true;
                $error_return .= "Error subscribing to '$list_name'. You may already be subscribed.<br>";
            }
        } else {
            $error_subscribe = true;
            $bad_value = htmlentities($item, ENT_QUOTES);
            $error_return .= "Error subscribing to list with value '$bad_value'. It may not exist.<br>";
        }
    }

    if (!$error_subscribe)
        echo "You have been successfully subscribed to these lists:<br>" . $message_return;
    else echo "%%There were some errors: (Possibly invalid symbol in email)<br>" . $error_return;
?>
