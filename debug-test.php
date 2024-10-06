<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Trigger an error
echo $undefined_variable;

// Write a custom log message
error_log('Debugging: Custom log message.');
?>
