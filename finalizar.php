<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>


     <a class="links" id="paralogin"></a>
     
    <div class="content">    


  <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action=""> 

          <h1>Compra Finalizada com sucesso!!!</h1> 

  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>
<a href="home1.php"><h2>Voltar para a pagina home</h2></a>
<?php
 session_start();

 foreach($_SESSION['dados'] as $produtos){
 	$conexao = new PDO('mysql:host=localhost;dbname=trabalho2b',"root","");
 	$insert = $conexao->prepare("
 		INSERT INTO pedidos () VALUES (NULL,?,?,?,?)");
 	$insert->bindParam(1,$produtos['id_produto']);
 	$insert->bindParam(2,$produtos['quantidade']);
 	$insert->bindParam(3,$produtos['preco']);
 	$insert->bindParam(4,$produtos['total']);
 	$insert->execute();

 }
 ?>
 </div>
  </div>  
</body>
</html>