<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>

<h2>PHP Simple Calculator</h2>
<form method="post">
    <input type="number" name="num1" placeholder="Enter First Number" required><br><br>
    <input type="number" name="num2" placeholder="Enter Second Number" required><br><br>
    
    <select name="operation">
        <option value="add">Add (+)</option>
        <option value="subtract">Subtract (-)</option>
        <option value="multiply">Multiply (*)</option>
        <option value="divide">Divide (/)</option>
    </select><br><br>
    
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            echo "<h3>Result: $num1 + $num2 = $result</h3>";
            break;
        case 'subtract':
            $result = $num1 - $num2;
            echo "<h3>Result: $num1 - $num2 = $result</h3>";
            break;
        case 'multiply':
            $result = $num1 * $num2;
            echo "<h3>Result: $num1 * $num2 = $result</h3>";
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "<h3>Result: $num1 / $num2 = $result</h3>";
            } else {
                echo "<h3>Division by zero is not allowed!</h3>";
            }
            break;
        default:
            echo "<h3>Invalid Operation!</h3>";
            break;
    }
}
?>

</body>
</html>
