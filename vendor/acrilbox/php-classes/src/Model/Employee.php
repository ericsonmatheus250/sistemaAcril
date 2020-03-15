<?php 

namespace Acrilbox\Model;
use \Acrilbox\DataBase\Sql;
use \Acrilbox\Model;

const PASSWORD = 123456;

class Employee extends Model
{
    public static function listAll() 
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_endereco e INNER JOIN tb_pessoa p USING(id_endereco)
        INNER JOIN tb_funcionario f USING(id_pessoa)");

    }
    
    public function generateLogin($name)
    {
        $name = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities($name));

        $fullName = explode(" ",$name);

        $login = $fullName[0] . "." . $fullName[count($fullName)-1];

        $login = strtolower($login);

        return $login;
    }

    public function defaultPassword()
    {
        $password = password_hash(PASSWORD, PASSWORD_DEFAULT, ["cost" => 12]);

        return $password;
    }

    public function save() 
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_employee_save(:pnomePessoa, :pemail, :ptelefone, :pcpf, :prg, 
        :psexo, :pdtNascimento, :plogin, :psenha, :pcep, :puf, :pcidade, :pbairro,
        :plogradouro, :pnumero, :pcomplemento)", array(
            ":pnomePessoa" => $this->getnomePessoa(),
            ":pemail" => $this->getemail(),
            ":ptelefone" => $this->gettelefone(),
            ":pcpf" => $this->getcpf(),
            ":prg" => $this->getrg(),
            ":psexo" => $this->getsexo(),
            ":pdtNascimento" => $this->getdtNascimento(),
            ":plogin" => $this->getlogin(),
            ":psenha" => $this->getsenha(),
            ":pcep" => $this->getcep(),
            ":puf" => $this->getuf(),
            ":pcidade" => $this->getcidade(),
            ":pbairro" => $this->getbairro(),
            ":plogradouro" => $this->getlogradouro(),
            ":pnumero" => $this->getnumero(),
            ":pcomplemento" => $this->getcomplemento()
        ));
        
        $this->setData($results[0]);

    }

    public function get($matricula_funcionario) 
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_endereco e INNER JOIN tb_pessoa p USING(id_endereco) 
            INNER JOIN tb_funcionario f USING(id_pessoa) WHERE f.matricula_funcionario = :matricula_funcionario", [
            ':matricula_funcionario' => $matricula_funcionario
        ]);

        $this->setData($results[0]);
        
    }

    public function delete() 
    {
        $sql = new Sql();

        $sql->query("CALL sp_employee_delete(:matricula_funcionario)", [
            ':matricula_funcionario' => $this->getmatricula_funcionario()
        ]);
        
    }

    public static function getUser()
    {
        
    }
}


 ?>