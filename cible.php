<?php

function sanitize($x) { 
    $x = filter_var($x, FILTER_SANITIZE_STRING);
    $x = htmlspecialchars($x, FILTER_SANITIZE_STRING);    
    return $x;
}
 
$firstName = sanitize($_POST['firstName']);
$lastName = sanitize($_POST['lastName']);                             
$message = sanitize($_POST['message']);

$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

                   
function validate($y) {
    $y= filter_var($y, FILTER_VALIDATE_STRING);
    return $y;
}
                                         
$firstName = validate($_POST['firstName']);
$lastName = validate($_POST['lastName']);                            
$message = validate($_POST['message']);


if(isset($_POST['pouletteform'])) {
    if(
        !empty ($_POST['firstName']) AND 
        !empty ($_POST['lastName']) AND 
        !empty ($_POST['email']) AND 
        !empty ($_POST['message'])
    ) {
        echo "We just received your message!";
    }

    else {
        echo "Please fill all the required fields!";
    }
}   

                                         
if (isset($email)) {
    echo("Email is valid");
} 
else {
    echo("Email is not valid");
}                                      




?>