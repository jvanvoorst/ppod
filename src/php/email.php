<?php

include('./../resources/config.php');
require_once 'Mail.php';

$recipients = 'justin.vanvoorst@colorado.edu';

$body = 'adding a little more so maybe it works';

// Create the mail object using the Mail::factory method
$mail_object =& Mail::factory("smtp", $config["smtp"]); 

$mail_object->send($config["recipients"], $config["headerOrder"], $body);

if (PEAR::isError($mail)) {
      echo("<p>" . $mail->getMessage() . "</p>");
    } else {
      echo("<p>Message successfully sent!</p>");
    }

?>