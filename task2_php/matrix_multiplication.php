<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["matrix_size"]) && isset($_POST["matrix1"]) && isset($_POST["matrix2"])) {
        $size = $_POST["matrix_size"];
        $matrix1 = $_POST["matrix1"];
        $matrix2 = $_POST["matrix2"];

        $result = array();
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < $size; $k++) {
                    $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }

        echo "<h4>Результат умножения:</h4>";
        echo "<table border='1'>";
        for ($i = 0; $i < $size; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $size; $j++) {
                echo "<td>{$result[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Ошибка: Неправильные данные";
    }
} else {
    echo "Ошибка: Неверный метод запроса";
}
