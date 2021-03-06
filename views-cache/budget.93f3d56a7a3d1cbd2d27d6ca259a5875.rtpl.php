<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
    <h2 class="mb-4">Nova venda</h2>
    <h3 class="mb-3" style="color: #aeaeae;">Dados da venda</h3>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="cliente">Nome do cliente</label>
            <input type="text" class="form-control" name="cliente" id="cliente">
        </div>
        <div class="form-group col-md-6">
            <label for="vendendor">Nome do vendedor</label>
            <input type="text" class="form-control" name="vendendor" id="vendedor" value="<?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="data">Data</label>
            <input type="date" class="form-control" name="data" id="data">
        </div>
        <div class="form-group col-md-2">
            <label for="dataEntrega">Data entrega</label>
            <input type="date" class="form-control" name="dataEntrega" id="dataEntrega">

        </div>
    </div>
    <h3 class="mb-3" style="color: #aeaeae;">Detalhes do projeto</h3>
    <div class=" form-group ">
        <label for=" projeto ">Selecione seu projeto</label>
        <select class=" form-control " name=" projeto " id=" projeto ">
            <option value=" # ">porta varanda 4 folhas</option>
            <option value=" # ">porta varanda 2 folhas</option>
        </select>
    </div>
    <div class="form-group">
        <label for="idCorVid">Cor do vidro</label>
        <select class="form-control" name="corVidro" id="idCorVid">
            <option value="#">Bronze</option>
            <option value="#">Fumê</option>
            <option value="#" selected>Incolor</option>
            <option value="#">Verde</option>
        </select>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="idCorAces">Acessórios</label>
            <select class="form-control" name="corACessorio" id="idCorAces">
                <option value="#">Branco</option>
                <option value="#">Brilho</option>
                <option value="#">Bronze</option>
                <option value="#">Champanhe</option>
                <option value="#" selected>Fosco</option>
                <option value="#">Preto</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="idEspessura">Espessura</label>
            <select class="form-control" name="Espessura id=" idEspessura ">
                <option value=" # ">4mm</option>
                <option value=" # ">6mm</option>
              <option value=" # " selected>8mm</option>
                <option value=" # ">10mm</option>
                <option value=" # ">12mm</option>
                <option value=" # ">15mm</option>
                <option value=" 3 ">19mm</option>
            </select>
        </div>
        <div class="form-group col-md-4 ">
            <label for="idPuxador ">Puxador</label>
            <select class="form-control " name="puxador " id="idPuxador ">
                <option value="# ">Selecione...</option>
                <option value="# "></option>
                <option value="# "></option>
                <option value="# "></option>
            </select>
        </div>   
    </div>
<h3 class=" mb-4 " style=" color: #aeaeae; ">Medidas</h3>
<div class=" form-row ">
<div class=" form-group col-md-6 ">
    <label for=" idLargura ">largura vão</label>
    <input type=" number " class=" form-control " name=" largura " id=" idLargura "> 
</div>

<div class=" form-group col-md-6 ">
    <label for=" idAltura ">Altura vão</label>
    <input type=" number " class=" form-control " name=" altura " id=" idAltura ">
</div>
</div>
<div>
<button type=" submit " class=" btn btn-primary ">Calcular</button>
<button type="submit " class="btn btn-danger " style="float: right; ">Cancelar</button>
</div>
</form>

</div>
</div>
</div>