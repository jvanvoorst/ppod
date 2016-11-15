
<?php

    include('./../resources/lib/httpful/httpful.phar');
    include('./../resources/config.php');

    $isbn = $_GET['isbn'];
    $url =  $config['pqApi']['testUrl'] . $config['pqApi']['key'] . '&ISBN=' . $isbn;

    $response = \Httpful\Request::get($url)->send();
    $res = json_decode($response);

    echo $isbn;
    echo "<h1>$res->Environment</h1>";
    echo "<h2>$res->DeliveryDays</h2>";
    echo "<h2>$res->Message</h2>";

    exit();

    // isbn = 080614839x
?>
