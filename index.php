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

          <h1>Cadastro de empresas</h1> 

  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>
<?php

   $conexao = new PDO('mysql:host=localhost;dbname=trabalho2b',"root","");

   $select = $conexao->prepare("SELECT * FROM produtos");
   $select->execute();
   $fetch = $select->fetchAll();

   foreach($fetch as $produto){

   	echo 'Nome do produto: '.$produto['nome'].' ; Quantidadade: '.$produto['quantidade'].'
            ; Preço: R$ '.number_format($produto['preco'],2,",",".").'
   	      <a href="carrinho.php?add=carrinho&id='.$produto['id'].'">Adicionar ao carrinho</a>
   	      <br/>';

   }

?>

</div>
  </div>  
</body>
</html>