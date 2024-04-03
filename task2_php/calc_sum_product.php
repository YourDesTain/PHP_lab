<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_array = $_POST["array_input"];
    $array = explode(",", $input_array);

    if (count($array) == 10) {

        $product = 1;
        foreach ($array as $value) {
            $value = trim($value);
            $product *= (1 + $value);
        }

        echo "<p id='sum_product_result'>Произведение суммы элементов массива: $product</p>";
    } else {
        echo "<p>Пожалуйста, введите ровно 10 чисел через запятую</p>";
    }
}
