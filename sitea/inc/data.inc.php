<?php

$leftMenu = [
  ['link' => 'Домой', 'href' => 'index.php'],
  ['link' => 'О нас', 'href' => 'index.php?id=about'],
  ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
  ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
  ['link' => 'Калькулятор', 'href' => 'index.php?id=calc']
];

setlocale(LC_TIME, 'ru_RU', 'russian');
/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int) strftime('%H') + 3;
$welcome = ''; // Инициализируем переменную для приветствия
if ($hour < 6) $welcome = 'Доброй ночи';
elseif ($hour < 12) $welcome = 'Доброе утро';
elseif ($hour < 18) $welcome = 'Добрый день';
elseif ($hour < 24) $welcome = 'Добрый вечер';
else $welcome = 'Доброй ночи';

// Установка локали и выбор значений даты


$day = strftime('%d');
$mon = iconv("windows-1251", "utf-8", strftime('%B'));
$year = strftime('%Y');