<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Days Lived</title>
</head>
<body>

<h1>Calculate the Total Number of Days You Have Lived</h1>

<form method="post" action="">
    <label for="age">Enter your age (in years): </label>
    <input type="number" id="age" name="age" required>
    <br><br>
    <button type="submit" name="submit">Calculate Days</button>
</form>

<?php
if (isset($_POST['submit'])) {
    // Get the age input from the user
    $age = $_POST['age'];

    // Calculate the number of days (assuming 365 days per year)
    $number_of_days = $age * 365;

    // Display the result
    echo "<h2>You have lived approximately $number_of_days days.</h2>";
}
?>

</body>
</html>
