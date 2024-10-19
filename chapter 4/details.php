<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $roll_no = htmlspecialchars($_GET['roll_no']);
    $name = htmlspecialchars($_GET['name']);

    echo "<h1>Received Details</h1>";
    echo "Roll Number: $roll_no <br>";
    echo "Name: $name <br>";
}
?>
