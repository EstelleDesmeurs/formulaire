
<?php

 $options = array(
    'name'    => FILTER_SANITIZE_STRING,
    'email'   => FILTER_VALIDATE_EMAIL,
    'message' => FILTER_SANITIZE_STRING);     

$result = filter_input_array(INPUT_POST, $options);                  
$result = trim($result);

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