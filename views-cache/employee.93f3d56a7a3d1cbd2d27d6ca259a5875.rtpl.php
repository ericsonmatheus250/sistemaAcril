<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h2 class="mb-4"><i class="fas fa-address-card"></i> Funcionário</h2>
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                    <button type="submit" class="btn btn-primary"><a href="/Funcionario/CadastroFuncionario" style="color:green;">Adicionar</a></button>

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
                <caption>Lista de Funcionários</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Número</th>
                        <th scope="col">Login</th>
                        <th scope="colgroup">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter1=-1;  if( isset($employees) && ( is_array($employees) || $employees instanceof Traversable ) && sizeof($employees) ) foreach( $employees as $key1 => $value1 ){ $counter1++; ?>
                    <tr>
                        <th scope="row"><?php echo htmlspecialchars( $value1["matricula_funcionario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                        <td><?php echo htmlspecialchars( $value1["nomePessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td>Ativo</td>
                        <td>
                            <a class="btn btn-outline-success" title="visualizar"><i class="fas fa-search"></i></a>
                            <a href="/Funcionario/<?php echo htmlspecialchars( $value1["matricula_funcionario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-outline-warning" title="Editar"><i class="fas fa-user-edit"></i></a>
                            <a href="/Funcionario/<?php echo htmlspecialchars( $value1["matricula_funcionario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onCLick="return confirm('Deseja realmente apagar este registro?')" class="btn btn-outline-danger" title="Remove"><i class="fas fa-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>        
        </div>
        </div>