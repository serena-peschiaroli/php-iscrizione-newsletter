<?php


//session start;
session_start();

//inizializzare variabili come stringhe vuote per tenere il valore dell'input e per assicurare che le variabili esistano anche quando il form non è stato inviato
$email = "";
$emailErr = "";


//require_once functions.php x validare indirizzo email


require_once './functions.php';

// var_dump($_POST);
// validare email: 

// controlla se esiste la variabile x tentativi iscrizione

if (!isset($_SESSION['subscription_attempts'])) {
    $_SESSION['subscription_attempts'] = 0;
}



if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (empty($email)) {
        $emailErr = 'inserire un indirizzo email!';
        echo "<div class='alert alert-warning' role='alert'>$emailErr</div>";
    } elseif (!validateEmail($email)) {
        $_SESSION['subscription_attempts']++;

        $emailErr = 'formato non valido!';
        echo "<div class='alert alert-danger' role='alert'>$emailErr</div>";
        if ($_SESSION['subscription_attempts'] >= 3) {
            $_SESSION['freeze'] = time();
            // cancella la sessione dopo 3 tentativi
            header('Location: ./freeze.php');
            die;
        }
    } else {
        $_SESSION['valid_email'] = $email;
        header('Location: ./thankyou.php');
        die;

        // echo "<div class='alert alert-success' role='alert'>$email è un indirizzo valido! </div>";


    }
}






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./styles/style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <!-- assegnando all'input value= email, permette di mantenere dinamicamente l'email inserita -->
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" 
                value="<?php echo ($email); ?>">

            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

</body>

</html>