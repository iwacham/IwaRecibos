<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IwaRecibos - a project of Tiago Iwamoto</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">IwaRecibos</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><small>Gerenciador de recibos</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="ScreenShots/main.png" alt="">
            </div>

            <div class="col-md-4">
                <h3>Sobre o projeto</h3>
                <p>Software gerência recibos de forma simples e direta, oferecendo uma interface agradável e intuitiva. Gratuito e de qualidade. Alem de oferecer modelos de recibos E gerar relatórios.</p>
                <h3>Detalhes do projeto</h3>
                <ul>
                    <li>Gratuito</li>
                    <li>Multiplataforma</li>
                    <li>Não precisa instalar</li>
                    <li>Leve</li>
                    <li>Interface agradável</li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <a href="https://app.box.com/s/98mot5yhppp6x8kzt0xeot49ggusrpdi"><button type="button" class="btn btn-success">DOWNLOAD</button></a>
                131 Downloads
                <?php
                  $arquivo = "contador.txt";
                  $handle = fopen($arquivo, 'r+');
                  $data = fread($handle, 512);
                  $contador = $data + 1;
                  echo $contador + "Downloads";
                  fseek($handle, 0);
                  fwrite($handle, $contador);
                  fclose($handle);
                ?>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Outras Imagens do projeto</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ScreenShots/ClienteForm.png" data-toggle="lightbox">
                    <img class="img-responsive portfolio-item img-fluid" src="ScreenShots/ClienteForm.png" height="300px" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ScreenShots/ConfigForm.png" data-toggle="lightbox">
                    <img class="img-responsive portfolio-item img-fluid" src="ScreenShots/ConfigForm.png" height="300px" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ScreenShots/Principal.png" data-toggle="lightbox">
                    <img class="img-responsive portfolio-item img-fluid" src="ScreenShots/Principal.png" height="300px" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ScreenShots/ReciboForm.png" data-toggle="lightbox">
                    <img class="img-responsive portfolio-item img-fluid" src="ScreenShots/ReciboForm.png" height="300px" alt="">
                </a>
            </div>
            
           <div class="col-sm-3 col-xs-6">
                <a href="ScreenShots/RelatorioForm.png" data-toggle="lightbox">
                    <img class="img-responsive portfolio-item img-fluid" src="ScreenShots/RelatorioForm.png" height="300px" alt="">
                </a>
            </div>  
            
             <div class="col-sm-3 col-xs-6">
                <a href="ScreenShots/RelatorioGeradoForm.png" data-toggle="lightbox">
                    <img class="img-responsive portfolio-item img-fluid" src="ScreenShots/RelatorioGeradoForm.png" height="300px" alt="">
                </a>
            </div>
          

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; IwaRecibos 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.js"></script>
    
    <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    </script>

</body>

</html>
