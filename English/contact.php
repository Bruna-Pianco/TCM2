<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cello Games | Contact </title>
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

    <script src="jquery.mask.js"></script>
    <script>
    $(document).ready(function() {
        $("#cpf").mask("000 000 000-00");
    });

    $(document).ready(function() {
        $("#inputTel").mask("(00) 00000-0000");
    });
    </script>
</head>

<body id="body">
    <?php
    	include 'nav.php';
  	?>
    <section class="col-sm-6 localizacao">
        <img src="img/contato.png" alt="Ilustração Contato"><br>
        <div>
            <h4><b>Store Location São Paulo</b></h4>

            <p>R. Guaipá, 678 - Vila Leopoldina</br>
                CEP: 05089-000</br>
                Bussiness hours:
                Monday - Saturday: 9h - 16h </br>
                Sunday: Closed
            </p><br>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3222944873924!2d-46.73081678538497!3d-23.520907765983935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8c1d371ec31%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1605654207441!5m2!1spt-BR!2sbr"
            width="600" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe></td>
    </section>

    <form method="post" action="insertContato.php">

        <div class=" form-row">
            <div class="form-group col-sm-8">
                <label for="inputEmail4">Full Name</label>
                <input type="text" name="nome" class="form-control" required id="inputNome"
                    placeholder="Type it full name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-8">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" required id="inputEmail4"
                    placeholder="Type it e-mail">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-8">
                <label for="inputAddress">Address</label>
                <input type="text" name="endereco" class="form-control" required id="inputAddress"
                    placeholder="type it address">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-8">
                <label for="inputTel">Telephone</label>
                <input type="text" name="telefone" class="form-control" required id="inputTel"
                    placeholder="type it telephone">
            </div>
        </div>

        <div class=" form-row">
            <div class="form-group col-sm-8">
                <label for="inputCity">City</label>
                <input type="text" name="cidade" class="form-control" required id="inputCity"
                    placeholder="type it city">
            </div>
        </div>

        <div class=" form-row">
            <div class="form-group col-sm-8">
                <label for="inputCPF">Document</label>
                <input type="text" name="cpf" class="form-control" required id="cpf" placeholder="Type it document">
            </div>
        </div>
        <div class=" form-row">
            <div class="form-group col-sm-8">
                <label for="inputProposta">Proposal/Comment</label><br /><br />
                <textarea cols="60" rows="10" name="proposta" placeholder="Type it Proposal/Comment"></textarea>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-dark
                button-enviar">Submit Information
            </button><br /><br />
        </div>
    </form>

    <?php 
    	include 'rodape.html';
 	?>
    <script src="https://kit.fontawesome.com/43d8bab044.js" crossorigin="anonymous"></script>
</body>