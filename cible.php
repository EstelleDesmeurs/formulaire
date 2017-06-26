
<?php

function sanitize($x) { 
    $x = filter_var($x, FILTER_SANITIZE_STRING);
    $x = htmlspecialchars($x, FILTER_SANITIZE_STRING);    
    return $x;
}
 
$name = sanitize($_POST['name']);                             
$message = sanitize($_POST['message']);

$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

                   


if(isset($_POST['pouletteform'])) {
    if(
        !empty ($_POST['name']) AND 
        !empty ($_POST['email']) AND 
        !empty ($_POST['message'])
    ) {
        echo "We just received your message!";
    }

    else {
        echo "Please fill all the required fields!";
    }
}   

                                         
/*if (isset($email)) {
    echo("Email is valid");
} 
else {
    echo("Email is not valid");
}       */                               

if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = 'Test';
$indexMessage = $message;
$headers = 'From:'. $email . "\r\n"; // Sender's Email
$headers .= "\r\n"; // Carbon copy to Sender
// Send Mail By PHP Mail Function
mail("estelle.desmeurs@gmail.com", $subject, $indexMessage, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}



?>