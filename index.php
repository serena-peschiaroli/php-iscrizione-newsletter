<?php

/* Definire funzione per validazione
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}*/

//session start;
session_start();

//require_once functions.php x validare indirizzo email


require_once './functions.php';

var_dump($_POST);
/* validare email: 
prendere email da post; prendere validazione da funzione in functions.php;

se filter_var di email, filter_validate_email {
    l'indirzzo è valido (altre azioni se valido)
}else: alert, indirizzo non valido
} 

*/


if (isset($_POST['email'])){
    $email = $_POST['email'];

    if (validateEmail($email)) {
        // se l'email è valida: si può conservarla nella sessione; si può procedere con la thankyoupage
        //mantenere la sessione
        $_SESSION['valid_email'] = $email;
        //per il momentp, stampa msg di validazione
        echo "<p>$email è un indirizzo valido</p>";

    }else {
        //alert msg
        echo "<p>ERRORE! $email NON è un indirizzo valido</p>";
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
                <input type="text" class="form-control" id="email"  placeholder="Enter email" name="email">
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>