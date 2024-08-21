<?php

require_once 'feed db.php';

$name = $_POST['name'];
$date = $_POST['date'];
$email = $_POST['email'];
$feedback = $_POST["feedback"];
$send_to = $_POST["send_to"];



echo "<p>The name is <strong>$name</strong></p>"; 
echo "<p>The Date is <strong>$date</strong></p>";
echo "<p>The email is <strong>$email</strong></p>";
echo "<p>The Feedback is <strong>$feedback</strong></p>";
echo "<p>The Recipient is <strong>$send_to</strong></p>";

?>