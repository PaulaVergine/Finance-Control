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
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a href="/" title="Finance Control"><img src="<?= base_url("img/logofc.png") ?>" alt="Finance Control"></a>
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
                    <div class="col-md-8">
                        <h1>O CONTROLE FINANCEIRO QUE VOCÊ PRECISA!</h1>
                        <p>Cadastre-se e descubra a melhor forma de fazer seu controle finaneiro pessoal</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-1"></div>
                    <?php echo form_open('/users/newUser')?>
                        <div class="col-md-4">
                            <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail"/>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="submitEmail" class="btn btn-default btn-fc-primary" value="Cadastrar">
                        </div>
                    <?php echo form_close();?>
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
            <div class="thumbnail box">
                <img src="img/box1.jpg">
                <p>Atravé da agenda financeira é possivel controlar os gastos diários e esporádicos</p>
            </div>
            <div class="thumbnail box">
                <img src="img/box2.jpg">
                <p>Graficos e planilhas para que a visualização seja de fácil entendimento</p>
            </div>
            <div class="thumbnail box">
                <img src="img/box1.jpg">
                <p>Controle as movimentações de suas contas bancarias, cartões de credito e o dinheiro que está em sua carteira.</p>
            </div>
        </div>
    </div>
    <div class="row app">
        <div class="col-md-4">
            <p>Controle sua vida financeira em qualquer lugar.</p>
        </div>
        <div class="col-md-8 pic-app">
            <img src="img/iphone.png" />
        </div>
    </div>
</div>
    <div class="container-fluid">
        <div class="row home-about">
            <h3>Sobre nós</h3>
            <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>

    <div class="row footer">
        <div class="col-md-4">
            <h5>Finance Control</h5>
            <ul class="links-servicos">
                <li><a href="" title="">Recursos</a></li>
                <li><a href="" title="">Planos</a></li>
                <li><a href="" title="">Glossario</a></li>
                <li><a href="" title="">Consultar CPF</a></li>
                <li><a href="" title="">Contral de Ajuda</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>A Empresa</h5>
            <ul class="links-fc">
                <li><a href="" title="">Equipe</a></li>
                <li><a href="" title="">Depoimentos</a></li>
                <li><a href="" title="">Imprensa</a></li>
                <li><a href="" title="">Contato</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>Redes Sociais</h5>
            <ul class="link-social">
                <li><a href="http://www.facebook.com.br" title="Facebook" target="_blank"><span class="fa fa-facebook-square"></span></a> </li>
                <li><a href="http://www.Linkedin.com.br" title="Linkedin" target="_blank"><span class="fa fa-linkedin-square"></span></a></li>
                <li><a href="http://www.teitter.com.br" title="Twitter" target="_blank"><span class="fa fa-twitter-square"></span></a></li>
                <li><a href="emailto:contato@fcontrol.com.br" title="E-mail" target="_blank"><span class="fa fa-google"></span></a></li>
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
