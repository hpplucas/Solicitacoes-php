<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ateneu - Gerencimento de Demandas</title>

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
                                Rodrigo Moura
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
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ABRIR CHAMADO</h1>
                        <h1 class="page-subhead-line">Aqui serão aberto os chamados para registro de pendencias destinadas ao setor de TI.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <form class="">

                    <div class="form-group row">
                        <div class="col-md-1">
                           
                        </div>
                        <div class="col-md-11">
                           
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>MATRICULA</label>
                            <input name="matricula_usuario" placeholder="Matricula" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label>TOMBO</label>
                            <input name="tombo_equipamento" placeholder="Tombo do equipamento" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row">

                      </div>
                             <div class="form-group">
                                <label>DRESCRIÇÃO</label>
                                   <textarea  name="descricao" placeholder="Descrição do problema" rows="3" class="form-control" ></textarea>
                             </div>
                        
                    </div>
                   &nbsp; &nbsp; <button type="submit" class="btn btn-primary">GRAVAR</button></p>
                </form>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2019 | Design By : <a href="http://www.binarytheme.com/" target="_blank">Rodrigo Moura </a>
    </div>
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
