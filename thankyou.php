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
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
                <h1> Grazie per esserti iscritto alla newsletter!</h1>
            </div>

            <div class="col-12 mb-3 text-center">
                <?php
                //controllare se l'email corrisponde a Session= valid email;
                if (isset($_SESSION['valid_email'])) {
                    $email = $_SESSION['valid_email'];
                    //messaggio di conferma iscrizione
                    echo "<h2>Ti sei iscritto con l'indirizzo: $email</h2>";
                    //resetta counter x tentativi iscrizione

                    $_SESSION['subscription_attempts'] = 0;
                }

                ?>
            </div>

            <div class="col align-self-center text-center">
                <form action="index.php" method="post">
                    <!-- bottone x tornare a index -->
                    <button type="submit" class="btn btn-outline-success">Indietro</button>
                </form>
            </div>

        </div>

    </section>


</body>

</html>