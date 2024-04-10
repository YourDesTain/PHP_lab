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
                                            <h3 id="modal-task">Подсчет количества символов</h3>
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
                                            <h3 id="modal-task">Подсчет количества слов и символов</h3>
                                            <form method="post">
                                                <textarea name="text" rows="4" cols="50"></textarea><br>
                                                <input type="submit" class="btn btn-primary" value="Подсчитать">
                                            </form>
                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                $text = $_POST['text'];

                                                preg_match_all('/\b\p{L}+\b/u', $text, $matches);
                                                $wordCount = count($matches[0]);

                                                $charCount = mb_strlen(str_replace(' ', '', $text), 'UTF-8');

                                                echo "<p id='symbol_count_result'>Количество слов: $wordCount</p>";
                                                echo "<p id='symbol_count_result'>Количество символов (без учета пробелов): $charCount</p>";
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
            </div>
            <div class="row gap-2 mt-5">
                <div class="col" id="flex_lab">
                    <div style="position: relative;">
                        <img src="image/img2-3.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal3">Зеркальное отображение введенной строки</div>
                    </div>
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal3Label">Третье Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="reverse_string">
                                        <div class="container">
                                            <h3 id="modal-task">Инверсия строки</h3>
                                            <form method="post" id="reverse_string_form">
                                                <input type="text" name="input_string" placeholder="Введите строку" style="margin-bottom: 10px; width: 35vh;"><br>
                                                <input type="submit" class="btn btn-primary" value="Инвертировать">
                                            </form>
                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $input_string = $_POST['input_string'];

                                                mb_internal_encoding("UTF-8");

                                                $reversed_string = mb_strrev($input_string);

                                                echo "<p id='reverse_string_result'>Инверсированная строка: $reversed_string</p>";
                                            }

                                            function mb_strrev($str)
                                            {
                                                preg_match_all('/./us', $str, $matches);
                                                return join('', array_reverse($matches[0]));
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
                        <img src="image/img2-4.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal4">Шифрование сообщения</div>
                    </div>
                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal4Label">Четвертое Задание</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task" id="encrypt_text">
                                        <div class="container">
                                            <h3 id="modal-task">Шифрование сообщения</h3>
                                            <form method="post" id="encrypt_text_form">
                                            </form>
                                            <?php

                                            // Функция для шифрования текста методом Цезаря
                                            function caesarCipher($text, $shift)
                                            {
                                                $result = '';

                                                // Проходимся по каждому символу в тексте
                                                $textLength = mb_strlen($text, 'UTF-8');
                                                for ($i = 0; $i < $textLength; $i++) {
                                                    $char = mb_substr($text, $i, 1, 'UTF-8');

                                                    // Проверяем, является ли символ буквой
                                                    if (preg_match('/[a-zA-Z]/', $char)) {
                                                        // Определяем регистр символа
                                                        $isUpperCase = ctype_upper($char);

                                                        // Преобразуем символ к нижнему регистру для работы с ним
                                                        $char = mb_strtolower($char, 'UTF-8');

                                                        // Преобразуем символ с учетом сдвига
                                                        $charCode = ord($char) - ord('a');
                                                        $shiftedCharCode = ($charCode + $shift) % 26;
                                                        $shiftedChar = chr($shiftedCharCode + ord('a'));

                                                        // Возвращаем символ в исходный регистр
                                                        if ($isUpperCase) {
                                                            $shiftedChar = mb_strtoupper($shiftedChar, 'UTF-8');
                                                        }

                                                        // Добавляем символ к результату
                                                        $result .= $shiftedChar;
                                                    } else {
                                                        // Если символ не буква, оставляем его без изменений
                                                        $result .= $char;
                                                    }
                                                }

                                                return $result;
                                            }

                                            // Получаем введенное сообщение и сдвиг
                                            $message = isset($_POST['message']) ? $_POST['message'] : '';
                                            $shift = isset($_POST['shift']) ? intval($_POST['shift']) : 0;

                                            // Шифруем сообщение
                                            $encryptedMessage = caesarCipher($message, $shift);

                                            // Выводим зашифрованное сообщение
                                            echo $encryptedMessage;

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
                                            <h3 id="modal-task">Нахождение суммы элементов массива</h3>
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