<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Finance Control</title>
    <link  rel="stylesheet"  href="<?= base_url("css/bootstrap.min.css")?>" type="text/css" media="all" >
    <link  rel="stylesheet"  href="<?= base_url("css/font-awesome.min.css")?>" type="text/css" media="all" >

    <!--Custom style-->
    <link href='<?= base_url("css/simple-sidebar.css") ?>' rel="stylesheet" type="text/css" media="all" />
    <link href='<?= base_url("css/style.css") ?>' rel="stylesheet" type="text/css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-blue">
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
                    <li><a href="" title="Opções"><span class="fa fa-cog" aria-hidden="true"></span><span class="item-menu-top">Opções</span></a></li>
                    <li><a href="" title="Sair"><span class="fa fa-sign-out" aria-hidden="true"></span><span class="item-menu-top">Sair</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="wrapper" class="container-fluid">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li>
                <a href="#" title=""><span class="fa fa-pie-chart" data-toggle="tooltip" data-placement="right" title="Estatisticas"></span></a>
            </li>
            <li>
                <a href="#" title="Relátorio"><span class="fa fa-file-o"></span></a>
            </li>
            <li>
                <a href="#" title="Relátorio"><span class="fa fa-file-o"></span></a>
            </li>
            <li>
                <a href="#" title="Relátorio"><span class="fa fa-file-o"></span></a>
            </li>
            <li>
                <a href="#" title="Relátorio"><span class="fa fa-file-o"></span></a>
            </li>
        </ul>
    </div>
    <div class="container-fluid">
<!-- /#sidebar-wrapper -->