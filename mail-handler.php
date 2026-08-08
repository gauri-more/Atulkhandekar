<?php
    /*
    name
    email
    message
    */
    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"] ?? ""));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
        $phone = strip_tags(trim($_POST["phone"] ?? ""));
        $subject = strip_tags(trim($_POST["subject"] ?? ""));
        $message = strip_tags(trim($_POST["message"] ?? ""));

        // Validate required fields.
        if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Please fill in your name, a valid email address and a message.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "atulrkhandekar@gmail.com";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        if (!empty($phone)) {
            $email_content .= "Phone: $phone\n";
        }
        if (!empty($subject)) {
            $email_content .= "Subject: $subject\n";
        }
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, "New Enquiry From Website", $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
