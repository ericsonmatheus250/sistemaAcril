<?php if(!class_exists('Rain\Tpl')){exit;}?>            <h2 class="mb-4">Funcionário</h2>
            <form method="POST" action="#">
                <div class="form-group">
                    <label for="nome">Nome<i class="importante">*</i></label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cpf">CPF<i class="importante">*</i ></label>
                        <input type="text" class="form-control" id="cpf" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rg">RG<i class="importante">*</i></label>
                        <input type="text" class="form-control" id="rg" name="rg">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="telefone">Telefone<i class="importante">*</i></label>
                        <input type="text" class="form-control" id="telefone" name="telefone" maxlength="14" OnKeyPress="formatar('## # ####-####', this)">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo" class="form-control">
                            <option selected>Selecione</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dtNascimento">Data de Nasc.</label>
                        <input type="date" name="dtNascimento" class="form-control" id="dtNascimento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="setor">Setor<i class="importante">*</i></label>
                    <select id="setor" class="form-control" name="setor">
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="funcao">Função<i class="importante">*</i></label>
                    <select id="funcao" class="form-control" name="nomeFuncao">
                        <option>...</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="cep">CEP<i class="importante">*</i></label>
                        <input type="text" class="form-control" id="cep" name="cep" value="" maxlength="9" onblur="pesquisacep(this.value);" onkeypress="formatar('#####-###', this)">
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
                <div class="form-control-plaintext ">
                    <span style="color: #7c7c7c; ">Observações</span>
                    <textarea class="form-control valid " cols="30 " rows="6 "></textarea>

                </div>


                <button type="submit " class="btn btn-primary ">Cadastrar</button>
                <button type="submit " class="btn btn-danger " style="float: right; ">Cancelar</button>
            </form>
        </div>
    </div>