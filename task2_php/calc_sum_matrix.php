<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_array = $_POST["array_input"];
    $array = explode(",", $input_array);

    if (count($array) == 10) {
        $sum = 0;
        foreach ($array as $value) {
            $value = trim($value);
            $sum += $value;
        }

        echo "<p id='sum_matrix_result'>Сумма элементов массива: $sum</p>";
    } else {
        echo "<p>Пожалуйста, введите ровно 10 чисел через запятую</p>";
    }
}
