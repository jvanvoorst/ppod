<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Print Purchase on Demand</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

    <div class="container">
        <h1>Request this Book</h1>
        <p>The University Libraries does not own this book. By completing this form you are requesting that the Libraries purchase this book for the collection. Regular orders may take up to 2 weeks to arrive. If you need this book immediately, please make that choice below.</p>
    </div>

        <form class="container" action="submit.php" method="post">
            <!-- First name Last name -->
            <fieldset class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </fieldset>
            <fieldset class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName">
            </fieldset>
            <!-- Affiliation -->
            <fieldset class="radio-group">
                <legend>Affiliation</legend>
                <div class="radio">
                    <label for="grad">
                        <input id="grad" type="radio" value="grad" name="affiliation">
                        Graduate Student
                    </label>
                </div>
                <div class="radio">
                    <label for="faculty">
                        <input id="faculty" type="radio" value="faculty" name="affiliation">
                        Faculty
                    </label>
                </div>
                <div class="radio">
                    <label for="staff">
                        <input id="staff" type="radio" value="staff" name="affiliation">
                        Staff
                    </label>
                </div>
            </fieldset>
            <!-- Department Major -->
            <fieldset class="form-group">
                    <label for="department">Department/Major</label>
                    <input type="text" class="form-control" name="department" id="department">
            </fieldset>
            <!-- Email Address -->
            <fieldset>
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email">
            </fieldset>

            <h1>About the Book</h1>

            <fieldset class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </fieldset>

            <fieldset class="form-group">
                <label for="author">Author/Publisher</label>
                <input type="text" class="form-control" id="author" name="author">
            </fieldset>

            <fieldset class="form-group">
                <label for="other">Other Information</label>
                <textarea class="form-control" id="other" name="other"></textarea>
            </fieldset>

            <fieldset class="radio-group">
                <legend>Choose One:</legend>
                <div class="radio">
                    <label for="immediately">
                        <input id="immediately" type="radio" value="immediately" name="priority">
                        I need this book immediately
                    </label>
                </div>
                <div class="radio">
                    <label for="week">
                        <input id="week" type="radio" value="week" name="priority">
                        I need this book in about a week or so
                    </label>
                </div>
                <div class="radio">
                    <label for="no-hurry">
                        <input id="no-hurry" type="radio" value="no-hurry" name="priority">
                        I am not in a hurry, but please notify me when the book is available
                    </label>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-warning btn-submit">Submit</button>

        </form>

        <?php
            include('./httpful.phar');
            $url = "https://oasis-services-alpha.proquest.com/stockcheck/?apiKey=7be2d31f-05c7-4937-afb8-4ff0ed98cd17&ISBN=080614839x";
            $response = \Httpful\Request::get($url)->send();

            echo $response;

        ?>

    </body>

</html>