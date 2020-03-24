<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;
use \Acrilbox\Model\Client;

$app->get('/Cliente', function()
{
    User::verifyLogin();
    
    $clients = Client::listAll();

    $page = new Page();

    $page->setTpl("client", [
        "clients" => $clients
    ]);
});

$app->get('/Cliente/CadastroCliente', function()
{
	User::verifyLogin();

	$page = new Page();

	$page->setTpl("client-create");

});

$app->post('/Cliente/CadastroCliete', function()
{
    User::verifyLogin();

    $client = new Client();
  
    $client->setData($_POST);

    $client->save();

    header("Location: /Cliente");
    exit;
});

$app->get('/Cliente/:id_cliente/delete', function($id_cliente)
{
	User::verifyLogin();

    $client = new Client();

    $client->get((int)$id_cliente);
    
    $client->delete();

    header("Location: /Cliente");
    exit;

});

$app->get('/Cliente/:id_cliente', function($id_cliente)
{
	User::verifyLogin();

    $client = new Client();

    $client->get((int)$id_cliente);

	$page = new Page();

	$page->setTpl("client-update", [
        "clients" => $client->getValue()
    ]);

});

$app->post('/Cliente/:id_cliente', function($id_cliente)
{
	User::verifyLogin();

    $client = new Client();

    $client->get((int)$id_cliente);

    $client->setData($_POST);
    
    $client->update();

    header("Location: /Cliente");
    exit;

});


?>