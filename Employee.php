<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;
use \Acrilbox\Model\Employee;

$app->get('/Funcionario', function()
	{
		User::verifyLogin();
		
		$employee = Employee::listAll();

		$page = new Page();

		$page->setTpl("employee", array(
			"employees" => $employee
		));
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
		
		$employee = new Employee();

		$_POST['login'] = $employee->generateLogin($_POST['nomePessoa']);

		$_POST['senha'] = $employee->defaultPassword();

		$_POST['sexo'] = $_POST['sexo'] == 'Masculino' ? 'M':'F';

		$_POST['dtNascimento'] = implode("-",array_reverse(explode("/",$_POST['dtNascimento'])));
		
		$employee->setData($_POST);

		$employee->save();

		header("Location: /Funcionario");
		exit;

	});

	$app->get('/Funcionario/:matricula_funcionario/delete', function($matricula_funcionario) 
	{
		User::verifyLogin();

		$employee = new Employee();

		$employee->get((int) $matricula_funcionario);

		$employee->delete();

		header("Location: /Funcionario");
		exit;

	});

	$app->get('/Funcionario/:matricula_funcionario', function($matricula_funcionario) 
	{
		User::verifyLogin();
		
		$page = new Page();

		$employee = new Employee();

		$employee->get((int) $matricula_funcionario);

		$page->setTpl("employee-update", [
			"employee" => $employee->getValue()
		]);

	});

	$app->post('/Funcionario/:matricula_funcionario', function($matricula_funcionario)
	{
		User::verifyLogin();
		
		$employee = new Employee();

		$employee->get((int)$matricula_funcionario);
		
		$_POST['sexo'] = $_POST['sexo'] == 'Masculino' ? 'M':'F';

		$_POST['dtNascimento'] = implode("-",array_reverse(explode("/",$_POST['dtNascimento'])));
		
		$employee->setData($_POST);

		$employee->update();

		header("Location: /Funcionario");
		exit;

	});




?>