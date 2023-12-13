<?php 

//in function.php: function validateEmail(email) ritornare filter_var(email, filter validate email funzione di php)

function validateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>
