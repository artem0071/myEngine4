<?php

class App
{
    public $controller;
    public $method;

    public static function DB(){
        return new QueryBuilder(Connection::make());
    }

    public function __construct()
    {
        $mix_url = explode('/',$_SERVER['REDIRECT_URL']);
        $this->controller = ucfirst($mix_url[1]!=''?$mix_url[1]:'home');
        $this->method = ($mix_url[2]!=''?$mix_url[2]:'main');
    }

    public function render()
    {
        if (file_exists(CONTROLLERS . $this->controller . PHP)) {
            $controller = $this->controller;
            $method = $this->method;

            $controller = new $controller();

            if (method_exists($controller, $method)) {


                $controller::$method();


            } else require NOT_FOUND;
        } else require NOT_FOUND;
    }
}