 <head>
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

     <script src="jquery.mask.js"></script>
     <script>
     $(document).ready(function() {
         $("#cpf").mask("000 000 000-00");
     });
     </script>
 </head>

 <body id="body">
     <?php
    	include 'nav.php';
  	?>
     <section class="col-sm-5 localizacao">
         <tr>
             <header>
         <tr>
             <td>
                 <h4>Localização Loja São Paulo</h4>

                 <p>R. Guaipá, 678 - Vila Leopoldina</br>
                     CEP: 05089-000</br>
                     Horário de funcionamento:
                     Segunda a Sábado: das 9h às 16h </br>
                     Domingo: Fechado
                 </p>
             </td>
         </tr>
         </header>
         <tr>
             <td> <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3222944873924!2d-46.73081678538497!3d-23.520907765983935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8c1d371ec31%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1605654207441!5m2!1spt-BR!2sbr"
                     width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                     tabindex="0"></iframe></td>
         </tr>
     </section>
     <form>
         <div class=" form-row">
             <div class="form-group col-sm-8">
                 <label for="inputEmail4">Nome Completo</label>
                 <input type="text" name="nome" class="form-control" required id="inputNome"
                     placeholder="Digite seu nome completo">
             </div>
         </div>

         <div class="form-row">
             <div class="form-group col-sm-8">
                 <label for="inputEmail4">Email</label>
                 <input type="email" name="email" class="form-control" required id="inputEmail4"
                     placeholder="Digite seu e-mail">
             </div>
         </div>

         <div class="form-row">
             <div class="form-group col-sm-8">
                 <label for="inputAddress">Endereço</label>
                 <input type="text" name="endereco" class="form-control" required id="inputAddress"
                     placeholder="Digite seu endereço">
             </div>
         </div>

         <div class="form-row">
             <div class="form-group col-sm-8">
                 <label for="inputTel">Telefone</label>
                 <input type="text" name="telefone" class="form-control" required id="inputTel"
                     placeholder="Digite seu telefone">
             </div>
         </div>

         <div class=" form-row">
             <div class="form-group col-sm-8">
                 <label for="inputCity">Cidade</label>
                 <input type="text" name="cidade" class="form-control" required id="inputCity"
                     placeholder="Digite sua cidade">
             </div>
         </div>

         <div class=" form-row">
             <div class="form-group col-sm-8">
                 <label for="inputCPF">CPF</label>
                 <input type="text" name="cpf" class="form-control" required id="cpf" placeholder="Digite seu CPF">
             </div>
         </div>
         <div>
             <button type="submit" class="btn btn-dark
                button-enviar">Enviar Informações</button>
         </div>
     </form>

     <?php 
    	include 'rodape.html';
 	?>
     <script src="https://kit.fontawesome.com/43d8bab044.js" crossorigin="anonymous"></script>
 </body>