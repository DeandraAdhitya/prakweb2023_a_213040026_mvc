<?php

/*

index - init - (App - (controllers), 
                Controller - (views, models), 
                Database, 
                config)

*/

if (!session_id()) {
    session_start();
}

require_once '../app/init.php';

$app = new App;

?>