<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a_coefficient"];
    $b = $_POST["b_coefficient"];
    $c = $_POST["c_coefficient"];
    function solveQuadraticEquation($a, $b, $c)
    {
        if ($a == 0) {
            return array("Уравнение не является квадратным");
        } else {
            $d = $b * $b - 4 * $a * $c;
            if ($d > 0) {
                $x1 = (-$b + sqrt($d)) / (2 * $a);
                $x2 = (-$b - sqrt($d)) / (2 * $a);
                return array($x1, $x2);
            } elseif ($d == 0) {
                $x = -$b / (2 * $a);
                return array($x);
            } else {
                return array();
            }
        }
    }

    $roots = solveQuadraticEquation($a, $b, $c);
    if (count($roots) > 0) {
        echo "<p id='quadratic_roots_title'>Корни уравнения:</p>";
        foreach ($roots as $index => $root) {
            echo "<p id='quadratic_root_$index'>$root</p>";
        }
    } else {
        echo "<p id='no_real_roots'>Уравнение не имеет действительных корней</p>";
    }
}
