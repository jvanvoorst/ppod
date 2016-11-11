
<?php

    include('./httpful.phar');

    $isbn = $_GET['isbn'];
    $apiKey = '7be2d31f-05c7-4937-afb8-4ff0ed98cd17';
    $url = 'https://oasis-services-alpha.proquest.com/stockcheck/?apiKey=' . $apiKey . '&ISBN=' . $isbn;
    $response = \Httpful\Request::get($url)->send();
    $res = json_decode($response);

    echo $isbn;
    echo "<h1>$res->Environment</h1>";
    echo "<h2>$res->DeliveryDays</h2>";
    echo "<h2>$res->Message</h2>";

    // isbn = 080614839x
?>
