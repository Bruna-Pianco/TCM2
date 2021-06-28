<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cello Games | Error</title>
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
    <link rel="stylesheet" href="../css/personalizado.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="sortcut icon" href="img/logotipo.png" type="image/gif" />


    <!--Referência para colocar ICON no rodapé-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    
        include 'conexao.php';
    	include 'nav.php';
  	?>

    <section class="email">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-lg-12 text-center py-3 w-auto p-3">
                    <br><br><br>
                    <img src=" img/email-cadastrado.jpg" alt="e-mail Cadastrado" style="width: 250px;">
                    <h4>We have already located this email in our database. <br>
                        Please wait for our contact! </h4>
                    <br> <button type="button" class="btn btn-outline-dark
                button-enviar"> <i class="fas fa-undo-alt"></i><a href="index-english.php">Back to Home</button>
                </div>
            </div>
        </div>
    </section>

    <?php
    
    include 'rodape.html';

  ?>
    <script src=" https://kit.fontawesome.com/43d8bab044.js" crossorigin="anonymous"></script>
</body>

</html>