<?php

require_once "./config/APP.php";
require_once "./controladores/template.php";

$template = new TemplateController();
$template -> template();
/*$plantilla = new vistasControladores();
$plantilla ->obtener_plantilla_controller();*/