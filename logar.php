<?php

// Conexão com banco de dados 
include'connect.php';

if(isset($_POST['sub'])){
    $u=$_POST['name'];
    $p=$_POST['username'];
    $s= "select * from reg where name='$u' and username= '$p'";   
    $qu= mysqli_query($con, $s);
    if(mysqli_num_rows($qu)>0){
        $f= mysqli_fetch_assoc($qu);
        $_SESSION['id']=$f['id'];
        header ('location:perfil.php');
    }
   else{
       echo 'username or password does not exist';
   }
  
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
    


     <a class="links" id="paralogin"></a>
     
    <div class="content">  
    <!--FORMULÁRIO DE LOGIN-->


      <div id="login">
        <form method="post" action="home.php"> 
          <h1>Login</h1> 

          <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>
          <p> 
            <label for="nome_login">Seu email</label>
            <input id="nome_login" name="name" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="email_login" name="username" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" name="sub" value="Logar"  />          
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="reg.php">Cadastre-se</a>
          </p>
           

        </form>
      </div>