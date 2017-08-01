<?php

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    $message = "Hello,
$first_name $last_name sent you the following message:

'$comments'

Phone: $phone
Email: $email";

    $mail = mail("alec.bell@snowball.software", "CONTACT FORM COMPLETED", $message, "From: $email");
    if($mail){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed.";
}
?>
