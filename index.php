<?php
require 'controllers/Controller.php';
require_once 'config/DB.php';

$controller = new Controller();

$controller->invoke();

