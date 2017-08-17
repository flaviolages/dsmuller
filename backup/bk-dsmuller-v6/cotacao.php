<!DOCTYPE html>
<html lang="pt-br" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>DS Müller Logistica - Serviços</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="Flávio Lages"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.css" rel="stylesheet" type="text/css"/>

        <link href="css/formulario.css" rel="stylesheet" type="text/css"/>


        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>


        <!-- icons -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->


<div class="nv">

            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.php">
                                <img class="logo-img logo-img-main" src="img/logo-ds-muller.jpg" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo-ds-muller.jpg" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child" href="index.php"><i class="fa fa-home mgnv"></i> Inicio</a></li>
                                <li class="nav-item"><a class="nav-item-child at" href="servicos.php"><i class="fa fa-cubes mgnv"></i> Serviços</a></li>
                                <li class="nav-item"><a class="nav-item-child" href="contato.php"><i class="fa fa-envelope-o mgnv"></i> Contato</a></li>
                                <li class="nav-item"><a class="nav-item-child" href="tel:51999130011"><i class="fa fa-phone mgnv"></i> (51)9 9913-0011</a></li>
                                <li class="nav-item"><a class="nav-item-child" href="tel:51999912797"><i class="fa fa-phone mgnv"></i> (51)9 9991-2797</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->



</div>
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="pedido">


        </div>
        <!--========== SLIDER ==========-->


        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">

                  <span class="pedido-h1">Cotação</span>
                    <!-- Contact List -->
                    <div class="col-sm-12 spc">

                      <div class="form-group">
                        <span class="pedido-h2">Origem</span>
                        <div class="col-xs-12 col-sm-6">
                        <form method="post" action="mensagem-cotacao.php">

                        <input type="text" placeholder="CNPJ" class="brd form-first-name form-control" name="origemcnpj">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                        <input type="text" placeholder="Razão Social" class="brd  form-first-name form-control" name="origemrazao">
                        </div>

                      </div>

                      <div class="form-group">
                        <span class="pedido-h2">Destinatário</span>
                        <div class="col-xs-12 col-sm-6">
                        <input type="text" placeholder="CNPJ" class="brd  form-first-name form-control" name="destinocnpj">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                        <input type="text" placeholder="Razão Social" class=" brd form-first-name form-control" name="destinorazao">
                        </div>
                      </div>

                      <div class="form-group">
                        <span class="pedido-h2">Dados</span>
                        <div class="col-xs-4 col-sm-4">
                        <input type="number" placeholder="Volume" class="brd  form-first-name form-control" name="volume">
                        </div>
                        <div class="col-xs-4 col-sm-4">
                        <input type="text" placeholder="Peso" class=" brd form-first-name form-control" name="peso">
                        </div>
                        <div class="col-xs-4 col-sm-4">
                        <input type="number" placeholder="Valor da Nota" class=" brd form-first-name form-control" name="valornota">
                        </div>
                      </div>
                      <div class="form-group">
                        <span class="pedido-h2">Dimensões</span>
                        <div class="col-xs-4 col-sm-4">
                        <input type="text" placeholder="Altura" class="brd  form-first-name form-control" name="altura">
                        </div>
                        <div class="col-xs-4 col-sm-4">
                        <input type="text" placeholder="Largura" class=" brd form-first-name form-control" name="largura">
                        </div>
                        <div class="col-xs-4 col-sm-4">
                        <input type="text" placeholder="Comprimento" class=" brd form-first-name form-control" name="comprimento">
                        </div>
                      </div>
                      <div class="form-group">
                        <span class="pedido-h2">Contato</span>
                        <div class="col-xs-4 col-sm-4">
                        <input type="text" placeholder="Nome" class="brd  form-first-name form-control" name="nome">
                        </div>
                        <div class="col-xs-4 col-sm-4">
                        <input type="text" placeholder="Telefone" class=" brd form-first-name form-control" name="telefone">
                        </div>
                        <div class="col-xs-4 col-sm-4">
                        <input type="e-mail" placeholder="E-mail" class=" brd form-first-name form-control" name="email">
                        </div>
                      </div>

                      <button type="submit" class="bt btn-theme btn-theme-sm btn-base-bg text-uppercase">Cotar</button>
                      </form>


                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Contact List -->







        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-6 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item">DS Müller Logística.<li>

                                <li class="ft">Contato</li>
                                <li><p class="margin-b-0">Alegemiro 51 9-999-9999</p></li>
                                <li><p class="margin-b-0">Jéssica 51 9-999-9999</p></li>

                                <li class="footer-list-item"></li>
                                <li class="ft">Endereço</li>
                                <li><p class="margin-b-0">​Estrada dos Tavares, n 220</p></li>
                                <li><p class="margin-b-0">Bairro Costa do Ipiranga - Gravataí RS</p></li>
                               
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                             <form method="post" action="mensagem.php">
                            <h2 class="color-white">Contato.</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Nome" required id="nome">
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required id="email">
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Telefone" required id="telefone">
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Menssagem" required id="mensagem"></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Enviar</button>
                          </form>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->


            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <p class="margin-b-0">DS Müller Logística.</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0">Todos direitos reservados: <a class="fweight-700" href="http://www.dsmuller.com.br/">dsmuller.com.br</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Topo</a>

        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>


    </body>
    <!-- END BODY -->
</html>
