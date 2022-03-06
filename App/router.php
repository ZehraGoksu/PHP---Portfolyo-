<?php

$app->router->get( config("BASE_PATH"). "/",  "Frontend/IndexController@IndexPage");
$app->router->get( config("BASE_PATH"). "/about",  "Frontend/IndexController@AboutPage");
$app->router->get( config("BASE_PATH"). "/portfolio",  "Frontend/IndexController@PortfolioPage");

$app->router->get( config("BASE_PATH"). "/contact",  "Frontend/ContactController@IndexPage");
$app->router->post( config("BASE_PATH"). "/contact",  "Frontend/ContactController@SendContactMessage");




$app->router->get( config("BASE_PATH")."/admin/login", "Backend/AdminController@LoginPage" );
$app->router->post( config("BASE_PATH")."/admin/login", "Backend/AdminController@LoginForm" );


$app->router->group( config("BASE_PATH")."/admin", function($router){

    $router->get("/", "Backend/AdminController@IndexPage");
    $router->get("/about", "Backend/AdminController@AboutPage");
    $router->get("/contactList", "Backend/AdminController@ContactPage");
    $router->get("/projectList", "Backend/AdminController@ProjectPage");
    $router->get("/projectAdd", "Backend/AdminController@ProjectAddPage");

    $router->post( "/update-about", "Backend/AdminController@UpdateAbout" );
    $router->post( "/projectAdd", "Backend/ProjectController@AddProject" );
  
    

    $router->get('admin-logout',function(){
        auth()->remove("adminAuth");
        redirect("admin/login", true, "Oturum Başarıyla Kapatıldı");
    });

} ,["before" => "AdminAuth"]);




$app->router->group( config("BASE_PATH")."/api", function($router){


    $router->get( "/getAdminById/:id", "Backend/ApiController@getByAdminId" );


}, ["before" => "AdminAuth"] );



$app->router->notFound(function(){
    $core= new Core\Controller();
    echo $core->view("backend/404");
});
?>