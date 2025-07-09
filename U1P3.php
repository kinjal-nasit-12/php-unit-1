<!-- Write a PHP program that prints Fibonacci series till the number entered by user. -->

<!doctype html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <form method="post">
        <label for="limit">Enter a number:</label>
        <input type="number" name="limit" required>
        <br>
        <input type="submit" value="Generate Fibonacci Series">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $limit = $_POST["limit"];
        $num1 = 0;
        $num2 = 1;

        echo "<h2>Fibonacci series up to $limit:</h2>";
        while ($num1 <= $limit) {
            echo $num1 . " ";
            $next = $num1 + $num2;
            $num1 = $num2;
            $num2 = $next;
        }
    }
    ?>
</body>
</html>