<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cello Games | Sobre Nós</title>
    <!--Responsividade-->
    <meta name="viewport" content="widht=device-widht,initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery Jogo -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript compilado-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Imagens Rodapé-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Button personalizado-->
    <link href="css/personalizado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include 'nav.php';
  ?>
    <section>
        <div class="container">
            <div class="row">
                <br><br><br>
                <div class="col-md-6 col-lg-4 col text-center py-3 w-auto p-3 ">
                    <img src="img/test-drive.png" />
                    <h4 class="title">Test Drive</h4>
                    <p class="texto">Assim como cada cliente é único, nossos produtos também são. Criamos o site
                        exclusivamente para o seu
                        projeto.</p>
                </div>

                <div class="col-md-6 col-lg-4 col text-center py-3 w-auto p-3 ">
                    <img src=" img/delive.png" />
                    <h4 class="title">Delivery</h4>
                    <p class="texto">Nosso sistema de gestão conta com uma equipe capacitada para os serviços de
                        consultoria
                        especializada
                        em
                        projetos, implementações e administração em banco de dados.</p>
                </div>

                <div class="col-md-6 col-lg-4 col text-center py-3 w-auto p-3 ">
                    <img src="img/manu.png" />
                    <h4 class="title">Manutenção</h4>
                    <p class="texto">Desenvolvimento de sistemas totalmente personalizados para sua empresa e
                        suas
                        necessidades..</p>
                </div>

            </div>
        </div>
    </section>


    <?php 
    include 'rodape.html';
  ?>
</body>