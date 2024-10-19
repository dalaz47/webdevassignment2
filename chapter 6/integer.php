<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>

<h2>Check if a Number is Even or Odd</h2>
<form method="post">
    <input type="number" name="number" placeholder="Enter an integer" required><br><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    
    // Using the conditional (ternary) operator to check if the number is even or odd
    $result = ($number % 2 == 0) ? "Even" : "Odd";
    
    // Display the result
    
