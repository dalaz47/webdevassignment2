<!DOCTYPE html>
<html>
<head>
    <title>Check Number Range</title>
</head>
<body>

<h2>Check if Number is in the Range from 1 to 100</h2>
<form method="post">
    <input type="number" name="number" placeholder="Enter a number" required><br><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    
    // Check if the number is in the range 1 to 100
    if ($number >= 1 && $number <= 100) {
        echo "<h3>The number $number is in the range from 1 to 100.</h3>";
    } elseif ($number > 100) {
        e
