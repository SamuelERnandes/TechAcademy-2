 <?php
    $base_url = "http://localhost/projects/imagens/";
    ?>
 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="página de Games,lançamentos do ano com jogos Gratuitos e Pagos">
     <meta name="keywords" content="games,jogos,luta,gameplay,lançamentos, jogatina">

     <title>PlayVerce</title>

     <base href="http://localhost/projects/"> <!-- quando colocar no ar trocar a url-->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/style.css">


     <link rel="shotcut icon" href="imagens/icone.png">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jersey+20&display=swap" rel="stylesheet">

 <body>
     <?php
        $url = "http://localhost/projects/api/games.php";
        $dadosApi = file_get_contents($url);
        $dadosGames = json_decode($dadosApi);

        ?>



     <nav class="navbar navbar-expand-lg fixed-top">
         <div class="container-fluid">
             <a class="navbar-brand" href="home">
                 <img src="imagens/logo.playverce.png" width="150px">
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link " aria-current="page" href="home">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="desenvolvedor">Equipe</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Games
                         </a>
                         <ul class="dropdown-menu">
                             <?php
                                foreach ($dadosGames as $dados) {
                                    echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a></li>";
                                };
                                ?>
                         </ul>
                     </li>

                 </ul>
                 <div class="d-flex">

                     <a href="login" title="Login" class="btn btn-warning">
                         <i class="fa-solid fa-right-to-bracket"></i>
                         Entrar
                     </a>
                     <a href="contato" title="Contato" class="btn btn-warning">
                         <i class="fa-solid fa-user"></i>

                         Contato
                     </a>

                     </a>
                 </div>
             </div>
         </div>
     </nav>

     <main>
         <?php
            $pagina = "home";

            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"] ?? "home";
                $pagina = explode("/", $pagina);
                //print_R($pagina);
                $codigo = $pagina[1] ?? NULL;
                $pagina = $pagina[0] ?? "home";
            }
            $pagina = "pages/{$pagina}.php";
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "pages/erro.php";
            }

            ?>

     </main>





    
<footer>
    <div class="footer-content">
        <img src="imagens/logo.playverce.png" width="150px">
        <p>PlayVerce Company é uma empresa de desenvolvimento de jogos utilizando Engine Construct 3 </p>
        <ul class="sociais">
            <li><a href="https://www.facebook.com/samuel.ernandesdossantos" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="https://www.linkedin.com/in/samuel-ernandes-059903291/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://github.com/SamuelERnandes" target="_blank"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyrigth &copy;2024 PlayVerce Company</p>
        <p>Desenvolvido por - Samuel Ernandes</p>
    </div>
</footer>


     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/fslightbox.js"></script>
     <script src="js/script.js"></script>
 </body>

 </html>