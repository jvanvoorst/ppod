<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Print Purchase on Demand</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <?php
        $firstName = $lastName = $affiliation = $department = $email = $title = $author = $other = $priority = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = clean_input($_POST["firstName"]);
            $lastName = clean_input($_POST["lastName"]);
            $affiliation = clean_input($_POST["affiliation"]);
            $department = clean_input($_POST["department"]);
            $email = clean_input($_POST["email"]);
            $title = clean_input($_POST["title"]);
            $author = clean_input($_POST["author"]);
            $other = clean_input($_POST["other"]);
            $priority = clean_input($_POST["priority"]);
        }

        function clean_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        echo $firstName;
        echo "<br>";
        echo $priority;
        ?>

    </body>

</html>