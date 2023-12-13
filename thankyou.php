<?php

session_start();



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter subscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">


        <h1> Grazie per esserti iscritto alla newsletter!</h1>

        <?php
    //controllare se l'email corrisponde a Session= valid email;
        if (isset($_SESSION['valid_email'])) {
            $email = $_SESSION['valid_email'];
            //messaggio di conferma iscrizione
            echo "<h2>Ti sei iscritto con l'indirizzo: $email</h2>";
        }

        ?>
        <div class="div">
            <form action="index.php" method="post">
                <!-- bottone x tornare a index -->
                <button type="submit" class="btn btn-outline-success">Indietro</button>
            </form>
        </div>
    </div>


</body>

</html>