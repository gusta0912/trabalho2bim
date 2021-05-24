<?php
    include 'connect.php';
    include 'checkLogin.php';

    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

?>

  
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

       <div id="cadastro">

<form method="POST" enctype="multipart/form-data">

<h1>Bem vindo</h1>
  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>
<table>
    <tr>
        <td>
            <b>Nome</b>
        </td><td>
            
<?php echo $f['name'];?>
            </td>
    </tr>
    <tr>
    <td> <b>Email</b></td>
    
    <td>
            
<?php
echo $f['username'];?>
        </td></tr>
<tr><td> <b>Senha</b></td>
    <td>
<?php
echo $f['password']."<br>";?>
    </td></tr>
  <tr><td> <b>Cidade</b> </td>   <td>           
 <?php
 echo $f['city']."<br>";?></td></tr>
  <tr>
      <td><b>Genero  </b></td>
      <td><?php
echo $f['gender']."<br>";?></td>
  </tr>
  <tr><td> <b>Foto</b></td><td>

 <img src="<?php
echo $f['image'];?>" width="100px" height="100px">
</td>

</tr>
</table>
<div class="botao">



<?php
    if($_SESSION['profile']=='Admin'){
        echo "
            <a href='edit.php'><b>Edit</b></a>

<a href='delete.php'><b>Delete</b></a>
        ";
    }else{
        echo "
            <a href=''>Você não ADM</a>
        ";
    }
?>
<br><br>
<a href="home1.php"><b>Ir para a pagina principal</b></a>
<br><br>
<a href="logging.php"><b>Clique aqui para resgistar o seu logging</b></a>
</div>
</div>
</div>
</div>

    </body>
</html>