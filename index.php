<?php
session_start();

include("database.php");

// Initialize $fio variable
$fio = "";

// Check if user is logged in
if (isset($_SESSION['login'])) {
    // Fetch FIO from the database based on the user's login
    $login = $_SESSION['login'];
    $sql = "SELECT fio FROM user WHERE login = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $fio = $row["fio"];
        }
    } else {
        echo "0 results";
    }
} else {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP labs</title>
</head>

<body>
    <!-- slider -->
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="image/img1.png">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
        </div>

        <!-- button profile -->
        <div class="profile">
            <button id="user_profile" data-bs-toggle="modal" data-bs-target="#exampleModalprofile">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </button>
        </div>
        <div class="modal" id="exampleModalprofile" tabindex="100" aria-labelledby="exampleModalprofileLabel" aria-hidden="true">
            <div class="modal-dialog" id="modal-profile">
                <div class="modal-content" id="content-profile">
                    <div class="modal-header-profile">
                        <h5 class="modal-title-profile" id="exampleModalprofileLabel"><?php echo $fio; ?></h5>    
                    </div>
                    <div class="modal-body-profile">
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <button type="button" class="btn-settings" style="text-align: left;">
                                <span class="btn-icon">
                                    <span role="img" aria-label="setting" class="anticon-setting">
                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="setting" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                            <path d="M924.8 625.7l-65.5-56c3.1-19 4.7-38.4 4.7-57.8s-1.6-38.8-4.7-57.8l65.5-56a32.03 32.03 0 009.3-35.2l-.9-2.6a443.74 443.74 0 00-79.7-137.9l-1.8-2.1a32.12 32.12 0 00-35.1-9.5l-81.3 28.9c-30-24.6-63.5-44-99.7-57.6l-15.7-85a32.05 32.05 0 00-25.8-25.7l-2.7-.5c-52.1-9.4-106.9-9.4-159 0l-2.7.5a32.05 32.05 0 00-25.8 25.7l-15.8 85.4a351.86 351.86 0 00-99 57.4l-81.9-29.1a32 32 0 00-35.1 9.5l-1.8 2.1a446.02 446.02 0 00-79.7 137.9l-.9 2.6c-4.5 12.5-.8 26.5 9.3 35.2l66.3 56.6c-3.1 18.8-4.6 38-4.6 57.1 0 19.2 1.5 38.4 4.6 57.1L99 625.5a32.03 32.03 0 00-9.3 35.2l.9 2.6c18.1 50.4 44.9 96.9 79.7 137.9l1.8 2.1a32.12 32.12 0 0035.1 9.5l81.9-29.1c29.8 24.5 63.1 43.9 99 57.4l15.8 85.4a32.05 32.05 0 0025.8 25.7l2.7.5a449.4 449.4 0 00159 0l2.7-.5a32.05 32.05 0 0025.8-25.7l15.7-85a350 350 0 0099.7-57.6l81.3 28.9a32 32 0 0035.1-9.5l1.8-2.1c34.8-41.1 61.6-87.5 79.7-137.9l.9-2.6c4.5-12.3.8-26.3-9.3-35zM788.3 465.9c2.5 15.1 3.8 30.6 3.8 46.1s-1.3 31-3.8 46.1l-6.6 40.1 74.7 63.9a370.03 370.03 0 01-42.6 73.6L721 702.8l-31.4 25.8c-23.9 19.6-50.5 35-79.3 45.8l-38.1 14.3-17.9 97a377.5 377.5 0 01-85 0l-17.9-97.2-37.8-14.5c-28.5-10.8-55-26.2-78.7-45.7l-31.4-25.9-93.4 33.2c-17-22.9-31.2-47.6-42.6-73.6l75.5-64.5-6.5-40c-2.4-14.9-3.7-30.3-3.7-45.5 0-15.3 1.2-30.6 3.7-45.5l6.5-40-75.5-64.5c11.3-26.1 25.6-50.7 42.6-73.6l93.4 33.2 31.4-25.9c23.7-19.5 50.2-34.9 78.7-45.7l37.9-14.3 17.9-97.2c28.1-3.2 56.8-3.2 85 0l17.9 97 38.1 14.3c28.7 10.8 55.4 26.2 79.3 45.8l31.4 25.8 92.8-32.9c17 22.9 31.2 47.6 42.6 73.6L781.8 426l6.5 39.9zM512 326c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm79.2 255.2A111.6 111.6 0 01512 614c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 01400 502c0-29.9 11.7-58 32.8-79.2C454 401.6 482.1 390 512 390c29.9 0 58 11.6 79.2 32.8A111.6 111.6 0 01624 502c0 29.9-11.7 58-32.8 79.2z"></path>
                                        </svg>
                                    </span>
                                </span>
                                <span>Account settings</span>
                            </button>
                            <button type="button" class="btn-logout" style="text-align: left;" onclick="location.href='logout.php';">
                                <span class="btn-icon">
                                    <span role="img" aria-label="logout" class="anticon-logout">
                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="logout" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                            <path d="M868 732h-70.3c-4.8 0-9.3 2.1-12.3 5.8-7 8.5-14.5 16.7-22.4 24.5a353.84 353.84 0 01-112.7 75.9A352.8 352.8 0 01512.4 866c-47.9 0-94.3-9.4-137.9-27.8a353.84 353.84 0 01-112.7-75.9 353.28 353.28 0 01-76-112.5C167.3 606.2 158 559.9 158 512s9.4-94.2 27.8-137.8c17.8-42.1 43.4-80 76-112.5s70.5-58.1 112.7-75.9c43.6-18.4 90-27.8 137.9-27.8 47.9 0 94.3 9.3 137.9 27.8 42.2 17.8 80.1 43.4 112.7 75.9 7.9 7.9 15.3 16.1 22.4 24.5 3 3.7 7.6 5.8 12.3 5.8H868c6.3 0 10.2-7 6.7-12.3C798 160.5 663.8 81.6 511.3 82 271.7 82.6 79.6 277.1 82 516.4 84.4 751.9 276.2 942 512.4 942c152.1 0 285.7-78.8 362.3-197.7 3.4-5.3-.4-12.3-6.7-12.3zm88.9-226.3L815 393.7c-5.3-4.2-13-.4-13 6.3v76H488c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h314v76c0 6.7 7.8 10.5 13 6.3l141.9-112a8 8 0 000-12.6z"></path>
                                        </svg>
                                    </span>
                                </span>
                                <span>Logout</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- button arrows -->
        <div class="arrows">
            <button id="prev">
                << /button>
                    <button id="next">></button>
        </div>

        <!-- thumbnail -->
        <div class="thumbnail">
            <div class="item active">
                <img src="image/img1.png">
                <div class="content">
                    Лабораторная №1
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    Лабораторная №2
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    Лабораторная №3
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    Лабораторная №4
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg">
                <div class="content">
                    Лабораторная №5
                </div>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="container">
            <div class="row gap-2">
                <div class="col" id="flex_lab_info"></div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-1.jpeg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal1">Вычисление объема фигур(цилиндр, конус, призма)</div>
                    </div>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal1Label">Первое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="cylinder">
                                        <div class="container">
                                            <h3 id="modal-task">Вычисление объема фигур</h3>
                                            <form id="volume_form" method="post">
                                                <div class="mb-3">
                                                    <label for="shape" class="form-label">Выберите фигуру:</label>
                                                    <select class="form-select" id="shape" name="shape" required>
                                                        <option value="cylinder">Цилиндр</option>
                                                        <option value="cone">Конус</option>
                                                        <option value="prism">Призма</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="radius" class="form-label">Радиус (для цилиндра и конуса) или сторона основания (для призмы):</label>
                                                    <input type="number" class="form-control" id="radius" name="radius" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="height" class="form-label">Высота (для цилиндра и конуса) или высота призмы:</label>
                                                    <input type="number" class="form-control" id="height" name="height" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Рассчитать объем</button>
                                                <div id="volume_output"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-2.jpeg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal2">Вычисление корней квадратного уравнения</div>
                    </div>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal2Label">Второе Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="quadratic">
                                        <div class="container">
                                            <h3 id="modal-task">Вычисление корней квадратного уравнения</h3>
                                            <form id="quadratic_form" method="post">
                                                <div class="mb-3">
                                                    <label for="a_coefficient" class="form-label">Коэффициент a:</label>
                                                    <input type="number" class="form-control" id="a_coefficient" name="a_coefficient" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="b_coefficient" class="form-label">Коэффициент b:</label>
                                                    <input type="number" class="form-control" id="b_coefficient" name="b_coefficient" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="c_coefficient" class="form-label">Коэффициент c:</label>
                                                    <input type="number" class="form-control" id="c_coefficient" name="c_coefficient" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Рассчитать корни уравнения</button>
                                                <div id="quadratic_roots_title"></div>
                                                <div id="no_real_roots"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gap-2 mt-5">
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-3.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal3">Вычисление факториала числа</div>
                    </div>
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal3Label">Третье Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="factorial">
                                        <div class="container">
                                            <h3 id="modal-task">Вычисление факториала числа</h3>
                                            <form id="factorial_form">
                                                <div class="mb-3">
                                                    <label for="number" class="form-label">Введите число:</label>
                                                    <input type="number" class="form-control" id="number" name="number" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Рассчитать факториал</button>
                                                <div id="factorial_result"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-4.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal4">Вывод буквы "W" из символов "*"</div>
                    </div>
                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal4Label">Четвертое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="W" style="text-align: center;">
                                        <div style="font-family: monospace; font-size: 22px; white-space: pre; color: #55AAFF;">
                                            <?php
                                            function printW()
                                            {
                                                echo "                 \n";
                                                echo "*               *\n";
                                                echo "*       *       *\n";
                                                echo "*     *   *     *\n";
                                                echo "*   *       *   *\n";
                                                echo "* *           * *\n";
                                                echo "*               *\n";
                                            }
                                            printW();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-5.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal5">Вычисление значения выражения</div>
                    </div>
                    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal5Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal5Label">Пятое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="expression_value">
                                        <div class="container">
                                            <h3 id="modal-task">Вычисление значения выражения</h3>
                                            <form id="expression_form" method="post">
                                                <div class="mb-3">
                                                    <label for="x_value" class="form-label">Введите значение x:</label>
                                                    <input type="number" step="any" class="form-control" id="x_value" name="x_value" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Вычислить значение</button>
                                                <div id="expression_result"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gap-2 mt-5">
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-6.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal6">Вывод названия поры года по номеру месяца</div>
                    </div>
                    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal6Label">Шестое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="season">
                                        <div class="container">
                                            <h3 id="modal-task">Определение поры года</h3>
                                            <form id="season_form" method="post">
                                                <div class="mb-3">
                                                    <label for="month_number" class="form-label">Введите номер месяца (1-12):</label>
                                                    <input type="number" class="form-control" id="month_number" name="month_number" min="1" max="12" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Определить пору года</button>
                                                <div id="season_output"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-7.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal7">Нахождение наибольшего числа из трех чисел</div>
                    </div>
                    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModal7Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal7Label">Седьмое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="max_number">
                                        <div class="container">
                                            <h3 id="modal-task">Нахождение наибольшего числа из трех</h3>
                                            <form id="max_number_form" method="post">
                                                <div class="mb-3">
                                                    <label for="number1" class="form-label">Введите первое число:</label>
                                                    <input type="number" class="form-control" id="number1" name="number1" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="number2" class="form-label">Введите второе число:</label>
                                                    <input type="number" class="form-control" id="number2" name="number2" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="number3" class="form-label">Введите третье число:</label>
                                                    <input type="number" class="form-control" id="number3" name="number3" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Найти наибольшее число</button>
                                                <div id="max_number_output"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img-8.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal8">Перестановка первой и последней цифры трехзначного числа</div>
                    </div>
                    <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModal8Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal8Label">Восьмое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="swap_digits">
                                        <div class="container">
                                            <h3 id="modal-task">Перестановка первой и последней цифры трехзначного числа</h3>
                                            <form id="swap_digits_form" method="post">
                                                <div class="mb-3">
                                                    <label for="number" class="form-label">Введите трехзначное число:</label>
                                                    <input type="number" class="form-control" id="number" name="number" min="100" max="999" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Переставить цифры</button>
                                                <div id="swapped_number_output"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="site.js"></script>
    <script src="lab1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>