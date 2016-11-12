<?php

    include('./../resources/lib/httpful/httpful.phar');
    //get data from POST
    // $isbn = $_GET['isbn'];
    // $title = $_GET['title'];
    // $author = $_GET['author'];

    $lastName = $_POST['lastName'];

    $apiKey = '7be2d31f-05c7-4937-afb8-4ff0ed98cd17';
    $url = 'https://oasis-services-alpha.proquest.com/stockcheck/?apiKey=' . $apiKey . '&ISBN=' . $isbn;
    
    echo 'submitted';
    echo $lastName;

    exit();

    // isbn = 080614839x
?>
