<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Finance Control</title>
    <link  rel="stylesheet"  href="<?= base_url("css/bootstrap.min.css")?>" type="text/css" media="all" >
    <link  rel="stylesheet"  href="<?= base_url("css/font-awesome.min.css")?>" type="text/css" media="all" >

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!--Custom style-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href='<?= base_url("css/style.css") ?>' rel="stylesheet" type="text/css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body class="home">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <img src="<?= base_url("img/logof.png") ?>" alt="Finance Control">
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><button href="#"  id="loginHome" class="btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acesse Aqui <span class="fa fa-angle-double-down" aria-hidden="true"></span></button></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="sign-in">
                <div class="row">
                    <div class="col-md-7">
                        <h1>O CONTROLE FINANCEIRO QUE VOCÊ PRECISA!</h1>
                        <p>Cadastre-se e descubra a melhor forma de fazer seu controle finaneiro pessoal</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-1"></div>
                    <form action="/user/novo_cadastro" method="post">
                        <div class="col-md-3">
                            <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail"/>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-default btn-fc-primary" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    <div class="row home-text1">
        <div class="col-md-12 text-center">
            <p>Com muito ou pouco dinheiro e sabendo usá-lo de forma correta,<br/> os seus planos para o futuro começam agora</p>
        </div>
    </div>
    <div class="boxes-features">
        <h2 class="text-center">CONHEÇA O ORGANIZADOR DAS SUAS FINAÇAS - FINANCE CONTROL</h2>
        <div class="row text-center">
            <div class="box">
                <img src="img/box1.jpg">
                <p>Atravé da agenda financeira é possivel controlar os gastos diários e esporádicos</p>
            </div>
            <div class="box">
                <img src="img/box2.jpg">
                <p>Graficos e planilhas para que a visualização seja de fácil entendimento</p>
            </div>
            <div class="box">
                <img src="img/box1.jpg">
                <p>Controle as movimentações de suas contas bancarias, cartões de credito e o dinheiro que está em sua carteira.</p>
            </div>
        </div>
    </div>
    <div class="row app">
        <div class="col-md-4">
            <p>Controle sua vida financeira em qualqer lugar.</p>
        </div>
        <div class="col-md-8 pic-app">
            <img src="img/iphone.png" />
        </div>
    </div>
</div>
    <div class="container-fluid">
        <div class="row home-about">
            <h3>Sobre nós</h3>
        </div>
    <div class="row footer">
        <div class="col-md-4">
            <h5>Finance Control</h5>
            <ul class="links-servicos">
                <li>Rcursos</li>
                <li>Planos</li>
                <li>Glossario</li>
                <li>Consultar CPF</li>
                <li>Contral de Ajuda</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>A Empresa</h5>
            <ul class="links-fc">
                <li>Equipe</li>
                <li>Depoimentos</li>
                <li>Imprensa</li>
                <li>Contato</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>Redes Sociais</h5>
            <ul class="link-social">
                <li>Facebook</li>
                <li>Linkedn</li>
                <li>Twiter</li>
                <li>Email</li>
                <li>Google+</li>
            </ul>
        </div>
    </div>
</div>
        <div id="loginPopOver" class="hide">
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" placeholder="E-mail" class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" placeholder="Senha" class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="submit" value="Enviar" class="btn btn-default btn-sm btn-fc-primary" />
                    </div>
                </div>
            </form>
        </div>
    <script src='<?= base_url("js/jquery-3.1.0.min.js") ?>' ></script>
    <script src='<?= base_url("js/bootstrap.min.js") ?>' ></script>
<script>
    $(function(){
        $('#loginHome').popover({
            placement: 'bottom',
            title: 'Login',
            html:true,
            content:  $('#loginPopOver').html()
        })
    })
</script>
</body>
</html>