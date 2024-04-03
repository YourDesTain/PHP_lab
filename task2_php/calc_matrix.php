<?php
function findMinMaxIndices($matrix)
{
    $minValue = PHP_INT_MAX;
    $maxValue = PHP_INT_MIN;
    $minIndex = null;
    $maxIndex = null;

    foreach ($matrix as $i => $row) {
        foreach ($row as $j => $value) {
            if ($value < $minValue) {
                $minValue = $value;
                $minIndex = array($i, $j); //Присвоить массив с индексами минимального элемента
            }
            if ($value > $maxValue) {
                $maxValue = $value;
                $maxIndex = array($i, $j); //Присвоить массив с индексами максимального элемента
            }
        }
    }

    echo "Min value: $minValue, Max value: $maxValue\n";
    echo "Min index: {$minIndex[0]},{$minIndex[1]}, Max index: {$maxIndex[0]},{$maxIndex[1]}\n";

    return array($minIndex, $maxIndex);
}

function swapRows(&$matrix, $row1, $row2)
{
    echo "Swapping rows $row1 and $row2\n";
    $temp = $matrix[$row1];
    $matrix[$row1] = $matrix[$row2];
    $matrix[$row2] = $temp;
}

function swapMatrix(&$matrix, $row1, $row2)
{
    for ($i = 0; $i < count($matrix[0]); $i++) {
        $temp = $matrix[$row1][$i];
        $matrix[$row1][$i] = $matrix[$row2][$i];
        $matrix[$row2][$i] = $temp;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["matrix"])) {
    $matrix = $_POST["matrix"];
    list($minIndex, $maxIndex) = findMinMaxIndices($matrix);
    swapMatrix($matrix, $minIndex[0], $maxIndex[0]);

    echo "<h2>Конечная матрица</h2>";
    echo "<table border='1'>";
    foreach ($matrix as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
