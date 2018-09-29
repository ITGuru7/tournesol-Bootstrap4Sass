<?php
  
  if (isset($_POST['name'])) {
    $to = 'contact@tournesol.com.ua';
    $subject = 'Message from ' . $_POST['name'];
    $message =  'Phone number: ' . $_POST['phone'] . '\r\n' . 
                'Need: ' . $_POST['need'] . '\r\n' . 
                'Content: ' . $_POST['message'] . '\r\n' ;

    $headers =  'From: ' . $_POST['email'] . '\r\n' .
                'Reply-To: ' . $_POST['email'] . '\r\n' .
                'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
      echo json_encode("success");
      return;
    }
  }

  echo json_encode("fail");

?>