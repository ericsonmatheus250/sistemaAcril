<?php

use \Slim\Slim;
use \Acrilbox\Page;
use \Acrilbox\Model\User;

$app->get('/Fornecedor', function() 
	{
		User::verifyLogin();
		
		$page = new Page();

		$page->setTpl("supplier");
	});