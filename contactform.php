
//  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $mailFrom = $_POST['mail'];
      $message = $_POST['message'];

      $mailTo = "nathan-sir@hotmail.com";
      $headers = "From: ".$name;
      $text = "You have received an e-mail from ".$name.".\n\n".$message;

      mail($mailTo, $subject, $text, $headers);
      header("Location: index.php?mailsend");
  }
//
//
if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        // submit message
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $mesageSubject = $_POST['subject'];
        $message = $_POST['message']

        $to = "nathan-sir@hotmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message ".$message. "\r\n";

        mail($to,$messageSubject,$body);

        $message_sent = true;

    }
    else {
        $invalid_class_name = "form-invalid";
    }

}
//

<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "nuxttux@gmail.com";
  $subject = "Customer Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You!";

 ?>
