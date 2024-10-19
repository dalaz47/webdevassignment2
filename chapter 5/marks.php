<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Percentage Calculator</title>
</head>
<body>

<h1>Calculate Your Percentage</h1>

<form method="post" action="">
    <label for="subject1">Enter marks for Subject 1 (out of 100): </label>
    <input type="number" id="subject1" name="subject1" required>
    <br><br>

    <label for="subject2">Enter marks for Subject 2 (out of 100): </label>
    <input type="number" id="subject2" name="subject2" required>
    <br><br>

    <label for="subject3">Enter marks for Subject 3 (out of 100): </label>
    <input type="number" id="subject3" name="subject3" required>
    <br><br>

    <label for="subject4">Enter marks for Subject 4 (out of 100): </label>
    <input type="number" id="subject4" name="subject4" required>
    <br><br>

    <button type="submit" name="submit">Calculate Percentage</button>
</form>

<?php
if (isset($_POST['submit'])) {
    // Input marks for all four subjects
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];

    // Total marks and obtained marks
    $total_marks = 400;
    $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;

    // Calculate the percentage
    $percentage = ($obtained_marks * 100) / $total_marks;

    // Display the result
    echo "<h2>Your obtained marks: $obtained_marks / 400</h2>";
    echo "<h2>Your percentage: $percentage%</h2>";
}
?>

</body>
</html>
