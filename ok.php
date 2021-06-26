<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cello Games | E-mail Enviado</title>
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
    <link rel="sortcut icon" href="img/logotipo.png" type="image/gif" />
</head>

<body>
    <?php
    
        include 'conexao.php';
    	include 'nav.php';
  	?>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-lg-12 text-center py-3 w-auto p-3">
                    <img src=" img/msg-enviado.gif" alt="e-mail enviado!">
                    <h4>Mensagem enviada com sucesso!</h4>
                    <br> <button type="button" class="btn btn-outline-dark
                button-enviar"> <i class="fas fa-envelope"></i><a href="index.php">Voltar para Home</button>
                </div>
            </div>
        </div>
    </section>


    <?php
    
    include 'rodape.html';

  ?>
    <script src=" https://kit.fontawesome.com/43d8bab044.js" crossorigin="anonymous"></script>
</body>