<?php
session_start();

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Выбираем пользователя с заданным логином из базы данных
    $query = "SELECT * FROM users WHERE login = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param("s", $login);
    $statement->execute();
    $result = $statement->get_result();
    $user = $result->fetch_assoc();

    // Проверяем, найден ли пользователь
    if ($user) {
        // Проверяем соответствие введенного пароля хэшу пароля в базе данных
        if (password_verify($password, $user['pass'])) {
            // Пароль верный, устанавливаем сессию для пользователя
            $_SESSION['login'] = $user['login'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['fio'] = $user['fio']; 
            $_SESSION['address'] = $user['address'];
            $_SESSION['telephone'] = $user['telephone'];
            $_SESSION['pass'] = $user['pass'];

            header("Location: index.php");
            exit();
        } else {
            // Если пароль не совпадает, выводим сообщение об ошибке
            $error = "Неверный пароль";
        }
    } else {
        // Если пользователь с заданным логином не найден, выводим сообщение об ошибке
        $error = "Пользователь с таким логином не найден";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="vh-100" style="background-image: url('image/login2.jpg'); background-size: cover; background-repeat: no-repeat;" method="post">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-custom text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form method="post">
                                <h2 class="fw-bold mb-2 text-uppercase">Вход</h2>
                                <p class="text-white-50 mb-5">Пожалуйста введите логин и пароль!</p>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="text" id="typeText" name="login" class="form-control form-control-lg" placeholder="Логин" />
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="password" id="typePassword" name="password" class="form-control form-control-lg" placeholder="Пароль" />
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" value="Login" name="submit">Войти</button>
                                </form>
                            </div>

                            <div>
                                <?php if (isset($error)) : ?>
                                    <p><?php echo $error; ?></p>
                                <?php endif; ?>
                                <p class="mb-0">Нет аккаунта? <a href="registration.php" class="text-white-150 fw-bold"> Зарегистрироваться</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>