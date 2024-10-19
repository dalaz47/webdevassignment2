<!DOCTYPE html>
<html>
<head>
    <title>Student Marks Sheet</title>
</head>
<body>

<h2>Student Marks Sheet</h2>
<form method="post">
    <label for="math">Math Marks:</label>
    <input type="number" name="math" placeholder="Enter marks for Math" required><br><br>
    
    <label for="english">English Marks:</label>
    <input type="number" name="english" placeholder="Enter marks for English" required><br><br>
    
    <label for="physics">Physics Marks:</label>
    <input type="number" name="physics" placeholder="Enter marks for Physics" required><br><br>
    
    <input type="submit" name="submit" value="Generate Marks Sheet">
</form>

<?php
if (isset($_POST['submit'])) {
    // Input Marks for Math, English, and Physics
    $math = $_POST['math'];
    $english = $_POST['english'];
    $physics = $_POST['physics'];
    
    // Total Marks (assuming each subject is out of 100)
    $total_marks = 300;
    
    // Calculate Obtained Marks
    $obtained_marks = $math + $english + $physics;
    
    // Calculate Percentage
    $percentage = ($obtained_marks / $total_marks) * 100;
    
    // Determine Grade based on Percentage
    if ($percentage >= 90) {
        $grade = 'A+';
    } elseif ($percentage >= 80) {
        $grade = 'A';
    } elseif ($percentage >= 70) {
        $grade = 'B';
    } elseif ($percentage >= 60) {
        $grade = 'C';
    } elseif ($percentage >= 50) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    
    // Display Marks Sheet
    echo "<h3>Marks Sheet:</h3>";
    echo "Math Marks: $math / 100<br>";
    echo "English Marks: $english / 100<br>";
    echo "Physics Marks: $physics / 100<br>";
    echo "<br>";
    echo "Total Obtained Marks: $obtained_marks / $total_marks<br>";
    echo "Percentage: " . number_format($percentage, 2) . "%<br>";
    echo "Grade: $grade<br>";
}
?>

</body>
</html>
