<?php

namespace Core;

use Buki\Router\Router;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Illuminate\Database\Capsule\Manager as Capsule;
use Arrilot\DotEnv\DotEnv;


class Bootstrap
{
    public $router;
    public $view;
    public $capsule;

    public function __construct()
    {
 
         DotEnv::load( dirname(__DIR__). '/.env.php'); 



        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();

        $this->capsule = new Capsule;

        $this->capsule ->addConnection([
            'driver' => 'mysql',
            'host' => config("DB_HOST"),
            'database' => config("DB_NAME"),
            'username' => config("DB_USER"),
            'password' => config("DB_PASSWORD"),
            'charset' => 'utf8',
            'collation' => 'utf8_turkish_ci',
            'prefix' => '',
        ]);


        $this->capsule ->setAsGlobal();
        $this->capsule ->bootEloquent();


        $this->router = new Router([
            'paths' => [
                'controllers' => 'App/Controllers',
                'middlewares' => 'App/Middlewares'
            ],
            'namespaces' => [
                'controllers' => 'App\Controllers',
                'middlewares' => 'App\Middlewares'
            ]
        ]);


        $this->view = new View();

    }


    public function run()
    {
        $this->router->run();
    }


}


?>