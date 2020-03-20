<?php 

	session_start();

	require_once("vendor/autoload.php");

	use \Slim\Slim;

	$app = new Slim();

	const SESSION = "User";
	
	$app->config('debug', true);

	require_once("employee.php");
	require_once("home.php");
	require_once("client.php");
	require_once("product.php");
	require_once("service.php");
	require_once("supplier.php");
	
	/*
	 * Fazer Pedido
	 */
	$app->get('/NovoOrcamento', function()
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("budget");
	});


	$app->run();

 ?>