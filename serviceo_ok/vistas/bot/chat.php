<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    "what is php" => "PHP is a server side language",
    "cual es tu nombre" => "My nombre es " . $bot->getName(),
    "cual es tu genero" => "Yo soy " . $bot->getGender()
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hola' || $msg == "holis") {
            $botty->reply('Hola que tal!');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Can't respond to that");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}