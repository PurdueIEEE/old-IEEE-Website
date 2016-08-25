<?php

    $mailing_lists = array(
        "announcements" => "https://lists.csociety.org/subscribe/ieee-announcements",
        "aerial" => "https://lists.csociety.org/subscribe/ieee-aerialrobotics",
        "csociety" => "https://lists.csociety.org/subscribe/csociety-announce",
        "embs" => "https://lists.csociety.org/subscribe/ieee-embs",
        "mtts" => "https://lists.csociety.org/subscribe/ieee-mtt-s",
        "orbital" => "https://lists.csociety.org/subscribe/ieee-rocket",
        "racing" => "https://lists.csociety.org/subscribe/ieee-grandprix",
        "rov" => "https://lists.csociety.org/subscribe/ieee-rov"
    );

    $names = array(
        "announcements" => "IEEE Announcements",
        "aerial" => "Aerial Robotics",
        "csociety" => "IEEE Computer Society",
        "embs" => "Engineering Medicine and Biology Society",
        "mtts" => "Microwave Theory & Techniques Society",
        "orbital" => "Purdue Orbital",
        "racing" => "Racing",
        "rov" => "Remotely Operated underwater Vehicle"
    );

    $email = preg_replace('/[^a-z0-9@_+.-]/i', '_', $_POST['email']);
    $list = $_POST['list'];

    $message_return = "";
    $error_return = "";
    $successful_subscribe = false;
    $error_subscribe = false;

    foreach($list as $item) {

        //Make sure the item is actually one of the mailing lists 
        if (isset($mailing_lists[$item])) {

            //Add get query string for email value
            $subscribe = $mailing_lists[$item]."?email=".$email;
            $list_name = $names[$item];

            $ch = curl_init($subscribe);

            //Don't echo the output when finished   
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //Don't verify the ssl cert (The local server didn't seem to like it...)
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $data = curl_exec($ch);

            //Check if request was received correctly
            if (strpos($data, 'request has been received') !== false) {
                $successful_subscribe = true;
                $message_return .= "&bull; $list_name<br>";
            } else {
                $error_subscribe = true;
                $error_return .= "Error subscribing to $list_name.<br>";
            }

            curl_close($ch);
        } else {
            $error_subscribe = true;
            $bad_value = htmlentities($item, ENT_QUOTES);
            $error_return .= "Error subscribing to list with value $bad_value.<br>";
        }
    }

    if ($successful_subscribe) {
        $message_return = "You have been successfully subscribed to these lists 
            below, however you still need to confirm by an email sent to your address.<br>" 
            . $message_return;
        echo $message_return;
    }


    if ($error_subscribe) {
        $error_return = "%%There were some errors: (Possibly invalid symbol in email)<br>" . $error_return;
        echo $error_return;
    }
?>
