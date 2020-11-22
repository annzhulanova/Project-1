<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $data = $_POST['data'];


    $content = $name . ' сделал(а) заказ растений ' . $data . '. Детали заказа ' . '. Его телефон: ' . $phone;
    $success = mail("admin@florarium.com", 'Заказ растений', $content);
    if ($success) {
        http_response_code(200);
        echo "Письмо отправлено";
    } else {
        http_response_code(500);
        echo "Письмо не отправлено";
    }

} else {
    http_response_code(403);
    echo "Данный метод запроса не поддерживается сервером";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST['number'];

    $content = ' Необходимо перезвонить по номеру ' . $number;
    $success = mail("callme@florarium.com", 'Перезвонить клиенту', $content);
    if ($success) {
        http_response_code(200);
        echo "Письмо отправлено";
    } else {
        http_response_code(500);
        echo "Письмо не отправлено";
    }

} else {
    http_response_code(403);
    echo "Данный метод запроса не поддерживается сервером";
}










