<?php
// Functions for basic operations
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $b != 0 ? $a / $b : "Cannot divide by zero!";
}


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (isset($_POST['add'])) {
        $result = add($num1, $num2);
    } elseif (isset($_POST['subtract'])) {
        $result = subtract($num1, $num2);
    } elseif (isset($_POST['multiply'])) {
        $result = multiply($num1, $num2);
    } elseif (isset($_POST['divide'])) {
        $result = divide($num1, $num2);
    
} else {
    $result = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
</head>
<body>

    <h1>Simple PHP Calculator</h1>

    <form method="POST">
        <input type="number" name="num1" placeholder="First number" required><br><br>
        <input type="number" name="num2" placeholder="Second number" required><br><br>

        <button type="submit" name="add">Add</button>
        <button type="submit" name="subtract">Subtract</button>
        <button type="submit" name="multiply">Multiply</button>
        <button type="submit" name="divide">Divide</button><br><br>
    </form>

    <?php
    if ($result !== "") {
        echo "<h2>Result: $result</h2>";
    }
    ?>

</body>
</html>
