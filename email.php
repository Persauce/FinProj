<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $POST['message'];
$subscribe = isset($_POST['subscribe']) ? $_POST['subscribe'] : '';
echo "<h1>name:</h1> " . htmlspecialchars($name);
?>