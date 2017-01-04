<?php

include('./../resources/config.php');
require_once 'Mail.php';

function sendMail($isbn, $title, $author, $firstName, $lastName, $affiliation, $department, $email, $delivery) {
    if ($delivery == "expedite") {
        echo("delivery is expedite");
        // $body = createBody($isbn, $title, $author, $firstName, $lastName, $affiliation, $department, $email, $delivery);
        $body = "test";
        $mail_object =& Mail::factory("smtp", $mail["smtp"]); 
        $mail_object->send($mail["recipients"], $mail["headerRush"], $body);

        if (PEAR::isError($mail)) {
          echo("<p>" . $mail->getMessage() . "</p>");
        } else {
          echo("<p>Message successfully sent!</p>");
        }
    } else {
        echo("something is not right");
    }
    
}

// $mail_object =& Mail::factory("smtp", $mail["smtp"]); 
// $mail_object->send($mail["recipients"], $mail["headerOrder"], $mail["bodyOrder"]);
// if (PEAR::isError($mail)) {
//   echo("<p>" . $mail->getMessage() . "</p>");
// } else {
//   echo("<p>Message successfully sent!</p>");
// }


function createBody ($isbn, $title, $author, $firstName, $lastName, $affiliation, $department, $email, $delivery) {
    // global $isbn, $title, $author, $firstName, $lastName, $affiliation, $department, $email, $delivery;
    $book = "Book\nISBN: " . $isbn ."\nTitle: " . $title . "\nAuthor: " . $author . "\n\n";
    $patron = "Patron\nName: " . $firstName . " " . $lastName . "\nAffiliation: " . $affiliation . "\nDepartment: " . $department . "\nEmail: " . $email;
    if ($delivery == "expedite") {
        echo("A rush order has been placed with the following details:\n\n" . $book . $patron);
        return "A rush order has been placed with the following details:\n\n" . $book . $patron;
    }
}

?>