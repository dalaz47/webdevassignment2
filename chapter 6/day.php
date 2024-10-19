<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>

<h2>Find the Day of the Week</h2>
<form method="post">
    <input type="number" name="day" placeholder="Enter a number (1-7)" required><br><br>
    <input type="submit" name="submit" value="Check Day">
</form>

<?php
if (isset($_POST['submit'])) {
