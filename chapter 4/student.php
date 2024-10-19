<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $gr_no = htmlspecialchars($_POST['gr_no']);
    $class = htmlspecialchars($_POST['class']);
    $section = htmlspecialchars($_POST['section']);

    echo "<h1>Student Details</h1>";
    echo "Name: $name <br>";
    echo "G.R No: $gr_no <br>";
    echo "Class: $class <br>";
    echo "Section: $section <br>";
}
?>
