<?php

$config = array(
	"db" => array(
		"dbName" => "project",
		"userName" => "project",
		"password" => "project",
		"host" => "mysql"
	),
	"pqApi" => array(
		"key" => "7be2d31f-05c7-4937-afb8-4ff0ed98cd17",
		"stockCheck" => "https://oasis-services-alpha.proquest.com/stockcheck/?apiKey=",
		"order" => "https://oasis-services-alpha.proquest.com/order/?dupeover=false&Quantity=1&apiKey="
	),
	"email" => array(
		"to" => "justin.vanvoorst",
		"subject" => "test message"
	)
);

$db = new PDO(
	"mysql:host={$config["db"]["host"]};dbname={$config["db"]["dbName"]}",
	$config["db"]["userName"],
	$config["db"]["password"]
);

// docker.dev/index.html?isbn=9780833060396&title=Mergers%20and%20acquisitions%2C entrepreneurship%20and%20innovation&author=Bydlowska%2C%20Jowita

// docker.dev/index.html?isbn=9781928088219&author=Skibsrud, Johanna, 1980-, author.&title=The description of the world / Johanna Skibsrud

// http://127.0.0.1/index.html?isbn=9781786353726&author=&title=Mergers and acquisitions, entrepreneurship and innovation / edited by Yaakov Weber, Shlomo Y. Tarba.

// hiH7YJEmtD9kFt2w appuser

?>
