<?php
include "Both.php";
$bot = new Bot;
$questions = [
    "que es serviceok" => "Servicios ok, es la iniciativa de estudiantes del curso de construcción de software II, que están al tanto de lo que ocurre con la pandemia del covid-19 y como está afectando a todo el Perú en especial a los establecimientos comerciales. Creamos la idea a partir de estos problemas, esta herramienta permitirá  evitar aglomeración de personas en centros comerciales.",
    "cual es tu nombre" => "Mi nombre es " . $bot->getName(),
    "cual es tu genero" => "Mi genero " . $bot->getGender(),
    "ok" => "Service ok les dice " . $bot->getFin()
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hola' || $msg == "holisssss") {
            $botty->reply('Hola, Bienvenido a SERVICE OK!.');
            $botty->reply('Cual es tu duda?');
        }elseif($msg == 'cuales son los pasos para registrar mi establecimiento'){
            $botty->reply('para registrar tu establecimiento, te recomendamos tener todos tus documentos listos como certificados que acrediten tu establecimiento, esto para asegurar la salud de tus clientes.');
            
            $botty->reply('El paso siguiente es ingresar al formulario de registro de SERVICE OK.');

            $botty->reply('Recuerde que todos los campos deben ser llenados');
        }      
        elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo sentimos su pregunta no fue encontrada :(. Trabajaremos en mejorar su atención. !GRACIAS¡");
            
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
