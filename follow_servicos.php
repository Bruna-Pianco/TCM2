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
</head>

<body>
    <?php
    include 'nav.php';
  ?>
    <section class="servicos">
        <div>
            <img src=" img/test-drive.png" />
            <h3>Teste Drive</h3>
            <p>Assim como cada cliente é único, nossos produtos também são. Criamos o site
                exclusivamente para o seu
                projeto.</p>
        </div>
        <div>
            <img src="img/delive.png" />
            <h3>Delivery</h3>
            <p>Nosso sistema de gestão conta com uma equipe capacitada para os serviços de consultoria
                especializada
                em
                projetos, implementações e administração em banco de dados.</p>
        </div>
        <div>
            <img src="img /manu.png" />
            <h3>Manutenção</h3>
            <p>Desenvolvimento de sistemas totalmente personalizados para sua empresa e suas necessidades.</p>
        </div>
    </section>
    <?php 
    include 'rodape.html';
  ?>
</body>