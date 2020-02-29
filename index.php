<?php 

	session_start();

	require_once("vendor/autoload.php");

	use \Slim\Slim;
	use \Acrilbox\Page;
	use \Acrilbox\Model\User;

	$app = new Slim();

	$app->config('debug', true);

	/*
	 *Tela de Login do sistema
	 */
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
		$page = new Page();
		
		User::login($_POST["usuario"], $_POST["password"]);

		header("Location: /");
		exit;	
	});

	/*
	 *Tela principal do sistema
	 */
	$app->get('/', function() 
	{
		User::verifyLogin();

		$page = new Page();

		$page->setTpl("index");
	});

	/*
	 *Editar Funcionario
	 */
	$app->get('/Funcionario', function()
	{
		$page = new Page();

		$page->setTpl("Funcionario");
	});

	/*
	 *Editar Cliente
	 */
	$app->get('/Cliente', function()
	{
		$page = new Page();

		$page->setTpl("Cliente");
	});


	/*
	 * Logout do sistema
	 */
	$app->get('/logout', function()
	{
		User::logout(); //falta colocar pra funcionar na tela principal

		header("Location: /");

		exit;
	});

	/*
	 * Editar Serviços da empresa
	 */
	$app->get('/Servico', function() 
	{
		$page = new Page();

		$page->setTpl("Servico");
	});


	/*
	 * Editar Fornecedores 
	 */
	$app->get('/Fornecedor', function() 
	{
		$page = new Page();

		$page->setTpl("Fornecedor");
	});
	/*
	 * Editar Produtos 
	 */
	$app->get('/Produto', function()
	{
		$page = new Page();

		$page->setTpl("Produto");
	});


	$app->run();

 ?>