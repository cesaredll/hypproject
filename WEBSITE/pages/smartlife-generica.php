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
    <script src="/js/sl-generica.js"></script>  
      
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

<!--Passaggio parametro a funzione in JavaScript-->    
<?php
    $nome = $_GET['nome'];
    $tipo = $_GET['tipo'];
    if($nome=="TIMreading"){
        $categoriaLink = "/pages/tv-entert.html";
    }else if($nome=="Transport"){
        $categoriaLink = "/pages/personal-serv.html";
    }else{
        $categoriaLink = "/pages/smartlife-by-category.php?nome=$tipo";
    }
?>    
    
<script> SLgenerica('<?php echo $nome;?>')</script>
<!--Fine passaggio parametro a funzione in JavaScript-->         
        
    
    <div id="Slgen1">
        
    <!-- SLgen1
        <div id="all-smart" class="jumbotron">
            <div class="container">
                <h2>TIMreading </h2>
            </div>
        </div>
    -->
        
    </div>
    

    
      
    <!--Inizio pulsanti Categorie-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sx-11 box" id="Slgen2">
                         
                    <!-- SLgen2
                    <h3>Description</h3>
                    <p>You want to be informed by the early morning hours? As I flip through TIM Digital offer you can read your favorite newspaper every day on your PC, tablet or smartphone. The best information is always with you.
 
                    Choose from the main Italian newspapers full of attachments and local editions: Corriere della Sera, La Repubblica, Il Messaggero, La Gazzetta dello Sport, La Stampa, Il Mattino, Il Gazzettino, Il Corriere Adriatico, Il Nuovo Quotidiano di Puglia, The Nation , Il Resto del Carlino and the Day.

                    And with TIM purchases credit card and the first month is free!</p>
                    
                    OFFER DETAILS & RESTRICTIONS
                    All prices include taxes.
                    Flip through the digital de la Repubblica, Corriere della Sera, Il Messaggero, Il Mattino, La Stampa, Il Gazzettino, La Gazzetta dello Sport, the Corriere Adriatico, Il Nuovo Quotidiano di Puglia, La Nazione, Il Resto del Carlino, Day, are activated by TIM rechargeable customers by direct debit from your credit card.
                    The accepted credit cards are those of VISA, MASTERCARD, AMEX; They are not accepted cards Prepaid credit.
                    All flip through digital offers are proposed in the monthly subscription automatically renewed, unless deactivation by the customer.
                    You can turn off the offer at any time, free of charge by calling Customer Service or by accessing the section 119 MyTIM Site Mobile.
                    The monthly subscription to the daily starts from the date of activation of the offer. The customer must click on the link in the SMS confirming activation of the offer and define the credentials to browse the newspaper on the site or on the App of the head ..
                    You 'can turn the leaf through service even if the line is included in the Black List for value-added services.
                    The flip through smartphones is only available for some titles. Consult devices compatible with each newspaper on timreading.it 
                    The offer will be activated within a maximum of 48 hours of request. The validity of the offer is confirmed automatically every 30 days.
                    -->
                </div>
                
                <div class="col-md-6 col-xs-12 bottone">
                    <div id="Sl-link1">
                        <!-- SLgen2
                        <a href="/pages/tv-entert.html" id="link1" type="button" class="btn btn-primary "><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Return to category</a>
                        -->
                    </div>
                    
                    <div id="Sl-link2">
                        <!-- SLgen2
                        <a href="/pages/smart-faq.html" id="link2" type="button" class="btn btn-primary "><span class="glyphicon  glyphicon-question-sign" aria-hidden="true"></span>Go to FAQ</a>
                        -->
                    </div>
                </div>
                
                <div class="col-md-6 col-sx-10 box" id="box2">
                    <div id="Slgen3">
                        <!-- SLgen3
                        <h3>How to activate</h3>
                        <p>
                            You can enable online offer or at the Shops TIM.
                            The offer is activated on your number of rechargeable phone at most within 48 hours of request and provides free activation and the first month free.

                            After receiving the confirmation SMS activation of the offer on the SIM to benefit from the service you will need to flip through:

                            complete the activation by clicking on the link in the SMS confirming the activation
                            establish your credentials (username and password) to flip through the digital
                            download the application to the head choice or connect to the web site / tablet / smartphone * and enter in your login credentials

                            * The flip through smartphones is only available for some titles. Discover devices compatible with each newspaper on timreading.it
                            </p>
                            <h4 class="prezzo-smart">19.90$/month</h4>
                            -->
                    </div>
                </div>
                
            </div><!--chiuso row-->
        <div class="row">   
            <div class="col-md-12 col-sx-11 dev-rel">
                <div id="Slgen4">
                    <!-- SLgen4
                    <h4>Related Devices</h4>
                    <div id="blocco-img" >
                         <img class="img-responsive" src="/img/device/iphone6s.png">
                         <img class=" img-responsive" src="/img/device/iphone6s.png">
                         <img class="img-responsive" src="/img/device/iphone6s.png">
                    </div>
                    -->
                </div>
            </div>
                
        </div>
    </div> <!--chiuso container-->
        
        
      
    <footer class="footer">
      <div class="container">
        <ol class="breadcrumb">
            
            <li><a href="/pages/smartlife-categories.html">S.L. Categories</a></li>
            <li><a href="<?php echo $categoriaLink?>"><?php echo $tipo?></a></li>
            <li class="active"><?php echo $nome?></li>
            
            
          </ol>
        <p class="text-muted">&copy; Tim Company 2016</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery.min.js'><\/script>")</script>
    <script src="/js/bootstrap.min.js"></script>
    
    
  </body>
</html>
