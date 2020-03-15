<?php 

	session_start();

	require_once("vendor/autoload.php");

	use \Slim\Slim;
	use \Acrilbox\Page;
	use \Acrilbox\Model\User;
	use \Acrilbox\Model\Employee;

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
	 * Logout do sistema
	 */
	$app->get('/logout', function()
	{
		User::logout(); 

		header("Location: /");

		exit;
	});


	/**************************************************************************
	 *Editar Funcionario ------------------------------------------------------
	 **************************************************************************/
	$app->get('/Funcionario', function()
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("employee");
	});

	$app->get('/Funcionario/CadastroFuncionario', function()
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("employee-create");
	});

	$app->post('/Funcionario/CadastroFuncionario', function()
	{
		User::verifyLogin();
		
		$employed = new Employee();

		$_POST['login'] = $employed->generateLogin($_POST['nomePessoa']);

		$_POST['senha'] = $employed->defaultPassword();

		$_POST['sexo'] = $_POST['sexo'] === "Masculino" ? 'M':'F';

		$_POST['dtNascimento'] = implode("-",array_reverse(explode("/",$_POST['dtNascimento'])));
		
		$employed->setData($_POST);

		$employed->save();

		header("Location: /Funcionario");
		exit;

	});

	$app->get('/Funcionario/update', function() 
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("employee-update");

	});


	/*
	 *Editar Cliente
	 */
	$app->get('/Cliente', function()
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("client");
	});


	/*
	 * Editar Serviços da empresa
	 */
	$app->get('/Servico', function() 
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("service"); // Arquivo ainda não foi criado
	});


	/*
	 * Editar Fornecedores 
	 */
	$app->get('/Fornecedor', function() 
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("supplier");
	});
	/*
	 * Editar Produtos 
	 */
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


	$app->run();

 ?>