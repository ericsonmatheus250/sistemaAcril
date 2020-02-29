<?php if(!class_exists('Rain\Tpl')){exit;}?>            <h2 class="mb-4">Serviço</h2>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="idCodServ">Codigo do serviço</label>
                        <input type="text" class="form-control" id="idCodServ" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="idServico">Nome do Serviço</label>
                        <input type="text" class="form-control" id="idServico" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idTipoServ">Tipo de Serviço</label>
                        <input type="text" class="form-control" id="idTipoServ">
                    </div>
                </div>


                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="idValorUniServ">Valor</label>
                        <input type="text" class="form-control" id="idValorUniServ" placeholder="R$:" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="idMquadrado">Metragem quadrada (m²)</label>
                        <input type="text" name="mQuadrado" id="idMquadrado" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idMlinear">Metragem linear (m)</label>
                        <input type="text" name="mLinear" id="idMlinear" class="form-control">
                    </div>

                </div>
                <div class="form-control-plaintext">
                    <span style="color: #7c7c7c;">Descrição do serviço</span>
                    <textarea class="form-control valid" cols="30" rows="6"></textarea>

                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="submit" class="btn btn-danger" style="float: right;">Cancelar</button>
            </form>
        </div>
    </div>
