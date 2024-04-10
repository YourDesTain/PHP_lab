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

        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>