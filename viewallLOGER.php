<?php
    include 'connect.php';
    include 'checkLogin.php';
    include 'checkAdmin.php';
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


  <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action=""> 

          <h1>Logging</h1> 

  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>

<table border='1'>
    <tr>
        <th>
            ID LOGIN
        </th>
        <th>
            DATA LOGIN
        </th>
    </tr>

<?php
$sq="select * from logging";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idLogging']?>
        </td>
        <td>
            <?php echo $f['dateLogging']?>
        </td>
    </tr>
    <?php
}
?>
<a href="home1.php">Ir para o home</a>


 </div>
  </div>  
</body>
</html>