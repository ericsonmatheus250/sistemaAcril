<?php if(!class_exists('Rain\Tpl')){exit;}?>           <div class="container">
            <h2 class="mb-4">Cliente</h2>
            <form action="/Cliente/CadastroCliete" method="POST">
                <div class="form-group">
                    <label for="idNome">Nome<i class="importante">*</i></label>
                    <input type="text" class="form-control" id="idNome" name="nomePessoa">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="cpf">CPF / CNPJ<i class="importante">*</i ></label>
                        <input type="text" class="form-control" id="cpf" name="cpf_cnpj" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idTipoClie">Tipo de Cliente<i class="importante">*</i></label>
                        <select id="idTipoClie" name="tipo_cliente" class="form-control">
                            <option selected>Escolher...</option>
                            <option>Fisico</option>
                            <option>Juridico</option>
                         </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="idEmail">E-mail</label>
                        <input type="text" class="form-control" id="idEmail" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="idTelefone">Telefone<i class="importante">*</i></label>
                        <input type="text" class="form-control" id="idTelefone" name="telefone" maxlength="14" OnKeyPress="formatar('## # ####-####', this)">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="cep">CEP<i class="importante">*</i></label>
                        <input type="text" class="form-control" id="cep" name="cep" value="" maxlength="9" onblur="pesquisacep(this.value);" onkeypress="formatar('#####-###', this)" placeholder="Digite para buscar">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="uf">Estado</label>
                        <input type="text" class="form-control" id="uf" name="uf">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" class="form-control" id=rua name="logradouro">
                    </div>
                    <div class="form-gorup col-md-2">
                        <label for="numero">Número<i class="importante">*</i></label>
                        <input type="number" class="form-control" id="numero" name="numero">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="limiteCredito">Limite de credito</label>
                        <input type="text" class="form-control" name="limite_credito" id="limiteCredito" readonly>
                        <input type="checkbox" name="limiteCredito" id="limiteCredito">Habilitar limite de credito?
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="submit" class="btn btn-danger" style="float: right;">Cancelar</button>
            </form>
        </div>
        </div>
    </div>
