<?php

include('./../resources/config.php');

try {
    $db = new PDO(
        "mysql:host={$config["db"]["host"]};dbname={$config["db"]["dbName"]}",
        $config["db"]["userName"],
        $config["db"]["password"]
    );
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE orders (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    isbn VARCHAR(20) NOT NULL,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(50) NOT NULL, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    affiliation VARCHAR(10) NOT NULL,
    department VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    delivery VARCHAR(10) NOT NULL,
    date TIMESTAMP
    )";

    // use exec() because no results are returned
    $db->exec($sql);
    echo "Table orders created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$db = null;

?>