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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistema Gerenciador</a>
            </div>

            <div class="header-right">
                <a href="login.html" class="btn btn-danger" title="Sair"><i class="fa fa-exclamation-circle fa-2x"></i></a>
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
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Inicio</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Abrir chamado <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="abrirchamado.html"><i class="fa fa-toggle-on"></i>Novo Chamado</a>
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
                         <form role="form" method="POST" action="grava.php" >

                    <div class="form-group row">
                        <div class="col-md-1">                           
                        </div>
                        <div class="col-md-11">                          
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-md-2">
                            <input name="matricula_usuario" placeholder="Matricula" type="text" />
                        </div>
                        <div class="col-md-6">
                            <input name="tombo_equipamento" placeholder="Tombo do equipamento" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                      </div>
                             <div class="form-group">
                                   <textarea type="text" name="descricao" placeholder="Descrição do problema" rows="3"></textarea>
                             </div>
                    </div>
                    <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </form>


                    </div>
                </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2019 Faculdade CDL | Design By : <a href="http://www.binarytheme.com/" target="_blank">Rodrigo Moura </a>
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
    


</body>
</html>
