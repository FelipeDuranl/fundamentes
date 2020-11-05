<?php 
require 'conecta.php';
session_start();if ((!isset($_SESSION['codaluno'])==true)and (!isset($_SESSION['nomealuno'])==true)and (!isset($_SESSION['email'])==true)) {
  
unset($_SESSION['codaluno']);
unset($_SESSION['nomealuno']);
unset($_SESSION['email']);
header('Location: login.html');


} ?>
<!DOCTYPE html>
<html lang="PT-BR">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Fundamentes</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/adm.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Cadastros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cadastro.html">Inserir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Deletar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Atualizar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.html">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <sectionid id="home">
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong></strong>
            </h1>
            <hr>
          </div>
           <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Área administrativa, aqui o administrador pode fazer alterações nos cadastros</p>
          
            <?php  
      $consulta = mysqli_query($conexao, "SELECT * FROM administrador");
      
              ?>
              <div class="tabela">
              <div class = "containera">
                 <h2 class="titulo" > Administradores</h2>
                    <table>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Email</th>
                            <th></th> 
                            <th></th>

                        </tr>
                                <?php
                                    while($dados = mysqli_fetch_assoc($consulta)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $dados['codadm'] . "<br>"; ?>
                                    </td>

                                    <td>
                                        <?php echo $dados['nomeadm'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['login'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['email'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <a href="exclui.php"> Remover </a>
                                    </td>
                                    <td>
                                        <a href="alterar.php"> Alterar </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                    ?>

                    </table>
                </div>
                  
                   <?php  
      $consultaa = mysqli_query($conexao, "SELECT * FROM aluno");
      ?>
                 <div class = "conteinera">
                  <h2 class="titulo">Alunos</h2>
                    <table>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                           

                        </tr>
                                <?php
                                    while($dados = mysqli_fetch_assoc($consultaa)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $dados['codaluno'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['nomealuno'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['login'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['email'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <a href="exclui.php"> Remover </a>
                                    </td>
                                    <td>
                                        <a href="alterar.php"> Alterar </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                    ?>

                    </table>
                </div>

                <?php  
      $consult = mysqli_query($conexao, "SELECT * FROM professsor");
      
              ?>
              <div class = "containera">
                 <h2 class="titulo" > Professores</h2>
                    <table>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>

                        </tr>
                                <?php
                                    while($dados = mysqli_fetch_assoc($consult)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $dados['codpro'] . "<br>"; ?>
                                    </td>

                                    <td>
                                        <?php echo $dados['nomepro'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['login'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['email'] . "<br>"; ?>
                                    </td>
                                    <td>
                                        <a href="exclui.php"> Remover </a>
                                    </td>
                                    <td>
                                        <a href="alterar.php"> Alterar </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                    ?>

                    </table>
                </div>
            </div>
                  

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Fale Conosco!</h2>
            <hr class="my-4">
            <p class="mb-5">Tem alguma dúvida sobre nosso projeto ou atividades? Entre em contato e vamos esclarecer!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">fundamentes@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>