<?php 

//in function.php: function validateEmail(email) ritornare filter_var(email, filter validate email funzione di php)

function validateEmail($email){
    $trimmedEmail = trim($email);
    return filter_var($trimmedEmail, FILTER_VALIDATE_EMAIL);
}

?>
