<?php
    require_once('lists.php');

    $mailing_lists = [
        "announcements" => "ieee-announcements",
        "aerial" => "ieee-aerialrobotics",
        "csociety" => "ieee-csociety",
        "embs" => "ieee-embs",
        "mtts" => "ieee-mtt-s",
        "racing" => "ieee-racing",
        "rov" => "ieee-rov-announcements"
    ];

    $names = [
        "announcements" => "IEEE Announcements",
        "aerial" => "Aerial Robotics",
        "csociety" => "Computer Society",
        "embs" => "Engineering Medicine and Biology Society",
        "mtts" => "Microwave Theory &amp; Techniques Society",
        "racing" => "Racing",
        "rov" => "Remotely Operated underwater Vehicle"
    ];

    $email = preg_replace('/[^a-z0-9@_+.-]/i', '_', $_POST['email']);
    $list = $_POST['list'];
    $message_return = "";
    $error_return = "";

    $error_subscribe = false;
    foreach($list as $item) {
        if (isset($mailing_lists[$item])) {
            $list_name = $names[$item];
            if (Lists::add($mailing_lists[$item], $email)) {
                $message_return .= "&bull; $list_name<br>";
            } else {
                $error_subscribe = true;
                $error_return .= "Error subscribing to $list_name.<br>";
            }
        } else {
            $error_subscribe = true;
            $bad_value = htmlentities($item, ENT_QUOTES);
            $error_return .= "Error subscribing to list with value $bad_value.<br>";
        }
    }

    if (!$error_subscribe)
        echo "You have been successfully subscribed to these lists:<br>" . $message_return;
    else echo "%%There were some errors: (Possibly invalid symbol in email)<br>" . $error_return;
?>
