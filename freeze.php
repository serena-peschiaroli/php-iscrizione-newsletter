<?php

session_start();


// Calcolo del tempo rimanente

$remainingTime = ($_SESSION['freeze'] + 30) - time();
var_dump($remainingTime, time());

// redirect se il tempo rimanente è minore o uguale a 0

if ($remainingTime <= 0) {
    header('Location: index.php');
    session_destroy();
    exit();
}




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./styles/style.css" rel="stylesheet">
</head>

<body>
    <section class="bg-light">
        <div class="container mt-5 p-5 d-flex align-items-center justify-content-center">
            <div class="ms_container col border border-5 border-danger bg-light p-5 d-flex align-items-center justify-content-center">
                <h1 class="text-danger"> TROPPI TENTATIVI. RIPROVA tra <?php echo ($remainingTime) ?> </h1>
            </div>

        </div>


    </section>

</body>

</html>