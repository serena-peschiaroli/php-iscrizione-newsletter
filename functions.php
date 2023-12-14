<?php 

//in function.php: function validateEmail(email) ritornare filter_var(email, filter validate email funzione di php)

function validateEmail($email){
    $trimmedEmail = trim($email);
    return filter_var($trimmedEmail, FILTER_VALIDATE_EMAIL);
}


// NOTE DA CORREZIONE: il salvataggio di mail della session si può implementare anche in functions.php all'interno della funzione di validazione della mail con un condizionale; se email corretta,  $_SESSION['valid_email'] = $email; e redirect to thankyou.php
?>
