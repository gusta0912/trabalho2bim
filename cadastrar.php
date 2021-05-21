 <?php session_start();

$con=  mysqli_connect("localhost","root","","trabalho2b")

?>
 <?php

if(isset($_POST['sub'])){
    $t=$_POST['emailCliente'];
    $u=$_POST['senhaCliente'];
   
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }

    $sqlInsertcadastro="insert into cadastrar(emailCliente, senhaCliente, image) values ('$t','$u','$img')";
   
    mysqli_query($con, $sqlInsertcadastro);
}
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

          <h1>Cadastro de empresas</h1> 

  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>
          
           <p> 
            <label for="nomecliente">Nome do dono</label>
            <input id="nomecliente" name="emailCliente" required="required" type="text" placeholder="ex. seu nome" /> 
          </p>

           <p> 
            <label for="empresa">Empresa</label>
            <input id="empresa" name="senhaCliente" required="required" type="text" placeholder="ex. nome da sua empresa"/>
          </p>
       <p>
          <tr>
                    <td>
                        Image
                        <input type="file" name="f1">
                    </td>
                </tr>
       </p>    
         
           
          
          
          <input type="submit" value="submit" name="sub">


              
           
          
           
          
    

              
           
          
           
        
    
        </form>
      </div>
    </div>
  </div>  
</body>
</html>