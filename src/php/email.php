<?php



// include('./../resources/config.php');

// $msg = "this is a test email";
// mail($config['email']['to'], $config['email']['subject'], $msg);
// echo "<p>email sent</P>";

require_once 'Mail.php';

    $recipients = 'vanvoors@colorado.edu';

    $headers['From']    = 'richard@example.com';
    $headers['To']      = 'joe@example.com';
    $headers['Subject'] = 'Test message';

    $body = 'Test message';

    $smtpinfo["host"] = "smtp.colorado.edu";
    $smtpinfo["port"] = "25";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "vanvoors";
    $smtpinfo["password"] = "";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $body);

?>