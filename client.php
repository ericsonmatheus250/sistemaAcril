<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;

$app->get('/Cliente', function()
{
    User::verifyLogin();
    
    $page = new Page();

    $page->setTpl("client");
});


?>