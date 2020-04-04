<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;
use \Acrilbox\Model\Supplier;

$app->get('/Fornecedor', function() 
{
	User::verifyLogin();
	
	$supplier = Supplier::listAll();

	$page = new Page();

	$page->setTpl("supplier", [
	   "supplier" => $supplier
	]);
});

$app->get('/Fornecedor/CadastroFornecedor', function()
{
	User::verifyLogin();

	$page = new Page();

	$page->setTpl("supplier-create");

});

$app->post('/Fornecedor/CadastroFornecedor', function()
{
    User::verifyLogin();

    $supplier = new Supplier();
  
    $supplier->setData($_POST);

    $supplier->save();

    header("Location: /Fornecedor");
    exit;
});

$app->get('/Fornecedor/:id_fornecedor/delete', function($id_fornecedor)
{
	User::verifyLogin();

    $supplier = new Supplier();

    $supplier->get((int)$id_fornecedor);
    
    $supplier->delete();

    header("Location: /Fornecedor");
    exit;

});

$app->get('/Fornecedor/:id_fornecedor', function($id_fornecedor)
{
	User::verifyLogin();

    $supplier = new Supplier();

    $supplier->get((int)$id_Fornecedor);

	$page = new Page();

	$page->setTpl("supplier-update", [
        "suppliers" => $supplier->getValue()
    ]);

});

$app->post('/Fornecedor/:id_fornecedor', function($id_fornecedor)
{
	User::verifyLogin();

    $supplier = new Supplier();

    $supplier->get((int)$id_Fornecedor);

    $supplier->setData($_POST);
    
    $supplier->update();

    header("Location: /Fornecedor");
    exit;

});


?>