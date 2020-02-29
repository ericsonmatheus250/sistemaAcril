<?php 

	namespace Acrilbox;

	class Model 
	{
		private $values = [];

		public function __call($name, $args) // Este metodo cria os getters e setters dinamicamente
		{
			$method = substr($name, 0, 3);
			$fieldName = substr($name, 3, strlen($name));
		
			switch ($method) {
				case "set":
					$this->values[$fieldName] = $args[0];
					break;
				
				case "get":
					return $this->values[$fieldName];
					break;
			}
		}

		public function setData($data)//Chama-se esta função para armazenar os dados vindos do banco de dados.
		{
			foreach ($data as $key => $value) {
				$this->{"set".$key}($value);
			}
		}

		public function getValue()  //Retorna os dados armazenados no array "Values"
		{
			return $this->values;
		}
	}

 ?>