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
     <form>
         <div class=" form-row">
             <div class="form-group col-sm-5">
                 <label for="inputEmail4">Nome Completo</label>
                 <input type="text" name="nome" class="form-control" required id="inputNome"
                     placeholder="Digite seu nome completo">
             </div>
         </div>

         <div class="form-row">
             <div class="form-group col-sm-5">
                 <label for="inputEmail4">Email</label>
                 <input type="email" name="email" class="form-control" required id="inputEmail4"
                     placeholder="Digite seu e-mail">
             </div>
         </div>

         <div class="form-row">
             <div class="form-group col-sm-5">
                 <label for="inputAddress">Endereço</label>
                 <input type="text" name="endereco" class="form-control" required id="inputAddress"
                     placeholder="Digite seu endereço">
             </div>
         </div>

         <div class="form-row">
             <div class="form-group col-sm-5">
                 <label for="inputTel">Telefone</label>
                 <input type="text" name="telefone" class="form-control" required id="inputTel"
                     placeholder="Digite seu endereço">
             </div>
         </div>

         <div class=" form-row">
             <div class="form-group col-sm-5">
                 <label for="inputCity">Cidade</label>
                 <input type="text" name="cidade" class="form-control" required id="inputCity"
                     placeholder="Digite sua cidade">
             </div>
         </div>

         <div class=" form-row">
             <div class="form-group col-sm-5">
                 <label for="inputCPF">CPF</label>
                 <input type="text" name="cpf" class="form-control" required id="cpf" placeholder="Digite seu CPF">
             </div>
         </div>
         <div>
             <button class="button-enviar" type="submit" class="btn btn-primary">Enviar</button>
         </div>
     </form>
     <?php 
    	include 'rodape.html';
 	?>
 </body>