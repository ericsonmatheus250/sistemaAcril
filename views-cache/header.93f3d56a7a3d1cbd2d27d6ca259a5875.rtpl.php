<?php if(!class_exists('Rain\Tpl')){exit;}?><!doctype html>
<html lang="pt-br">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/res/system/css/style.css">
    <link rel="stylesheet" href="/res/system/css/bootstrap.min.css">
    <link rel="stylesheet" href="/res/system/css/index.css">
    <script src="https://kit.fontawesome.com/98046bca06.js" crossorigin="anonymous"></script>
</head>


<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-square mb-5" style="background-image: url(/res/system/images/Logo2.png);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#idCadastro" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-list-alt"> Cadastrar</span></a>
                        <ul class="collapse list-unstyled" id="idCadastro">
                            <li>
                                <a href="/Funcionario">Funcionário</a>
                            </li>
                            <li>
                                <a href="/Cliente">Cliente</a>
                            </li>
                            <li>
                                <a href="/Fornecedor">Fornecedor</a>
                            </li>
                            <li>
                                <a href="/Produto">Produto</a>
                            </li>
                            <li>
                                <a href="/Servico">Serviço</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#idEstoqueMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-box"> Estoque</span></a>
                        <ul class="collapse list-unstyled" id="idEstoqueMenu">
                            <li>
                                <a href="#">Movimentação</a>
                            </li>
                            <li>
                                <a href="#">Acessorios</a>
                            </li>
                            <li>
                                <a href="#">Chapas</a>
                            </li>
                            <li>
                                <a href="#">Pronta entrega</a>
                            </li>
                            <li>
                                <a href="#">Cotação</a>
                            </li>
                            <li>
                                <a href="#">Compras</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#idVendas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-cart-plus"> Vendas</span></a>
                        <ul class="collapse list-unstyled" id="idVendas">
                            <li>
                                <a href="#">Espelhos</a>
                            </li>
                            <li>
                                <a href="#">Produtos</a>
                            </li>
                            <li>
                                <a href="#">Serviços</a>
                            </li>
                            <li>
                                <a href="/NovoOrcamento">Vidros</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#idFinanceiro" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-cash-register"> Finaceiro</span></a>
                        <ul class="collapse list-unstyled" id="idFinanceiro">
                            <li>
                                <a href="#">Caixa</a>
                            </li>
                            <li>
                                <a href="#">Fluxo de caixa</a>
                            </li>
                            <li>
                                <a href="ContasPagar.html">Contas a pagar</a>
                            </li>
                            <li>
                                <a href="#">Contas a receber</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#idRelatoriosMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-chart-bar"> Relatorios</span></a>
                        <ul class="collapse list-unstyled" id="idRelatoriosMenu">
                            <li>
                                <a href="#">Cadastros</a>
                            </li>
                            <li>
                                <a href="#">Vendas</a>
                            </li>
                            <li>
                                <a href="#">Ordens de serviços</a>
                            </li>
                            <li>
                                <a href="#">Estoque</a>
                            </li>
                            <li>
                                <a href="#">Financeiro</a>
                            </li>
                            <li>
                                <a href="#">Contratos</a>
                            </li>
                            <li>
                                <a href="#">Notas fiscais</a>
                            </li>
                            <li>
                                <a href="#">Logs do sistema</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#idNotaMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fas fa-sticky-note"> Notas Fiscais</span></a>
                        <ul class="collapse list-unstyled" id="idNotaMenu">
                            <li>
                                <a href="#">Adicionar NFC-e</a>
                            </li>
                            <li>
                                <a href="#">Certificado digital</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#idLojasMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-store"> Lojas</span></a>
                        <ul class="collapse list-unstyled" id="idLojasMenu">
                            <li>
                                <a href="#idAcriboxMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Acrilbox</a>
                                <ul class="collapse list-unstyled" id="idAcriboxMenu">
                                    <li>
                                        <a href="#">Acril box Aguas Claras</a>
                                    </li>
                                    <li>
                                        <a href="#">Acril box Asa Norte</a>
                                    </li>
                                    <li>
                                        <a href="#">Acril box Guará</a>
                                    </li>
                                    <li>
                                        <a href="#">Acril box Lago Sul</a>
                                    </li>
                                    <li>
                                        <a href="#">Acril box Sobradinho</a>
                                    </li>
                                    <li>
                                        <a href="#">Acril box Sudoeste</a>
                                    </li>
                                    <li>
                                        <a href="#">Acril box Taguatinga</a>
                                    </li>

                                </ul>
                            </li>


                            <li>
                                <a href="#idTaguaboxMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Taguabox</a>
                                <ul class="collapse list-unstyled" id="idTaguaboxMenu">
                                    <li>
                                        <a href="#">Taguabox Aguas Claras</a>
                                    </li>
                                    <li>
                                        <a href="#">Taguabox Asa Sul</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Casa Park</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Ceilândia</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Guará</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Lago Norte</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Lago Sul</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Park Way</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box São Sebastião</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box SIA</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Sobradinho</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Sudoeste</a>
                                    </li>
                                    <li>
                                        <a href="#">Tagua box Taguatinga</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-book"> Tabela</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-edit"> Contratos</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-tty"> Atendimentos</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-address-book"> Agenda</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-tools"> Configuração</span></a>
                    </li>
                </ul>

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item active usuario">
                        <div class="dropdown show">
                            <a class="nav nav-link dropdown" href="#" role="navigation" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>    Vitor
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"> <img src="/res/system/images/icone-user.jpg" alt="#"></a>
                                <a class="dropdown-item" href="#">Configuração <i class="fa fa-tools"></i></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Ajuda <i class="iconeUser fa fas fa-question-circle"></i></a>
                                <a class="dropdown-item" href="#">Sobre <i class="iconeUser fa fas fa-info-circle"></i></a>
                                <a class="dropdown-item" href="/logout">Sair <i class="iconeUser fa fas fa-sign-out-alt"></i></a>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
                </div>
            </nav>
            
