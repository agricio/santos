<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zipcode = $_POST['zipcode'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n zipcode: $zipcode \n Priority: $priority \n type: $type \n Message: $message";
$recipient = "santosgeneralservices12@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

$mail_status = mail($recipient, $subject, $formcontent, $mailheader);

//if($mail_status == true){
//    echo "<script>alert('Thank you for the message. We will contact you shortly.');</script>";
//    header('Location:https://santosgeneralservice.com/index.html');
//}else{
//    echo "<script>alert('Sorry! Please try again.');</script>";
//    header('Location:https://santosgeneralservice.com/pages/request.html');/
//}

if ($mail_status) {    
        echo "<script>alert('Thank you for the message. We will contact you shortly.');</script>
        <script type='text/javascript'>window.location.href='https://santosgeneralservice.com/index.html'</script>"; 
    } else {
         echo "<script>alert('Sorry! Please try again.');</script>
        <script type='text/javascript'>window.location.href='https://santosgeneralservice.com/pages/request.html'</script>"; }
  ?>
