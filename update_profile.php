<?php
session_start();
include("database.php");

$response = ['success' => false];

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $field = isset($_POST['field']) ? $_POST['field'] : null;
    $value = isset($_POST['value']) ? $_POST['value'] : null;

    if ($field && $value) {
        $allowed_fields = ['fio', 'address', 'telephone'];
        
        if (in_array($field, $allowed_fields)) {
            $stmt = $conn->prepare("UPDATE users SET $field = ? WHERE login = ?");
            $stmt->bind_param('ss', $value, $login);

            if ($stmt->execute()) {
                $_SESSION[$field] = $value;
                $response['success'] = true;
            }

            $stmt->close();
        }
    }
}

echo json_encode($response);

