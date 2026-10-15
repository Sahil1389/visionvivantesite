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
| Notification Recipient
|--------------------------------------------------------------------------
*/

$to = 'sahilvisionvivante@gmail.com';

/*
|--------------------------------------------------------------------------
| Get Form Data
|--------------------------------------------------------------------------
*/

$email = trim($_POST['email'] ?? '');

/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

if ($email === '') {
    echo json_encode([
        'success' => false,
        'message' => 'Please enter your email address.'
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
| Sanitize
|--------------------------------------------------------------------------
*/

$email = str_replace(["\r", "\n"], '', $email);

/*
|--------------------------------------------------------------------------
| Store Subscriber (append-only CSV, outside public access via .htaccess)
|--------------------------------------------------------------------------
*/

$dataDir  = __DIR__ . '/data';
$dataFile = $dataDir . '/subscribers.csv';

if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0755, true);
}

$alreadySubscribed = false;

if (file_exists($dataFile)) {
    $existing = @file($dataFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($existing) {
        foreach ($existing as $line) {
            $parts = str_getcsv($line);
            $existingEmail = strtolower(trim($parts[1] ?? ''));
            if ($existingEmail === strtolower($email)) {
                $alreadySubscribed = true;
                break;
            }
        }
    }
}

if (!$alreadySubscribed) {
    $fp = fopen($dataFile, 'a');
    if ($fp) {
        if (flock($fp, LOCK_EX)) {
            fputcsv($fp, [date('Y-m-d H:i:s'), $email]);
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    }
}

/*
|--------------------------------------------------------------------------
| Notify Admin By Email
|--------------------------------------------------------------------------
*/

if (!$alreadySubscribed) {

    $subject = 'New Newsletter Subscriber - Vision Vivante';

    $emailBody = "
A new visitor has subscribed to the Vision Vivante newsletter.

----------------------------------------
SUBSCRIBER
----------------------------------------

Email:
$email

Subscribed:
" . date('Y-m-d H:i:s') . "

----------------------------------------
Sent from:
Vision Vivante Website
";

    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';
    $headers[] = 'From: Vision Vivante Website <no-reply@visionvivante.in>';
    $headers[] = 'Reply-To: ' . $email;
    $headers[] = 'X-Mailer: PHP/' . phpversion();

    @mail($to, $subject, $emailBody, implode("\r\n", $headers));
}

/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
*/

echo json_encode([
    'success' => true,
    'message' => $alreadySubscribed
        ? "You're already on the list — thanks for sticking around!"
        : 'Thanks for subscribing! Look out for new posts in your inbox.'
]);

exit;
