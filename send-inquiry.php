<?php
header('Content-Type: application/json; charset=utf-8');

// ---- CONFIG: change these ----
$toEmail   = 'you@yourdomain.com';      // where inquiries are delivered
$fromEmail = 'no-reply@yourdomain.com'; // should be an address on your own domain
$siteName  = 'Your Website';
// ------------------------------

// Keep in sync with the pills and the budget <option>s in the form
$allowedPlatforms = ['Amazon', 'Shopify', 'Walmart', 'TikTok', 'Etsy', 'eBay', 'YouTube', 'Other'];
$budgetOptions = [
    'under-1k' => 'Under $1,000',
    '1k-5k'    => '$1,000 - $5,000',
    '5k-10k'   => '$5,000 - $10,000',
    '10k-25k'  => '$10,000 - $25,000',
    '25k-plus' => '$25,000+',
];

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
    respond(200, ['success' => true, 'message' => 'Thank you! Your inquiry has been sent.']);
}

// Collect and clean input
$name        = trim(preg_replace('/\s+/', ' ', strip_tags($_POST['fullName'] ?? '')));
$email       = trim($_POST['email'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$budgetKey   = trim($_POST['budget'] ?? '');
$message     = trim(strip_tags($_POST['message'] ?? ''));
$platformRaw = trim($_POST['platform'] ?? '');
$platforms   = array_values(array_unique(array_filter(array_map('trim', explode(',', $platformRaw)))));

// Validate
$errors = [];

if ($name === '' || mb_strlen($name) > 100) {
    $errors['fullName'] = 'Please enter your name (max 100 characters).';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 150) {
    $errors['email'] = 'Please enter a valid email address.';
}
if ($phone !== '' && !preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    $errors['phone'] = 'Please enter a valid phone number.';
}
if (!isset($budgetOptions[$budgetKey])) {
    $errors['budget'] = 'Please choose a monthly budget range.';
}
if (mb_strlen($message) > 3000) {
    $errors['message'] = 'Message must be 3000 characters or fewer.';
}
if (!$platforms || count($platforms) > count($allowedPlatforms) || array_diff($platforms, $allowedPlatforms)) {
    $errors['platform'] = "Please choose what you're interested in.";
}

if ($errors) {
    respond(422, [
        'success' => false,
        'message' => 'Please fix the highlighted fields.',
        'errors'  => $errors,
    ]);
}

// Build the email
$subject = "New inquiry from {$name}";

$body  = "You received a new inquiry from {$siteName}:\n\n";
$body .= "Interested in: " . implode(', ', $platforms) . "\n";
$body .= "Name:          {$name}\n";
$body .= "Email:         {$email}\n";
$body .= "Phone:         " . ($phone !== '' ? $phone : 'Not provided') . "\n";
$body .= "Monthly budget: {$budgetOptions[$budgetKey]}\n";
$body .= "IP:            " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$body .= "Date:          " . date('Y-m-d H:i:s') . "\n\n";
$body .= "Message:\n" . ($message !== '' ? $message : '(none)') . "\n";

// $email passed FILTER_VALIDATE_EMAIL (no line breaks) and $name had whitespace collapsed,
// so header injection is not possible here.
$headers = [
    'From'         => "{$siteName} <{$fromEmail}>",
    'Reply-To'     => $email,
    'Content-Type' => 'text/plain; charset=UTF-8',
    'X-Mailer'     => 'PHP/' . phpversion(),
];

$sent = mail($toEmail, mb_encode_mimeheader($subject, 'UTF-8'), $body, $headers); // array headers need PHP 7.2+

if ($sent) {
    respond(200, ['success' => true, 'message' => 'Thank you! Your inquiry has been sent.']);
}

error_log('Inquiry form: mail() failed for ' . $email);
respond(500, ['success' => false, 'message' => 'Sorry, we could not send your inquiry. Please try again later.']);
