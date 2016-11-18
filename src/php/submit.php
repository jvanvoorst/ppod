<?php

include('./../resources/lib/httpful/httpful.phar');
include('./../resources/config.php');


// get data from POST
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$affiliation = $_POST['affiliation'];
$department = $_POST['department'];
$email = $_POST['email'];
$delivery = $_POST['delivery'];

$url =  $config['pqApi']['order'] . $config['pqApi']['key'] . '&ISBN=' . $isbn;

echo $isbn;
echo $title;
echo $author;
echo $firstName;
echo $lastName;
echo $affiliation;
echo $department;
echo $email;
echo $delivery;


// insert into db
try {
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO orders (isbn, title, author, firstname, lastname, affiliation, department, email, delivery)
    VALUES ('$isbn', '$title', '$author', '$firstName', '$lastName', '$affiliation', '$department', '$email', '$delivery')";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

exit();

// , title, author, firstname, lastname, affiliation, department, email, delivery
// , $title, $author, $firstName, $lastName, $affiliation, $department, $email, $delivery

?>
