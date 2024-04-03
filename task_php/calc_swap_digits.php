<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            function swapDigits($num)
            {
                $first_digit = substr($num, 0, 1);
                $last_digit = substr($num, -1);
                $middle_digits = substr($num, 1, -1);
                return $last_digit . $middle_digits . $first_digit;
            }

            if ($number >= 100 && $number <= 999) {
                $swapped_number = swapDigits($number);
                echo "<p id='swapped_number_output'>Число после перестановки: $swapped_number</p>";
            } else {
                echo "<p id='invalid_input'>Пожалуйста, введите трехзначное число</p>";
            }
        }