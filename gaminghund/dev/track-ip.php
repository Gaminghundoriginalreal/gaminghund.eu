<?php
// Get the IP address of the user
$ip = $_SERVER['REMOTE_ADDR'];

// Set the directory name
$dir = 'tracked-ips';

// Check if the directory exists, if not, create it
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

// Get the current timestamp
$timestamp = date("Y-m-d_H-i-s");

// Create a filename based on the timestamp
$file = $dir . '/' . $timestamp . '.txt';

// Write the IP address and timestamp to a file
file_put_contents($file, "IP: " . $ip . "\nTimestamp: " . $timestamp);

// Redirect back to the HTML page with a success message
header('Location: index.html');
exit;
?>
