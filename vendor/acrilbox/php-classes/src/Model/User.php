<?php 

	namespace Acrilbox\Model;

	use \Acrilbox\Database\Sql;
	use \Acrilbox\Model;

	class User extends Model
	{
		const SESSION = "User";

		public static function login($login, $password)
		{
			$sql = new Sql();
		
			$results = $sql->select("SELECT * FROM tb_funcionario WHERE login = :LOGIN", array (
				":LOGIN" => $login 
			));

			if(count($results) === 0) 
			{
				throw new \Exception("Usuário ou senha incorreto");
			}

			$data = $results[0];

			if(password_verify($password, $data["senha"]) === true)
			{
				$user = new User();

				$user->setData($data);

				$_SESSION[User::SESSION] = $user->getValue();

				return $user;
			} else {
				throw new \Exception("Usuário ou senha incorreto");
				header("Location: /login");
				exit;
			}
		}

		public static function verifyLogin() 
		{
			if(
				!isset($_SESSION[User::SESSION]) //Se a sessão não existir
				||
				!$_SESSION[User::SESSION] //Se a sessão estiver vazia
				||
				!(int) $_SESSION[User::SESSION]["matricula_funcionario"] > 0 //Ou se a sessão estiver com o valor de matricula incorreto
			) {
				header("Location: /login"); //Será redirecionado para a tela de login pois a sessão estará expirada
				exit;
			}
		}

		public static function logout() 
		{
			$_SESSION[User::SESSION] = NULL;
		}
	}

 ?>