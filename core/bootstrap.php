<?php

spl_autoload_register(function ($className){
    $folders = [CORE, DB, CONTROLLERS, VIEWS, MODULES];
    foreach ($folders as $folder) {
        if (file_exists($folder.$className.PHP)){
            require_once $folder.$className.PHP;
            break;
        }
    }
});

function dd($param){
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}

function redirect($page = '/'){
    header('Location: '.$page);
}