<?php

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request.'
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| Contact Details
|--------------------------------------------------------------------------
*/

$to = 'sahilvisionvivante@gmail.com';

/*
|--------------------------------------------------------------------------
| Get Form Data
|--------------------------------------------------------------------------
*/

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

if ($name === '' || $email === '' || $message === '') {
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address.'
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| Sanitize Header Values
|--------------------------------------------------------------------------
*/

$name    = str_replace(["\r", "\n"], '', $name);
$email   = str_replace(["\r", "\n"], '', $email);
$service = str_replace(["\r", "\n"], '', $service);

/*
|--------------------------------------------------------------------------
| Email Subject
|--------------------------------------------------------------------------
*/

$subject = 'New Contact Form Message - Vision Vivante';

/*
|--------------------------------------------------------------------------
| Email Body
|--------------------------------------------------------------------------
*/

$emailBody = "
You have received a new contact form submission.

----------------------------------------
CONTACT DETAILS
----------------------------------------

Name:
$name

Email:
$email

Service:
$service

----------------------------------------
MESSAGE
----------------------------------------

$message

----------------------------------------
Sent from:
Vision Vivante Website
";

/*
|--------------------------------------------------------------------------
| Email Headers
|--------------------------------------------------------------------------
|
| IMPORTANT:
| Replace no-reply@yourdomain.com with an email address
| from your actual website domain.
|
*/

$headers = [];

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'From: Vision Vivante Website <no-reply@visionvivante.in>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . phpversion();

/*
|--------------------------------------------------------------------------
| Send Email
|--------------------------------------------------------------------------
*/

$sent = mail(
    $to,
    $subject,
    $emailBody,
    implode("\r\n", $headers)
);

/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
*/

if ($sent) {

    echo json_encode([
        'success' => true,
        'message' => 'Your message has been sent successfully.'
    ]);

} else {

    echo json_encode([
        'success' => false,
        'message' => 'The email could not be sent. Please try again later.'
    ]);
}

exit;