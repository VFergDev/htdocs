<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

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
        $mail->addAddress($emailFrom);
        $mail->isHTML(true);

        $mail->Subject = 'Subscription Confirmation';

        // Read the contents of the newsletter.html file
        $newsletterEmail = file_get_contents('newsletter.html');

        $mail->Body = $newsletterEmail;

        $mail->send();

        // Send email to notify your team about the new subscriber
        $notificationMail = new PHPMailer(true);

        $notificationMail->isSMTP();
        $notificationMail->Host = 'smtp.gmail.com';
        $notificationMail->SMTPAuth = true;
        $notificationMail->Username = 'djveev86@gmail.com';
        $notificationMail->Password = 'svwahfbxrhbxzwvu';
        $notificationMail->SMTPSecure = 'ssl';
        $notificationMail->Port = 465;

        $notificationMail->setFrom('djveev86@gmail.com');
        $notificationMail->addAddress('colormehighco@gmail.com'); // Replace with the email address to receive the notification
        $notificationMail->isHTML(true);

        $notificationMail->Subject = 'New Subscriber';
        $notificationMail->Body = 'A new subscriber has joined the mailing list. Email: ' . $emailFrom;

        $notificationMail->send();

        echo '<script>alert("Subscribed Successfully");</script>';
        echo '<script>location.href = "confirm-message.html";</script>';
    } catch (Exception $e) {
        echo '<script>alert("Error: ' . $e->getMessage() . '");</script>';
        echo '<script>location.href = "../index.php";</script>';
    }
}
?>
