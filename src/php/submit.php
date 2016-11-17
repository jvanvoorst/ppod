<?php

    include('./../resources/lib/httpful/httpful.phar');
    
    // get data from POST
    $isbn = $_GET['isbn'];
    $title = $_GET['title'];
    $author = $_GET['author'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $affiliation = $_POST['affiliation'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $delivery = $_POST['delivery'];

    $url =  $config['pqApi']['order'] . $config['pqApi']['key'] . '&ISBN=' . $isbn;
    
    echo 'submitted';

    exit();

?>
