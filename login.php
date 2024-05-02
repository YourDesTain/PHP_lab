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
            // Перенаправляем пользователя на защищенную страницу
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
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <input type="text" placeholder="Введите логин:" name="login" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Введите пароль:" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="submit" class="btn btn-primary">
            </div>
        </form>
        <div>
            <?php if(isset($error)): ?>
            <p><?php echo $error; ?></p>
            <?php endif; ?>
            <p>Еще не зарегистрированы? <a href="registration.php">Зарегистрируйтесь здесь</a></p>
        </div>
    </div>
</body>

</html>
