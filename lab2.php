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
            <div class="item">
                <img src="image/img1.png">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №2</h2>
                </div>
            </div>
            <div class="item active">
                <img src="image/img2.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №2</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №2</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №2</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №2</h2>
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
            <div class="item">
                <img src="image/img1.png">
                <div class="content">
                    Лабораторная №1
                </div>
            </div>
            <div class="item active">
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
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img2-1.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal1">Сортировка массива по возрастанию и убыванию</div>
                    </div>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal1Label">Первое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="array_sorting">
                                        <div class="container">
                                            <h3>Сортировка массива</h3>
                                        </div>
                                        <?php
                                        $array = array();
                                        for ($i = 0; $i < 10; $i++) {
                                            $array[] = rand(1, 100);
                                        }

                                        sort($array);
                                        echo "<p>Массив, отсортированный по возрастанию: " . implode(", ", $array) . "</p>";

                                        rsort($array);
                                        echo "<p>Массив, отсортированный по убыванию: " . implode(", ", $array) . "</p>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img2-2.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal2">Замена строк в матрице</div>
                    </div>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                        <div class="modal-dialog" id="modal-matrix">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal2Label">Второе Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="matrix_swap">
                                        <div class="container">
                                            <h3>Замена строк в матрице</h3>
                                            <form method="post" action="task2_php/calc_matrix.php">
                                                <label for="rows">Строки:</label>
                                                <input type="number" name="rows" id="rows" min="1" required>
                                                <label for="cols">Столбцы:</label>
                                                <input type="number" name="cols" id="cols" min="1" required><br><br>
                                                <h4>Введите элементы матрицы:</h4>
                                                <div id="matrix_inputs"></div>
                                                <br>
                                                <input type="submit" class="btn btn-primary" value="Заменить">
                                            </form>
                                            <div id="result"></div>
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
                        <img src="image/img2-3.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal3">Нахождение предела суммы элементов массива</div>
                    </div>
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal3Label">Третье Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="sum_matrix">
                                        <div class="container">
                                            <h3>Нахождение суммы элементов массива</h3>
                                            <form id="sum_matrix_form">
                                                <div class="mb-3">
                                                    <label for="array_input" class="form-label">Введите массив из 10 чисел через запятую:</label>
                                                    <input type="text" class="form-control" id="array_input" name="array_input" required>
                                                    <small id="array_input_help" class="form-text text-muted">Пример ввода: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</small>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Вычислить сумму</button>
                                                <div id="sum_matrix_result"></div>
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
                        <img src="image/img2-4.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal4">Нахождение произведения суммы элементов массива</div>
                    </div>
                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal4Label">Четвертое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="sum_product">
                                        <div class="container">
                                            <h3>Нахождение суммы элементов массива</h3>
                                            <form id="sum_product_form">
                                                <div class="mb-3">
                                                    <label for="array_input" class="form-label">Введите массив из 10 чисел через запятую:</label>
                                                    <input type="text" class="form-control" id="array_input" name="array_input" required>
                                                    <small id="array_input_help" class="form-text text-muted">Пример ввода: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</small>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Вычислить сумму</button>
                                                <div id="sum_product_result"></div>
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
                        <img src="image/img2-5.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal5">Транспонирование матрицы</div>
                    </div>
                    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal5Label" aria-hidden="true">
                        <div class="modal-dialog" id="modal-transpose">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal6Label">Пятое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="matrix_transpose">
                                        <div class="container">
                                            <h3>Транспонирование матрицы</h3>
                                            <form id="transpose_form" method="post" action="task2_php/transpose_matrix.php">
                                                <label for="rows">Строки:</label>
                                                <input type="number" name="rows" id="transpose_rows" min="1" required>
                                                <label for="cols">Столбцы:</label>
                                                <input type="number" name="cols" id="transpose_cols" min="1" required><br><br>
                                                <h4>Введите элементы матрицы:</h4>
                                                <div id="transpose_matrix_inputs"></div>
                                                <br>
                                                <input type="submit" class="btn btn-primary" value="Транспонировать">
                                            </form>
                                            <div id="transpose_result"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img2-6.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal6">Умножение квадратных матриц</div>
                    </div>
                    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true">
                        <div class="modal-dialog" id="modal-multiplication">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal7Label">Шестое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="matrix_multiplication">
                                        <div class="container">
                                            <h3>Умножение квадратных матриц</h3>
                                            <form id="multiplication_form" method="post" action="task2_php/matrix_multiplication.php">
                                                <label for="matrix_size">Размерность (n):</label>
                                                <input type="number" name="matrix_size" id="matrix_size" min="1" required><br><br>
                                                <h4>Введите элементы первой матрицы:</h4>
                                                <div id="matrix1_inputs"></div>
                                                <h4>Введите элементы второй матрицы:</h4>
                                                <div id="matrix2_inputs"></div>
                                                <br>
                                                <input type="submit" class="btn btn-primary" value="Умножить">
                                            </form>
                                            <div id="multiplication_result"></div>
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
    </div>
    <div class="footer"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="site.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>