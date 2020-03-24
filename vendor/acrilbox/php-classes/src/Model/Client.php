<?php

namespace Acrilbox\Model;

use \Acrilbox\Database\Sql;
use \Acrilbox\Model;

class Client extends Model 
{
    public static function listAll() 
    {
        $sql = new Sql();
        
        return $sql->select("SELECT * FROM tb_endereco e INNER JOIN tb_pessoa p USING(id_endereco)
        INNER JOIN tb_cliente c USING(id_pessoa)");
        
    }

    public function save() 
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_client_save(:nomePessoa, :email, :telefone, :cpf_cnpj, 
        :tipo_cliente, :cep, :uf, :cidade, :bairro,
        :logradouro, :numero, :complemento, :limite_credito)", array(
            ":nomePessoa" => $this->getnomePessoa(),
            ":email" => $this->getemail(),
            ":telefone" => $this->gettelefone(),
            ":cpf_cnpj" => $this->getcpf_cnpj(),
            ":tipo_cliente" => $this->gettipo_cliente(),
            ":cep" => $this->getcep(),
            ":uf" => $this->getuf(),
            ":cidade" => $this->getcidade(),
            ":bairro" => $this->getbairro(),
            ":logradouro" => $this->getlogradouro(),
            ":numero" => $this->getnumero(),
            ":complemento" => $this->getcomplemento(),
            ":limite_credito" => $this->getlimite_credito()
        ));
    
        $this->setData($results[0]);

    }

    public function get($id_cliente) 
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_endereco e INNER JOIN tb_pessoa p USING(id_endereco)
        INNER JOIN tb_cliente c USING(id_pessoa) WHERE c.id_cliente = :id_cliente", [
            ':id_cliente' => $id_cliente
        ]);

        $this->setData($results[0]);
        
    }

    public function delete() 
    {
        $sql = new Sql();

        $sql->query("CALL sp_client_delete(:id_cliente)", [
            ':id_cliente' => $this->getid_cliente()
        ]);
        
    }

    public function update() 
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_client_update(:id_cliente, :nomePessoa, :email, :telefone, :cpf_cnpj, 
        :tipo_cliente, :cep, :uf, :cidade, :bairro,
        :logradouro, :numero, :complemento, :limite_credito)", array(
            ":id_cliente" => $this->getid_cliente(),
            ":nomePessoa" => $this->getnomePessoa(),
            ":email" => $this->getemail(),
            ":telefone" => $this->gettelefone(),
            ":cpf_cnpj" => $this->getcpf_cnpj(),
            ":tipo_cliente" => $this->gettipo_cliente(),
            ":cep" => $this->getcep(),
            ":uf" => $this->getuf(),
            ":cidade" => $this->getcidade(),
            ":bairro" => $this->getbairro(),
            ":logradouro" => $this->getlogradouro(),
            ":numero" => $this->getnumero(),
            ":complemento" => $this->getcomplemento(),
            ":limite_credito" => $this->getlimite_credito()
        ));
        
        $this->setData($results[0]);

    }
}

?>
