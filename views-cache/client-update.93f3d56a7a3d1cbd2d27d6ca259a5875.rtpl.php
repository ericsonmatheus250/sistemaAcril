<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
    <h2 class="mb-4">Cliente</h2>
    <form action="/Cliente/<?php echo htmlspecialchars( $clients["id_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">
        <div class="form-group">
            <label for="idNome">Nome<i class="importante">*</i></label>
            <input type="text" class="form-control" id="idNome" name="nomePessoa" value="<?php echo htmlspecialchars( $clients["nomePessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="cpf">CPF / CNPJ<i class="importante">*</i ></label>
                <input type="text" class="form-control" id="cpf" name="cpf_cnpj" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" value="<?php echo htmlspecialchars( $clients["cpf_cnpj"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="idTipoClie">Tipo de Cliente<i class="importante">*</i></label>
                <select id="idTipoClie" name="tipo_cliente" class="form-control">
                    <?php if( $clients["tipo_cliente"] == 'Fisico' ){ ?><option selected>Físico</option><option>Jurídico</option><?php }else{ ?><option selected>Jurídico</option><option>Físico</option><?php } ?>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="idEmail">E-mail</label>
                <input type="text" class="form-control" id="idEmail" name="email" value="<?php echo htmlspecialchars( $clients["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="idTelefone">Telefone<i class="importante">*</i></label>
                <input type="text" class="form-control" id="idTelefone" name="telefone" maxlength="14" OnKeyPress="formatar('## # ####-####', this)" value="<?php echo htmlspecialchars( $clients["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="cep">CEP<i class="importante">*</i></label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?php echo htmlspecialchars( $clients["cep"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="9" onblur="pesquisacep(this.value);" onkeypress="formatar('#####-###', this)" placeholder="Digite para buscar">
            </div>
            <div class="form-group col-md-1">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" id="uf" name="uf" value="<?php echo htmlspecialchars( $clients["uf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo htmlspecialchars( $clients["cidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo htmlspecialchars( $clients["bairro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id=rua name="logradouro" value="<?php echo htmlspecialchars( $clients["logradouro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-gorup col-md-2">
                <label for="numero">Número<i class="importante">*</i></label>
                <input type="number" class="form-control" id="numero" name="numero" value="<?php echo htmlspecialchars( $clients["numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo htmlspecialchars( $clients["complemento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="limiteCredito">Limite de credito</label>
                <input type="text" class="form-control" name="limite_credito" id="limiteCredito" readonly  value="<?php echo htmlspecialchars( $clients["limite_credito"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <input type="checkbox" name="limiteCredito" id="limiteCredito">Habilitar limite de credito?
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="submit" class="btn btn-danger" style="float: right;">Cancelar</button>
    </form>
</div>
</div>
</div>
