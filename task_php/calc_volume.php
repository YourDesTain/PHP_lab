<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shape = $_POST["shape"];
    $radius = $_POST["radius"];
    $height = $_POST["height"];

    function cylinderVolume($r, $h)
    {
        return M_PI * pow($r, 2) * $h;
    }

    function coneVolume($r, $h)
    {
        return (1 / 3) * M_PI * pow($r, 2) * $h;
    }

    function prismVolume($s, $h)
    {
        return $s * $h;
    }

    switch ($shape) {
        case "cylinder":
            $volume = cylinderVolume($radius, $height);
            break;
        case "cone":
            $volume = coneVolume($radius, $height);
            break;
        case "prism":
            echo "<div class='mb-3'>
                            <label for='base_side' class='form-label'>Введите сторону основания призмы:</label>
                            <input type='number' class='form-control' id='base_side' name='base_side' required>
                          </div>";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $base_side = $_POST["base_side"];
                $volume = prismVolume($base_side, $height);
            }
            break;
        default:
            $volume = 0;
    }
    echo "<p id='volume_output'>Объем выбранной фигуры: $volume</p>";
}
