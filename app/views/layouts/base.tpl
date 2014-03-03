<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{Router::assets('/img/images.jpg')}">

    <title>{block name="title"}{/block}</title>

    <!-- Bootstrap core CSS -->
    <link href="{Router::assets('/css/bootstrap.min.css')}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {block name="css"}

    {/block}

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <!--encabezado -->
    <div class="row">
      <div class="col-lg-1" align="left"></div>
      <div class="col-lg-2">
        <img src="{Router::assets('/img/images.jpg')}">
      </div>
      <div class="col-lg-5" align="left">
        <br>
        <br>
        <h1> INMOBILIARIA </h1>
      </div>
      <div class="col-lg-2" align="right">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/inmobiliaria/index.php">Home</a></li>
                <li><a href="/inmobiliaria/index.php/login">Login</a></li>
              </ul>
	      </div>
      <div class="col-lg-2" align="right"></div>
    </div>

    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Housing<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/inmobiliaria/index.php/housingForSale">Sale</a></li>
                    <li><a href="/inmobiliaria/index.php/housingForRental">Rental</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Departaments <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/inmobiliaria/index.php/departamentForSale">Sale</a></li>
                    <li><a href="/inmobiliaria/index.php/departamentForRental">Rental</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fields<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/inmobiliaria/index.php/fieldForSale">Sale</a></li>
                    <li><a href="/inmobiliaria/index.php/fieldForRental">Rental</a></li>
                  </ul>
                </li>
             </ul>
             <ul class="nav navbar-nav pull-right">
             	<li><a href="/inmobiliaria/index.php/search"><span class="glyphicon glyphicon-search"></span>Search</a></li>
			</ul>
            </div>
          </div>
        </div>

      </div>
    </div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container t>
>
o center all the content. -->

    <div class="container marketing">

    {block name="body"}

    {/block}
     
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="/inmobiliaria/index.php/privacy">Privacy</a> &middot; <a href="/inmobiliaria/index.php/terms">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{Router::assets('/js/bootstrap.min.js')}"></script>
    <script src="{Router::assets('/js/docs.min.js')}"></script>
  </body>