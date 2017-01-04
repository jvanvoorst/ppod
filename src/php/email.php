<?php

include('./../resources/config.php');
require_once 'Mail.php';

// Create the mail object using the Mail::factory method
$mail_object =& Mail::factory("smtp", $mail["smtp"]); 

$mail_object->send($mail["recipients"], $mail["headerOrder"], $mail["bodyOrder"]);

if (PEAR::isError($mail)) {
      echo("<p>" . $mail->getMessage() . "</p>");
    } else {
      echo("<p>Message successfully sent!</p>");
    }

?>