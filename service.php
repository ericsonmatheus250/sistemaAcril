<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;

$app->get('/Servico', function() 
{
    User::verifyLogin();
    
    $page = new Page();

    $page->setTpl("service"); // Arquivo ainda não foi criado
});




