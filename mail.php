<?php

$recepient = "ololoruslan@gmail.com";
$sitename = "IndieGames.com";

$name = trim($_GET["email"]);
$phone = trim($_GET["game"]);

$pagetitle = "Новая заявка с сайта \"$indie-games\"";
$message = "Почта: $email \Игра: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");