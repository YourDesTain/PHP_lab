<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = $_POST["month_number"];

    function getSeason($month)
    {
        $seasons = array(
            1 => 'зима',
            2 => 'зима',
            3 => 'весна',
            4 => 'весна',
            5 => 'весна',
            6 => 'лето',
            7 => 'лето',
            8 => 'лето',
            9 => 'осень',
            10 => 'осень',
            11 => 'осень',
            12 => 'зима'
        );

        return $seasons[$month];
    }

    $season = getSeason($month);
    echo "<p id='season_output'>Пора года: $season</p>";
}
