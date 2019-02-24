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
   
	<script src="/js/sl-by-category.js"></script>

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
              <a class="nav-link" href="/pages/the-group.html">The Group</a>
            </li>
        </ul>
  </div>

</nav>
    
<?php 
    $nome = $_GET['nome'];
?>

<script> slBYcategory('<?php echo $nome;?>')</script>
<!--Inizio barra introduttiva titolo-->
        
        <div id="device-cat" class="jumbotron">
            <div class="container" class="img-responsive" id="titolo">
                <h2>Smart Life Category</h2>
            </div>
        </div>
<!--Fine Barra introduttiva titolo-->
<div class="container">
    <div class="row " id="contenuto">
            
            <div class="col-md-12 col-sx-11" id="info">
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id lacus accumsan, molestie lacus eget, dapibus nisi. Sed eget quam ut lacus luctus consequat. Curabitur non ligula mattis, convallis risus vel, sollicitudin urna. Curabitur lobortis quam a vestibulum vulputate. Integer risus urna, venenatis vel dictum nec, commodo nec augue. Maecenas eleifend erat ligula, non placerat ante euismod in. Vestibulum sollicitudin, est nec ornare tristique, justo libero accumsan massa, sed maximus purus mi eu justo. Nam varius bibendum velit ac ultricies. Curabitur et est sollicitudin, laoreet nunc eu, dignissim risus. Phasellus et velit ut orci scelerisque aliquam. Mauris eget lacus dolor. Praesent sodales varius mattis. Aenean nunc dolor, gravida eu risus nec, imperdiet tincidunt felis. Curabitur tellus enim, rhoncus a semper ac, dignissim ut arcu.</p>
            
            </div>
        
            <div class="item-smart col-md-4 portfolio-item" >
                <a href="#">
                    <img class="img-responsive" src="" alt="">
                </a>
                <h5>
                    <a href="#"></a>
                </h5>
                <p class="prezzo"></p>
                <a href="#" class="btn btn-primary" role="button">View More</a>
           </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row --> 
    </div> <!-- chiuso container -->

      <footer class="footer">
      <div class="container">
        <ol class="breadcrumb">
            <li class="active"><a href="/pages/smartlife-categories.html">Smart Life Categories</a></li>
            <li class="active"><?php echo $nome?></li>
          </ol>
        <p class="text-muted">&copy; Tim Company 2016</p>
      </div>
    </footer>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>window.jQuery || document.write("<script src='js/jquery.min.js'><\/script>")</script>
    <script src="/js/bootstrap.min.js"></script>
    
    
  </body>
</html>
