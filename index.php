<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'relectrify-9a96b.firebaseio.com';
// --- Use your token from Firebase here
$token = '';
// --- Here is your parameter from the http GET
$YOUR_data = $_GET['YOUR_data'];
// --- Set up your Firebase url structure here
$firebasePath = '/';

/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->set($firebasePath, $rfidid);

sleep(2);
printf("Result: %s\n", $response);
sleep(2);
