<?php
$daysOfWeek = array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье");
$currentDay = date('N-word');
echo "Сегодня " . $daysOfWeek[$currentDay - 1];
?>