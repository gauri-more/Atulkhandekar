<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    echo "Invalid request.";
    exit;
}

/*
|--------------------------------------------------------------------------
| Get form fields
|--------------------------------------------------------------------------
*/

$name = strip_tags(trim($_POST["name"] ?? ""));
$name = str_replace(array("\r", "\n"), " ", $name);

$email = filter_var(
    trim($_POST["email"] ?? ""),
    FILTER_SANITIZE_EMAIL
);

$phone = strip_tags(trim($_POST["phone"] ?? ""));
$phone = str_replace(array("\r", "\n"), " ", $phone);

$subject = strip_tags(trim($_POST["subject"] ?? ""));
$subject = str_replace(array("\r", "\n"), " ", $subject);

$message = strip_tags(trim($_POST["message"] ?? ""));


/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

if (
    empty($name) ||
    empty($message) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    http_response_code(400);
    echo "Please fill in your name, a valid email address and a message.";
    exit;
}


/*
|--------------------------------------------------------------------------
| Recipient
|--------------------------------------------------------------------------
*/

$recipient = "gauriw@innolytic.co";


/*
|--------------------------------------------------------------------------
| Email Content
|--------------------------------------------------------------------------
*/

$email_content  = "New Enquiry From Website\n\n";

$email_content .= "Name: " . $name . "\n";
$email_content .= "Email: " . $email . "\n";

if (!empty($phone)) {
    $email_content .= "Phone: " . $phone . "\n";
}

if (!empty($subject)) {
    $email_content .= "Subject: " . $subject . "\n";
}

$email_content .= "\nMessage:\n";
$email_content .= $message . "\n";


/*
|--------------------------------------------------------------------------
| Email Headers
|--------------------------------------------------------------------------
*/

$domain = $_SERVER["HTTP_HOST"] ?? "yourwebsite.com";

$email_headers  = "From: Website Contact Form <no-reply@" . $domain . ">\r\n";
$email_headers .= "Reply-To: " . $email . "\r\n";
$email_headers .= "MIME-Version: 1.0\r\n";
$email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


/*
|--------------------------------------------------------------------------
| Send Email
|--------------------------------------------------------------------------
*/

if (
    mail(
        $recipient,
        "New Enquiry From Website",
        $email_content,
        $email_headers
    )
) {
    http_response_code(200);
    echo "Thank You! Your message has been sent.";
    exit;
}

http_response_code(500);
echo "Oops! Something went wrong and we couldn't send your message.";
exit;

?>