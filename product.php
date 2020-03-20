<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;

$app->get('/Produto', function()
{
    User::verifyLogin();
    
    $page = new Page();

    $page->setTpl("product");
});

$app->get('/Produto/CadastroProduto', function() 
{
    User::verifyLogin();

    $page = new Page();

    $page->setTpl("product-create");
});
