<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["rows"]) && isset($_POST["cols"]) && isset($_POST["matrix"])) {
        $rows = $_POST["rows"];
        $cols = $_POST["cols"];
        $matrix = $_POST["matrix"];

        $transposedMatrix = array();
        for ($i = 0; $i < $cols; $i++) {
            $transposedMatrix[$i] = array();
            for ($j = 0; $j < $rows; $j++) {
                $transposedMatrix[$i][$j] = $matrix[$j][$i];
            }
        }

        echo "<h4>Транспонированная матрица:</h4>";
        echo "<table border='1'>";
        for ($i = 0; $i < $cols; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $rows; $j++) {
                echo "<td>{$transposedMatrix[$i][$j]}</td>";
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
?>
