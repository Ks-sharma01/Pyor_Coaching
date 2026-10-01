
<?php

require_once __DIR__ . "/config/config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}


/* Load PHPMailer */
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';


/* Clean input */
function clean($value)
{
    return htmlspecialchars(
        trim($value ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );
}


/* Get form data */
$contact_name = clean($_POST["contact_name"] ?? '');
$contact_email = clean($_POST["contact_email"] ?? '');
$contact_subject = clean($_POST["contact_subject"] ?? '');
$contact_comment = clean($_POST["contact_comment"] ?? '');


/* Validate */
if (
    empty($contact_name) ||
    empty($contact_email) ||
    empty($contact_subject) ||
    empty($contact_comment)
) {
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields.'
    ]);
    exit;
}


if (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address.'
    ]);
    exit;
}


$mail = new PHPMailer(true);

try {

    /* SMTP Configuration */
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'ksgamingarena01@gmail.com';
    $mail->Password = 'qijbfnbianemkodb';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;


    /* Sender */
    $mail->setFrom(
        'ksgamingarena01@gmail.com',
        'Pyor Coaching Website'
    );


    /* Receiver */
    $mail->addAddress('ks009232@gmail.com');


    /* Reply to visitor */
    $mail->addReplyTo(
        $contact_email,
        $contact_name
    );


    /* Email content */
    $mail->isHTML(true);

    $mail->Subject = 'PYOR Coaching - New Message Received';


    $mail->Body = "
        <html>
        <body>

            <table cellpadding='8' cellspacing='0' border='0'>

                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{$contact_name}</td>
                </tr>

                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{$contact_email}</td>
                </tr>

                <tr>
                    <td><strong>Subject:</strong></td>
                    <td>{$contact_subject}</td>
                </tr>

                <tr>
                    <td><strong>Message:</strong></td>
                    <td>{$contact_comment}</td>
                </tr>

            </table>

        </body>
        </html>
    ";


    /* Plain-text alternative */
    $mail->AltBody =
        "New Message Received\n\n" .
        "Name: " . $contact_name . "\n" .
        "Email: " . $contact_email . "\n" .
        "Subject: " . $contact_subject . "\n" .
        "Message: " . $contact_comment . "\n";


    /* Send */
    $mail->send();


    echo json_encode([
        'success' => true,
        'message' => 'Your message has been sent successfully.'
    ]);

} catch (Exception $e) {

    echo json_encode([
        'success' => false,
        'message' => 'Message could not be sent.',
        'error' => $mail->ErrorInfo
    ]);
}

