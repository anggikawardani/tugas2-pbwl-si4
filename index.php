<?php 

if(!session_id())session_start();

require_once "inc/config.php";
require_once "app/core/Flasher.php";

new App\Core\Bootstrap();