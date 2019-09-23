<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NewProject</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/estilo.css">
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>  

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div id="index" class="container">
           
            <div class="row">
                
                <div class="col-md-12" >
                    
                    <!-- MENU -->                          
                    <nav id="cabecalho" class="navbar-fixed-top navbar-inverse navbar-transparente">

                        <div class="container">    

                        <!-- HEADER -->
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle collapsed" 
                                    data-toggle="collapse" data-target="#barra-navegacao">

                                <span class="sr-only">Alternar navegação</span>
                                <span class="icon-bar"></span><!-- esses 3 spans faz aquele simbolo de quadrado co tres tiras dentro -->
                                <span class="icon-bar"></span><!-- esses 3 spans faz aquele simbolo de quadrado co tres tiras dentro -->
                                <span class="icon-bar"></span><!-- esses 3 spans faz aquele simbolo de quadrado co tres tiras dentro -->

                            </button> <!-- Fim type="button" class="navbar-toggle collapsed" --> 

                            <a href="../../index.php" class="navbar-brand">
                                <span class="logo"> ACADEMIA </span>
                            </a>          

                        </div>  <!-- Fim navbar-header -->

                        <!-- NAVBAR -->
                            <div class="collapse navbar-collapse" id="barra-navegacao">
                                <ul class="nav navbar-nav navbar-right">
                               <!--     <li><a href="">Imagens</a></li>    -->
                                    <li><a href="assets/paginas/cadastro/cadastro.php">Cadastrar</a></li>                      
                                    <li><a href="assets/paginas/entrar/entrar.php">Entrar</a></li>
                                </ul>

                            </div><!-- fim da collapse navbar-collapse -->   

                        </div><!-- fim da div container -->   

                    </nav><!-- Fim id="cabecalho"  -->  
                    <!-- Fim do MENU -->
                    
                    
                    <!-- CORPO -->  
                    
                    <!-- Fim do CORPO -->
                    

                    <!-- RODAPE -->                   

                    <div class="row">

                        <div class="footer col-md-12" >

                            <div class="col-md-8" id="email_rodape">
                                <h2>Email: academia@academia.com.br</h2>
                            </div>

                            <div>                   
                                <ul class="nav col-md-4">
                                    <li class="iten-rede-social"><a href="#"><img src="assets/img/facebook.png"  ></a></li>
                                    <li class="iten-rede-social"><a href="#"><img src="assets/img/twitter.png" ></a></li>
                                    <li class="iten-rede-social"><a href="#"><img src="assets/img/instagram.png" ></a></li>
                                </ul>                   
                            </div>  

                        </div>
                    </div>
                                      
                    <!-- Fim do RODAPE -->                     
                     
                </div><!--Fim class="col-md-12" --> 
                                           
            </div> <!-- Fim class="row" -->    
             
        </div> <!--Fim id="geral_index" class="container" -->
    </body>
</html>
