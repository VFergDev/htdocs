<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$emailFrom = $_POST['email'];
echo $emailFrom;

if (isset($_POST["send"])) {
    try {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'djveev86@gmail.com';
        $mail->Password = 'svwahfbxrhbxzwvu';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('djveev86@gmail.com');
        $mail->addAddress($_POST["email"]);
        $mail->isHTML(true);

        $mail->Subject = 'Add ' . $emailFrom;
        $mail->Body = 'Add ' . $emailFrom . ' to your subscription list';

        $mail->send();

        echo '<script>alert("Subscribed Successfully");</script>';
        echo '<script>location.href = "index.php";</script>';
    } catch (Exception $e) {
        echo '<script>alert("Error: ' . $e->getMessage() . '");</script>';
        echo '<script>location.href = "index.php";</script>';
    }
}
?>
