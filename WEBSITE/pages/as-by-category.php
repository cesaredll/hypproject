<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      

    <title>TIM Website</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
	<script src="/js/as-by-category.js"></script>  
      
  </head>

    <body>
<!-- Navbar -->   
<nav class="navbar navbar-default" role="navigation">

  <!--Logo e pulsante per barra ridimensionata -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Show more</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/index.html"><img src="/img/logo_tim.png"></a>
  </div>

  <!--Elementi della barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Devices<span class="caret"></span></a>
                    <ul class="dropdown-menu ">
                        <li><a href="/pages/all-devices.html">All Devices</a></li>
                        <li><a href="/pages/device-category.html">Categories</a></li>
                        <li><a href="/pages/device-promotions.html">Promotions</a></li>
                    </ul>
            </li>
            <li class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Smart Life<span class="caret"></span></a>
                    <ul class="dropdown-menu ">
                        <li><a href="/pages/all-smart-life.html">All Smart Life</a></li>
                        <li><a href="/pages/smartlife-categories.html">Categories</a></li>
                        <li><a>Promotions</a></li>
                    </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Assistance Service<span class="caret"></span></a>
                    <ul class="dropdown-menu ">
                        <li><a href="/pages/all-as.html">All Assistance Services</a></li>
                        <li><a href="/pages/as-categories.html">Categories</a></li>
                        <li><a href="/pages/highlights.html">Highlights</a></li>
                    </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/who-we-are.html">Who we are</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" >The Group</a>
            </li>
        </ul>
  </div>

</nav>
    
    <!-- chiusura navbar --> 
        
<!--Passaggio parametro a funzione in JavaScript-->    
<?php
    $tipo = $_GET['tipo'];
?>    
    
<script> AScate("<?php echo $tipo;?>")</script>
<!--Fine passaggio parametro a funzione in JavaScript--> 
        
    <!--Inizio barra introduttiva titolo-->
        
        <div id="all-as" class="jumbotron">
            <div class="container">
                <h2><?php echo $tipo;?></h2>
            </div>
        </div>
        
    <!--Fine Barra introduttiva titolo-->
        
<div class="container" id="ASbyCAT">
 <!--   <div col-lg-6 col-sx-11>
        <div id="as-blocchi">
            <div class="as-blocco blocco" id="blocco1">

                <h3>Fisso</h3>
                <a href="/pages/as.html"><h5><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Activation house line</h5></a>

                <a href="/pages/as.html"><h5><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Relocation</h5></a>

                <a href="/pages/as.html"><h5><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Turn offline services</h5></a>

            </div>  

            <div class="as-blocco blocco">    
                <h3>Mobile</h3>
                <h5><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>All about your SIM</h5>

                <h5><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Activation house line</h5>

                <h5><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>All about your SIM</h5>
            </div>
        </div>
    </div>
    
    <div col-lg-6 col-sx-11>
    
    </div> chiusura container-->
</div>  
      
    <footer class="footer">
      <div class="container">
        <ol class="breadcrumb">
            
            <li><a href="/pages/as-categories.html">A.S. by cat</a></li>
            <li class="active"><?php echo $tipo;?></li>
        </ol>
        <p class="text-muted">&copy; Tim Company 2016</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="/js/bootstrap.min.js"></script>
    
    
    
  </body>
</html>
