<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h2 class="mb-4"><i class="fas fa-shopping-cart"></i> Produto</h2>
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <button type="submit" class="btn btn-primary"><a href="/Produto/CadastroProduto" style="color:green;">Adicionar</a></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">

                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
                            </form>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <h3 class="mb-4 " style="color: #aeaeae; ">Chapas</h3>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Cod.</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Área</th>
                    <th scope="col">Existências</th>
                    <th scope="col">Med. X Med. Y</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">VI08</td>
                    <td>Incolor 8</td>
                    <td>1095 m²</td>
                    <td>100</td>
                    <td>3600x2600</td>
                    <td>R$3000</td>
                    <td>
                        <a href="#" class="btn btn-outline-warning" title="Editar"><i class="fas fa-user-edit"></i></a>
                        <a href="#" class="btn btn-outline-danger" title="Remove"><i class="fas fa-remove"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3 class="mb-4 " style="color: #aeaeae; ">Roupas, Calçados e Acessorios</h3>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Cod.</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Existências</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1525612</td>
                    <td>Camiseta</td>
                    <td>35</td>
                    <td>R$15,00</td>
                    <td>
                        <a href="#" class="btn btn-outline-warning" title="Editar"><i class="fas fa-user-edit"></i></a>
                        <a href="#" class="btn btn-outline-danger" title="Remove"><i class="fas fa-remove"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</div>