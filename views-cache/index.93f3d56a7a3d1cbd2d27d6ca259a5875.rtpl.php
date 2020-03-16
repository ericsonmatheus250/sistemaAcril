<?php if(!class_exists('Rain\Tpl')){exit;}?>            <h2 class="mb-4">Bem vindo, Vitor Abreu! </h2>
            <div class="box box-light">
                <div class="box-body">
                    <h3 class="txt text-secondary"><i class="fas fa-chart-bar"></i> Ultimos Orçamentos</h3>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <td scope="col">Data</td>
                                    <th scope="col">cliente</th>
                                    <th scope="col">Projeto</th>
                                    <th scope="col">Situação</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>02/02/2000</td>
                                    <td>Ericsson</td>
                                    <td>box 1,20 m²</td>
                                    <td>Produção</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>02/02/2000</td>
                                    <td>Ericsson</td>
                                    <td>box 1,20 m²</td>
                                    <td>Aguardando</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>02/02/2000</td>
                                    <td>Ericsson</td>
                                    <td>box 1,20 m²</td>
                                    <td>Cancelado</td>
                                </tr>
                            </thead>

                        </table>
                    </div>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <div class="text-right text-muted" style="padding-top:9px">
                                        <i>
                                        <a class="text-muted" href="/res/system/_vendas/CriarOrcament.html"><i class="fa fa-angle-double-right margin-right-5px"></i>Novo Orçamento</a>
                                        </i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="box box-danger">
                        <div class="box-body">
                            <h3 class="txt text-danger"><i class="fas fa-sort-amount-down"></i> Contas a pagar</h3>
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Vencimento</th>
                                            <th scope="col">Descrição</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Situação</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <td>02/02/2000</td>
                                            <td>Ericsson</td>
                                            <td>0,00</td>
                                            <td>Vencida</td>
                                        </tr>
                                        <tr>
                                            <td>02/02/2000</td>
                                            <td>Ericsson</td>
                                            <td>0,00</td>
                                            <td>A vencer</td>
                                        </tr>
                                        <tr>
                                            <td>02/02/2000</td>
                                            <td>Ericsson</td>
                                            <td>0,00</td>
                                            <td>Vencida</td>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div class="text-right text-muted" style="padding-top:9px">
                                                <i>
                                        <a class="text-muted" href="/res/system/_caixa/ContasPagar.html"><i class="fa fa-angle-double-right margin-right-5px"></i>Ir para contas a pagar</a>
                                                </i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="box box-success">
                        <div class="box-body">
                            <h3 class="txt text-success"><i class="fas fa-sort-amount-up"></i> Contas a receber</h3>
                            <div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Vencimento</th>
                                            <th scope="col">Descrição</th>
                                            <th scope="col">Valor</th>

                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <td>02/02/2000</td>
                                            <td>Ericsson</td>
                                            <td>0,00</td>

                                        </tr>
                                        <tr>
                                            <td>02/02/2000</td>
                                            <td>Ericsson</td>
                                            <td>0,00</td>
                                        </tr>
                                        <tr>
                                            <td>02/02/2000</td>
                                            <td>Ericsson</td>
                                            <td>0,00</td>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div class="text-right text-muted" style="padding-top:9px">
                                                <i>
                                        <a class="text-muted" href="#"><i class="fa fa-angle-double-right margin-right-5px"></i>Ir para contas a receber</a>
                                                </i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>