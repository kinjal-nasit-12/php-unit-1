<!-- Write a PHP program to find maximum number from the two numbers entered by user -->

<!DOCTYPE html>
<html>

<head>
    <title>Find Maximum Number</title>
</head>

<body>
    <form method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" required>
        <br>
        <input type="submit" value="Find Maximum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $max = ($num1 > $num2) ? $num1 : $num2;
        echo "<h2>Maximum number is: $max</h2>";
    }
    ?>
</body>

</html>
