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
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="/" title="Finance Control"><img src="<?= base_url("img/logof.png") ?>" alt="Finance Control"></a>
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
<div class="container">


    <div class="row" >
        <div class="col-md-12">
            <h1 class="text-center""><strong>Cadastre-se agora!</strong></h2>
        </div>
    </div>

            <div class="row">
               <div class="col-md-1"></div>
                <div class="col-md-6 text-center form-cad">

                    <form accept-charset="UTF-8" action="/users" autocomplete="off" class="new_user" id="new_user" method="post">

                        <!-- /sign_in-->
                        <br/>
                        <p>Caso você já tenha uma conta no Finance-Control, <a href="/sign_in">entre aqui</a>.</p>
                        <!-- /sign_in-->

                        <input autocomplete="off" class="form-control" id="user_name" name="user[name]" size="30" type="text" placeholder="Digite seu nome"/>

                        <input autocomplete="off" class="form-control" id="user_ac_email" name="user[email]" size="30" type="email" validate="{:uniqueness=&gt;false}" value="" placeholder="Informe seu endereço de e-mail"/>

                        <input autocomplete="off" class="form-control" id="user_ac_password" name="user[password]" size="30" type="password" placeholder="Escolha uma senha"/>

                        <input autocomplete="off" class="form-control" id="user_password_confirmation" name="user[password_confirmation]" size="30" type="password" placeholder="Redigite sua senha"/>

                        <button class="btn btn-large btn-primary btn-block" data-loading-text="Aguarde..." id="btnTry" name="button" type="submit">Comece agora, 30 dias grátis</button>

                        <p id="registerDisclaimer" >Ao clicar no botão acima, eu aceito a <a data-toggle="modal" href="#tkPri" id="btPolitica" onclick="showPolicy();"><strong>Política de Privacidade</strong></a> e o <a data-toggle="modal" href="#tkTerm" id="btTermoUso" onclick="showTerms();"><strong>Termo de Uso</strong></a>.</p>
                    </form>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 info-cad">

            <h2>Finance-Control </h2>

            <h4>Comece a usar o seu sistema de <strong>controle de financeiro em menos de 2 minutos!</strong></h4>

            <ul style="list-style:none">
                <li><span class="glyphicon glyphicon-hand-right"></span></i> Fácil de usar</li>
                <li><span class="glyphicon glyphicon-hand-right"></span></i> Totalmente seguro</li>
                <li><span class="glyphicon glyphicon-hand-right"></span></i> Sem necessidade de instalação</li>
                <li><span class="glyphicon glyphicon-hand-right"></span></i> Não precisa informar o cartão de crédito</li>
            </ul>

            <br/><h4>3 razões para cadastrar-se agora:</h4>

            <ul style="list-style:none">
                <li><span class="glyphicon glyphicon-hand-right"></span><strong> Controle de custos e despesas</strong></li>
                <li><span class="glyphicon glyphicon-hand-right"></span><strong> Acesso de qualquer lugar pelo aplicativo</strong></li>
                <li><span class="glyphicon glyphicon-hand-right"></span><strong> Relatórios para sua tomada de decisão</strong></li>
            </ul>


        </div>
    </div>


</div>
<script src='<?= base_url("js/jquery-3.1.0.min.js") ?>' ></script>
<script src='<?= base_url("js/bootstrap.min.js") ?>' ></script>
</body>
</html>
