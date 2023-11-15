<?php


require_once './controller/startTemplate.controller.php';
require_once './controller/auth.controller.php';
require_once './models/config/conection.php';
require_once './models/Authenticacion.models.php';


$template = new startTemplate();
$template->ctrStartTemplate();