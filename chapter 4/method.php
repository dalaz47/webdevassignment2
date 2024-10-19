<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $gr_no = htmlspecialchars($_GET['gr_no']);
    $course = htmlspecialchars($_GET['course']);

    echo "<h1>Course Details</h1>";
    echo "G.R No: $gr_no <br>";
    echo "Course Name: $course <br>";
}
?>
