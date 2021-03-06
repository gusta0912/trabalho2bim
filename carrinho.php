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

          <h1>Carrinho de compras</h1> 

  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>
          

<?php

  session_start();
  if(!isset($_SESSION['itens']))
  {
  	$_SESSION['itens'] = array();
  }

  if(isset($_GET['add']) && $_GET['add'] == "carrinho")
  {
  	/*Adiciona ao carrinho*/
  	$idProduto = $_GET['id'];
  	if(!isset($_SESSION['itens'] [$idProduto]))
  	{
  		$_SESSION['itens'] [$idProduto] = 1;
  	}
  	else{
  		$_SESSION['itens'] [$idProduto] += 1;
  	}
  }
  /*Exibe o Carrinho*/
  if(count($_SESSION['itens']) == 0){
  	echo 'Carrinho Vazio<br><a href="index.php">Adicionar itens</a>';
  }else{

  	$_SESSION['dados'] = array();

  	$conexao = new PDO('mysql:host=localhost;dbname=trabalho2b',"root","");
    foreach($_SESSION['itens'] as $idProduto => $quantidade)
  	{
    $select = $conexao->prepare("SELECT * FROM produtos WHERE id=?");
    $select->bindParam(1,$idProduto);
    $select->execute();
    $produtos = $select->fetchAll();
    $total = $quantidade * $produtos[0] ["preco"];
    echo 
       'Nome:  '.$produtos[0]["nome"]. '<br/>
       Preço: '. number_format($produtos[0]["preco"],2,",","."). '<br/>
       Quantidade: '.$quantidade.'<br/>
       Total: '.number_format($total,2,",",".").'<br/>
       <a href="remover.php?remover=carrinho&id='.$idProduto.'">Remover</a>
       <hr/><br><br><br>


       ';

       array_push(
       	$_SESSION['dados'],
       array(
       	'id_produto' => $idProduto,
       	'quantidade' => $produtos[0]['quantidade'],
       	'preco' => $produtos[0] ['preco'],
       	'total' => $total
 )
   );//ArrayPush
      
    }
    

    echo'<a href="index.php">Adicionar mais prudutos</a><br>';

    echo'<a href="finalizar.php">Finalizar Pedido</a>';
  }

 ?>
 </div>
  </div>  
</body>
</html>