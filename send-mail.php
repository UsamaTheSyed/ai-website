<?php
header('Content-Type: application/json; charset=utf-8');

// ---- CONFIG: change these ----
$toEmail   = 'you@yourdomain.com';      // where messages are delivered
$fromEmail = 'no-reply@yourdomain.com'; // should be an address on your own domain
$siteName  = 'Your Website';
// ------------------------------

function respond(int $status, array $payload): void
{
    http_response_code($status);
    echo json_encode($payload);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, ['success' => false, 'message' => 'Invalid request method.']);
}

// Honeypot: bots fill this hidden field. Pretend success and drop it.
if (!empty($_POST['website'])) {
    respond(200, ['success' => true, 'message' => 'Thank you! Your message has been sent.']);
}

// Collect and clean input
$name    = trim(preg_replace('/\s+/', ' ', strip_tags($_POST['name']  ?? '')));
$phone   = trim($_POST['phone']   ?? '');
$email   = trim($_POST['email']   ?? '');
$message = trim(strip_tags($_POST['message'] ?? ''));
$agree   = !empty($_POST['agree']);

// Dropdown: only accept values from this list (keep in sync with the <option>s in the form)
$allowedPlatforms = ['Amazon', 'Shopify', 'Walmart', 'TikTok', 'Etsy', 'eBay', 'YouTube', 'Other'];
$platform = trim($_POST['platform'] ?? '');

// Validate
$errors = [];

if ($name === '' || mb_strlen($name) > 100) {
    $errors['name'] = 'Please enter your name (max 100 characters).';
}
if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    $errors['phone'] = 'Please enter a valid phone number.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 150) {
    $errors['email'] = 'Please enter a valid email address.';
}
if (mb_strlen($message) < 10 || mb_strlen($message) > 3000) {
    $errors['message'] = 'Message must be between 10 and 3000 characters.';
}
if ($platform !== '' && !in_array($platform, $allowedPlatforms, true)) {
    $errors['platform'] = 'Please choose a valid option.';
}
if (!$agree) {
    $errors['agree'] = 'You must agree before submitting.';
}

if ($errors) {
    respond(422, [
        'success' => false,
        'message' => 'Please fix the highlighted fields.',
        'errors'  => $errors,
    ]);
}

// Build the email
$subject = "New contact form message from {$name}";

$body  = "You received a new message from {$siteName}:\n\n";
$body .= "Name:    {$name}\n";
$body .= "Phone:   {$phone}\n";
$body .= "Email:   {$email}\n";
$body .= "Platform: " . ($platform !== '' ? $platform : 'Not specified') . "\n";
$body .= "IP:      " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$body .= "Date:    " . date('Y-m-d H:i:s') . "\n\n";
$body .= "Message:\n{$message}\n";

// $email passed FILTER_VALIDATE_EMAIL (no line breaks), $name had whitespace collapsed,
// so header injection is not possible here.
$headers = [
    'From'         => "{$siteName} <{$fromEmail}>",
    'Reply-To'     => "{$name} <{$email}>",
    'Content-Type' => 'text/plain; charset=UTF-8',
    'X-Mailer'     => 'PHP/' . phpversion(),
];

$sent = mail($toEmail, $subject, $body, $headers); // array headers need PHP 7.2+

if ($sent) {
    respond(200, ['success' => true, 'message' => 'Thank you! Your message has been sent.']);
}

error_log('Contact form: mail() failed for ' . $email);
respond(500, ['success' => false, 'message' => 'Sorry, we could not send your message. Please try again later.']);