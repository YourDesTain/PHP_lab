<?php
session_start();

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $fio = $_POST['fio'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    // Хэшируем пароль
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Проверяем, существует ли пользователь с таким логином
    $query = "SELECT * FROM users WHERE login = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param("s", $login);
    $statement->execute();
    $result = $statement->get_result();
    $existing_user = $result->fetch_assoc();

    // Если пользователь с таким логином уже существует, выводим сообщение об ошибке
    if ($existing_user) {
        echo "User with this login already exists";
        exit();
    }

    // Добавляем нового пользователя в базу данных
    $query = "INSERT INTO users (login, fio, pass, address, telephone, role) VALUES (?, ?, ?, ?, ?, ?)";
    $statement = $conn->prepare($query);
    $statement->bind_param("ssssss", $login, $fio, $hashed_password, $address, $telephone, $role);
    $statement->execute();

    // Перенаправляем пользователя на страницу входа после успешной регистрации
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Registration</title>
</head>

<body>
    <section class="vh-100" style="background-image: url('image/login2.jpg'); background-size: cover; background-repeat: no-repeat;" method="post">
        <div class="container py-3">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-custom text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
							<form method="post">
                                <h2 class="fw-bold mb-2 text-uppercase">Регистрация</h2>
                                <p class="text-white-50 mb-5">Пожалуйста введите ваши данные!</p>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="login" id="typeLogin" name="login" class="form-control form-control-lg" placeholder="Логин" />
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="fio" id="typeFio" name="fio" class="form-control form-control-lg" placeholder="ФИО" />
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="address" id="typeAddress" name="address" class="form-control form-control-lg" placeholder="Адрес" />
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="telephone" id="typeTelephone" name="telephone" class="form-control form-control-lg" placeholder="Моб. телефон" />
                                </div>

                                <div class="form-group mb-4">
                                    <label for="role" class="text-white-30 mb-2" style="font-size: 20px;">Роль:</label>
                                    <select class="form-select form-control-lg form-white" id="role" name="role">
                                        <option value="клиент">Клиент</option>
                                        <option value="исполнитель">Исполнитель</option>
                                    </select>
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="password" id="typePassword" name="password" class="form-control form-control-lg" placeholder="Пароль" />
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" value="Login" name="submit">Зарегистрироваться</button>
								</form>
                            </div>

                            <div>
                                <p class="mb-0">Есть аккаунт? <a href="login.php" class="text-white-150 fw-bold"> Войти</a>
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