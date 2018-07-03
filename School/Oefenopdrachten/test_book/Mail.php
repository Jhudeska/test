<?php
/*
class Mail{

    public function emailNotifier()
    {
        $Name = "Jhudeska Ignacia"; //senders name
        $email = "jvsignacia@live.nl"; //senders e-mail adress
        $recipient = "jhudeska@ablerz.nl"; //recipient
        $mail_body = "The text for the mail..."; //mail body
        $subject = "Peddals registration"; //subject
        $header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields

        mail($recipient, $subject, $mail_body, $header); //mail command :)
    }
}


$m = new Mail();
$m->emailNotifier();
*/?>



<?php

class Mail{

    /**
     *  email notifier
     */
    public function emailNotifier()
    {

        $signedInUser = "John";


        $name = "Jhudeska Ignacia"; //senders name
        $email = "jvsignacia@live.nl"; //senders e-mail adress
        $recipient = "jhudeska@ablerz.nl"; //recipient
        $mail_body = "
                     Hello {$signedInUser}, 
        
                      Welcome to Peddals B.V website. 
                      You can login with: {$email} and the password you have entered. 
                      You can use the services as an RepairBranches right away.
                           
                      Kind regards,
                      
                       PEDDALS B.V
                            "; //mail body
        $subject = "Peddals registration"; //subject
        $header = "From: ". $name . " <" . $email . ">\r\n"; //optional headerfields

        mail($recipient, $subject, $mail_body, $header); //mail command :)
    }
}


$m = new Mail();
$m->emailNotifier();


?>
