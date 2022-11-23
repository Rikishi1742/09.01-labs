<?php
# phpMyAdmin SQL Dump
# version 4.0.10
# http://www.phpmyadmin.net
#
# Хост: 127.0.0.1:3306
# Время создания: Фев 08 2022 г., 11:59
# Версия сервера: 5.7.29
# Версия PHP: 7.4.40

/*
	Данный файл сгенерирован автоматически
	В файле находятся дампы массивов с информацией о группах (team) и их альбомах (album) 
*/


#
# Структура таблицы `team`
#
# Создание: Янв 26 2022 г., 05:18
#
$team = array(
 
  array('id_team' => '4','name' => 'AC/DC','alias' => 'ac-dc','country' => 'Австралия','content' => '','date' => '1973','style' => 'хард-блюз-рок','path' => 'assets/teams/acdc.jpg','note' => NULL),
 
);

#
# Структура таблицы `album`
#
# Создание: Янв 26 2022 г., 05:44
#
$album = array(

  array('id_album' => '8','name' => 'The Razors Edge','alias' => 'the-razors-edge','country' => 'Австралия','content' => '','date' => '1990','path' => 'assets/albums/the-razors-edge.jpg','note' => NULL,'id_team' => '4'),
 
);
uksort($album, "name");

print_r($album);
?>