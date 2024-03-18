<!DOCTYPE html>
<html>
<head>
    <title>Определение дня недели</title>
</head>
<body>
<h2>Определение дня недели</h2>
<form method="post">
    <label>Введите номер дня недели (1 - Понедельник, 2 - Вторник и так далее):</label><br>
    <input type="text" name="dayNumber"><br><br>
    <input type="submit" value="Определить">
</form>

<?php
// Проверяем, был ли отправлен номер дня недели из формы
if(isset($_POST['dayNumber'])) {
    // Получаем номер дня недели из формы
    $dayNumber = intval($_POST['dayNumber']);

    // Определяем название дня недели в зависимости от его номера
    switch ($dayNumber) {
        case 1:
            echo "<p>День недели: Понедельник</p>";
            break;
        case 2:
            echo "<p>День недели: Вторник</p>";
            break;
        case 3:
            echo "<p>День недели: Среда</p>";
            break;
        case 4:
            echo "<p>День недели: Четверг</p>";
            break;
        case 5:
            echo "<p>День недели: Пятница</p>";
            break;
        case 6:
            echo "<p>День недели: Суббота</p>";
            break;
        case 7:
            echo "<p>День недели: Воскресенье</p>";
            break;
        default:
            echo "<p>Некорректный номер дня недели. Введите число от 1 до 7.</p>";
    }
}
?>
</body>
</html>