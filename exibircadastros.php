<?php require_once("php/listacadastro.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculdade CDL - Gerenciador de Chamados</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <form method="POST" action="grava.php" class="abrirchamado">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="abrirchamados.php">Sistema Gerenciador</a>
            </div>

            <div class="header-right">
                <a href="index.php" class="btn btn-danger" title="Sair"><i class="fa fa-exclamation-circle fa-2x"></i></a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Danilo Marley - Manoel Felipe
                            <br />
                            
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="abrirchamados.php"><i class="fa fa-dashboard "></i>Inicio</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Abrir chamado <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="abrirchamados.php"><i class="fa fa-toggle-on"></i>Novo Chamado</a>
                            </li>
                            <li>
                                <a href="chamado.php"><i class="fa fa-toggle-on"></i>Chamados</a>
                            </li>
                            <li>
                                <a href="exibircadastros.php"><i class="fa fa-toggle-on"></i>Lista de Usuarios</a>
                            </li>
                           
        </nav>
        <!-- /. NAV SIDE  -->
         <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">USUARIOS</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Lista de usuarios
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>MATRICULA</th>
                                                    <th>NOME</th>
                                                    <th>RAMAL</th>
                                                    <th>EMAIL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                listacadastro();    

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
    <!-- /. WRAPPER  -->
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

</form>
</body>
</html>
