<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h2 class="mb-4"><i class="fas fa-address-book"></i> Cliente</h2>
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                    <button type="submit" class="btn btn-primary"><a href="/_cadastro/CadastroCliente.html" style="color:green;">Adicionar</a></button>

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
            <table class="table">
                <caption>Lista de Clientes</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Número</th>
                        <th scope="col">Estado</th>
                        <th scope="colgroup">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>vitor santos</td>
                        <td>@gmail</td>
                        <td>(61)9 9996-3966</td>
                        <td>ativo</td>
                        <td>
                            <a class="btn btn-outline-success" title="visualizar"><i class="fas fa-search"></i></a>
                            <a href="#" class="btn btn-outline-warning" title="Editar"><i class="fas fa-user-edit"></i></a>
                            <a href="#" class="btn btn-outline-danger" title="Remove"><i class="fas fa-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Ericson</td>
                        <td>@hotmail</td>
                        <td>(61)0 0000-0000</td>
                        <td>desativado</td>
                        <td>
                            <a class="btn btn-outline-success" title="visualizar"><i class="fas fa-search"></i></a>
                            <a href="#" class="btn btn-outline-warning" title="Editar"><i class="fas fa-user-edit"></i></a>
                            <a href="#" class="btn btn-outline-danger" title="Remove"><i class="fas fa-remove"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
</div>
 </div>