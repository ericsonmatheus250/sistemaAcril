<?php

namespace Acrilbox\Model;

use \Acrilbox\Database\Sql;
use \Acrilbox\Model;

class Supplier extends Model 
{
    public static function listAll() 
    {
        $sql = new Sql();
        
        return $sql->select("SELECT * FROM tb_endereco e INNER JOIN tb_pessoa p USING(id_endereco)
        INNER JOIN tb_fornecedor f USING(id_pessoa)");
        
    }

    public function save() 
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_supplier_save(:nomePessoa, :email, :telefone, :cpf_cnpj, 
        :tipo_fornecedor, :cep, :uf, :cidade, :bairro,
        :logradouro, :numero, :complemento)", array(
            ":nomePessoa" => $this->getnomePessoa(),
            ":email" => $this->getemail(),
            ":telefone" => $this->gettelefone(),
            ":cpf_cnpj" => $this->getcpf_cnpj(),
            ":tipo_fornecedor" => $this->gettipo_fornecedor(),
            ":cep" => $this->getcep(),
            ":uf" => $this->getuf(),
            ":cidade" => $this->getcidade(),
            ":bairro" => $this->getbairro(),
            ":logradouro" => $this->getlogradouro(),
            ":numero" => $this->getnumero(),
            ":complemento" => $this->getcomplemento()
        ));
    
        $this->setData($results[0]);

    }

    public function get($id_fornecedor) 
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_endereco e INNER JOIN tb_pessoa p USING(id_endereco)
        INNER JOIN tb_fornecedor c USING(id_pessoa) WHERE c.id_fornecedor = :id_fornecedor", [
            ':id_fornecedor' => $id_fornecedor
        ]);

        $this->setData($results[0]);
        
    }

    public function delete() 
    {
        $sql = new Sql();

        $sql->query("CALL sp_supplier_delete(:id_fornecedor)", [
            ':id_fornecedor' => $this->getid_fornecedor()
        ]);
        
    }

    public function update() 
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_supplier_update(:id_fornecedor, :nomePessoa, :email, :telefone, :cpf_cnpj, 
        :tipo_fornecedor, :cep, :uf, :cidade, :bairro,
        :logradouro, :numero, :complemento)", array(
            ":id_fornecedor" => $this->getid_fornecedor(),
            ":nomePessoa" => $this->getnomePessoa(),
            ":email" => $this->getemail(),
            ":telefone" => $this->gettelefone(),
            ":cpf_cnpj" => $this->getcpf_cnpj(),
            ":tipo_fornecedor" => $this->gettipo_fornecedor(),
            ":cep" => $this->getcep(),
            ":uf" => $this->getuf(),
            ":cidade" => $this->getcidade(),
            ":bairro" => $this->getbairro(),
            ":logradouro" => $this->getlogradouro(),
            ":numero" => $this->getnumero(),
            ":complemento" => $this->getcomplemento()
        ));
        
        $this->setData($results[0]);

    }
}

?>
