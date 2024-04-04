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
                    <h2>Лабораторная №3</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №3</h2>
                </div>
            </div>
            <div class="item active">
                <img src="image/img3.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №3</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №3</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №3</h2>
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
            <div class="item">
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
            <div class="item active">
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
                        <img src="image/img2-1.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal1">Подсчет количества введенных символов</div>
                    </div>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal1Label">Первое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="symbol_count">
                                        <div class="container">
                                            <h3>Подсчет количества символов</h3>
                                            <form id="symbol_count_form" method="post">
                                                <textarea name="text" id="text" cols="50" rows="6"></textarea>
                                                <br>
                                                <input type="submit" class="btn btn-primary" value="Подсчитать">
                                                <div id="symbol_count_result"></div>
                                            </form>
                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $text = $_POST['text'];

                                                $symbol_count_with_spaces = mb_strlen($text, 'utf-8');

                                                $text_without_spaces = str_replace(' ', '', $text);
                                                $symbol_count_without_spaces = mb_strlen($text_without_spaces, 'utf-8');

                                                echo "<p id='symbol_count_result'>Количество символов с пробелами: $symbol_count_with_spaces</p>";
                                                echo "<p id='symbol_count_result'>Количество символов без пробелов: $symbol_count_without_spaces</p>";
                                                echo "<p id='symbol_count_result' style='color: aqua'>Введенный текст: $text</p>";
                                            }
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
                        <img src="image/img2-2.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal2">Подсчет количества введенных слов и символов</div>
                    </div>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                        <div class="modal-dialog" id="modal-matrix">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal2Label">Второе Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="word_count">
                                        <div class="container">
                                            <h3>Подсчет количества слов и символов</h3>
                                            <form method="post">
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
                                            <form id="">
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
                                            <form id="">
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
                                            <form id="">
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
    </div>
    <div class="footer"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="site.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>