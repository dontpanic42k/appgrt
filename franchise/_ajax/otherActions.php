<?
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

// define('EMAIL_ADMIN', 'dontpanic42k@gmail.com');
define('EMAIL_ADMIN', 'appgreat.store@mail.ru');


$action = $_POST['action'];

if( $action == 'smtp_send_email' ){
    smtp_send_email();
}





function smtp_send_email(){

    ///////////////////
    // отправка писем
    include $_SERVER['DOCUMENT_ROOT'] . '/franchise/template/js/PHPMailer/index.php';

    $email__to = EMAIL_ADMIN;
    $email__subject = 'С сайта';
    $email__subject .= !empty($_POST['subject'])  ?  ' - ' . $_POST['subject']  :  ' - Форма обратной связи';
    
    $email__body =  '';
    $email__body .= !empty( $_POST['name'] )  ?  'Имя: ' . $_POST['name'] . '<br>' :  '';
    $email__body .= !empty( $_POST['name2'] )  ?  'Фамилия: ' . $_POST['name2'] . '<br>' :  '';
    $email__body .= !empty( $_POST['tel'] )  ?  'Телефон: ' . $_POST['tel'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['email'] )  ?  'Email: ' . $_POST['email'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['device'] )  ?  'Устройство: ' . $_POST['device'] . '<br>'  :  '';
    $email__body .= !empty( $_POST['comment'] )  ?  'Комментарий: ' . $_POST['comment'] . '<br>'  :  '';
    // $email__body .= !empty( $_POST['form-id'] )  ?  '<br>' . 'Из какой формы: ' . $_POST['form-id'] . '<br>'  :  '';
    
    
    SMTP_mail($email__to, $email__subject, $email__body);
    echo 1;
}


?>