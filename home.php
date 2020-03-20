<?php

use Slim\Slim;
use Acrilbox\Page;
use Acrilbox\Model\User;

$app->get('/login', function() 
{
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
            
    $page->setTpl("login");
});

$app->post('/login', function() 
{
    
    User::login($_POST["usuario"], $_POST["password"]);

    $page = new Page();
    
    header("Location: /");
    exit;	
});

/************************************************
 *Tela principal do sistema ---------------------
    *********************************************/
$app->get('/', function() 
{
    User::verifyLogin();

    $page = new Page();

    $page->setTpl("index", [
        "name" => User::showName()
    ]);

});


/*************************************************
 * Logout do sistema -----------------------------
**************************************************/
$app->get('/logout', function()
{
    User::logout(); 

    header("Location: /");

    exit;
});


?>