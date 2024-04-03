<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $num3 = $_POST["number3"];

    function findMax($a, $b, $c)
    {
        return max($a, $b, $c);
    }

    $max_number = findMax($num1, $num2, $num3);
    echo "<p id='max_number_output'>Наибольшее число: $max_number</p>";
}
