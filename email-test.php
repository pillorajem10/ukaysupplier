<?php
require_once( dirname( __FILE__ ) . '/wp-load.php' );

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Specify the recipient email address
$to = 'michael.marga2@gmail.com';

// Specify the subject
$subject = 'Test Email from WP Mail SMTP';

// Specify the message
$message = 'This is a test email to verify the WP Mail SMTP configuration.';

// Specify the headers
$headers = array(
    'Content-Type: text/html; charset=UTF-8',
    'From: support@ukayukaysupplier.com'
);

// Send the email
if ( wp_mail( $to, $subject, $message, $headers ) ) {
    echo 'Test email sent successfully.';
} else {
    echo 'Email sending failed.<br>';

    // Show last PHPMailer error
    global $phpmailer;
    if ( isset($phpmailer) ) {
        echo $phpmailer->ErrorInfo;
    }
}
?>

