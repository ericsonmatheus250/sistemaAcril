<?php 

namespace Acrilbox\Model;
use \Acrilbox\DataBase\Sql;
use \Acrilbox\Model;

const PASSWORD = 123456;

class Employee extends Model
{
    /*public static function listAll() 
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_categories ORDER BY idcategory");

    }*/
    
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

    /*public function get($idcategory) 
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_categories WHERE idcategory = :idcategory", [
            ':idcategory' => $idcategory
        ]);

        $this->setData($results[0]);
        
    }

    public function delete() 
    {
        $sql = new Sql();

        $sql->query("DELETE FROM tb_categories WHERE idcategory = :idcategory", [
            ':idcategory' => $this->getidcategory()
        ]);
        
        Employee::updateFile();
    }

    public static function updateFile()
    {
        $categories = Employee::listAll();

        $html = [];

        foreach($categories as $row) 
        {
            array_push($html, '<li><a href="/categories/'. $row['idcategory']. '">'. $row['descategory'] .'</a></li>');
        }

        file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "categories-menu.html", implode('', $html));
    }*/
}


 ?>