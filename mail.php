<?php
    if(isset($_POST["name"])){
        $to_email = "info@codimaths.com";
        $from_email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        if(mail($to_email, $subject, $message, $headers)){
            echo "MEssage sent";
        }
        else{
            echo "message not sent";
        }
    }
?>