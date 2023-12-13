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
// if ($remainingTime <= 0) {
//     header('Location: index.php');
//     session_destroy();
//     exit(); 
// }



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1> TROPPI TENTATIVI. RIPROVA tra <?php echo ($remainingTime) ?> </h1>

    </div>

</body>

</html>