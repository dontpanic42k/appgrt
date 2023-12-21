<?
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';





// $email_to = $_POST['email_to'];
// $subject = $_POST['subject'];
// $body = $_POST['body'];


function SMTP_mail($email_to, $subject, $body){
    $host = 'ssl://smtp.mail.ru';
    $admin_email = 'noreply@kingstore.link';
    $admin_password = 'vzz2f3ctFcZ4GWkgS4xU';   // TRtEmttY11r-
    $admin_port = 465;
    $admin_name = 'Автоответчик';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->CharSet = "utf-8";
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $host;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $admin_email;                     //SMTP username
        $mail->Password   = $admin_password;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = $admin_port;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($admin_email, $admin_name);
        // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $mail->addAddress($email_to);               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        if (array_key_exists('file', $_FILES)) {
            $ext = PHPMailer::mb_pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['file']['name'])) . '.' . $ext;
        
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
                $mail->addAttachment($uploadfile, 'My uploaded file');
            }
        }

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>