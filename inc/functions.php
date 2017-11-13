<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require '../vendor/autoload.php';
//(user email,subject, htmlcontent link do reset pswd, )
function sendEmail ($subject, $htmlContent){
  global $config;
  $mail = new PHPMailer(true);     // Passing `true` enables exceptions


  try {
      //Server settings
    //enable just to check if it works  $mail->SMTPDebug = 6;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = $config['MAIL_HOST'];  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = $config['MAIL_USERNAME'];                 // SMTP username
      $mail->Password = $config['MAIL_PASSWORD'];           // file_get_contents('pswd.txt'); SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('tam_escalante@hotmail.com', 'Tam hotmail');
      // Add a recipient
      $mail->addAddress('escalante_tam@yahoo.co.uk', 'tam yahoo');

      //Content
      // Set email format to HTML
      $mail->isHTML(true);
      //'Here is the subject';
      $mail->Subject = $subject;
      //'This is the HTML message body <b>in bold!</b>';
      $mail->Body    = '<b>'.$htmlContent.'</b>';

      $mail->send();
      //echo 'Message has been sent'; to check that it was sent
      //send true if message sent
      $emailSent = true;
    } catch (Exception $e) {
      /* to check if email was not sent:
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
      */
      $emailSent = false;
      $emailError = $mail->ErrorInfo;
      }
}//closes function sendEmail

?>
