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
    <script>
        function redirect() {
            window.location.replace("login.php");
        }
    </script>
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <input type="login" class="form-control" name="login" placeholder="Логин:">
            </div>
            <div class="form-group">
                <input type="fio" class="form-control" name="fio" placeholder="ФИО:">
            </div>
            <div class="form-group">
                <input type="address" class="form-control" name="address" placeholder="Адрес:">
            </div>
            <div class="form-group">
                <input type="telephone" class="form-control" name="telephone" placeholder="Моб. Телефон:">
            </div>
            <div class="form-group">
                <label for="role">Роль:</label>
                <select class="form-control" name="role">
                    <option value="клиент">Клиент</option>
                    <option value="исполнитель">Исполнитель</option>
                </select>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Пароль:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Зарегистрироваться" name="submit">
            </div>
        </form>
        <div>
            <div>
                <p>Уже зарегистрированы? <a href="login.php">Войдите здесь</a></p>
            </div>
        </div>
    </div>
</body>

</html>