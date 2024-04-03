<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x_value"];

    function calculateExpression($x)
    {
        $expression_value = (abs($x - 5) - sin($x)) / 3 + sqrt(pow($x, 2) + 2014) * cos(2 * $x) - 3;
        return $expression_value;
    }

    $result = calculateExpression($x);

    echo "<p id='expression_result'>Значение выражения при x = $x: $result</p>";
}
