<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;

$app->get('/NovoOrcamento', function()
{
    User::verifyLogin();
    
    $page = new Page();

    $page->setTpl("budget", [
        "name" => User::showName()
    ]);
});
