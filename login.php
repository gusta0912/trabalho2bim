<?php

// Conexão com banco de dados 
include'connect.php';

if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "
    select * from reg as r
    INNER join profile_reg as p on p.idProfile = r.fk_idProfile 
    where username='$u' and password= '$p'
    ";   
    $qu= mysqli_query($con, $s);
   
    if(mysqli_num_rows($qu)>0){
        $f= mysqli_fetch_assoc($qu);
        $_SESSION['id']=$f['id'];
        $_SESSION['profile']=$f['nameProfile'];
        header ('location:home.php');
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
    <a class="links" id="paracadastro"></a>


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
                        <b>EMAIL</b>
                        <input type="text" name="user">
                    </p>
                    <p>
                        <b>SENHA</b>
                       
                        <input type="password" name="pass">
                   </p>
                   <p>
                        <input type="submit" name="sub" value="Entrar">
                    </p>

                

                <tr>
                    <td>

                        <a href="reg.php">Registrar-se</a>
                    </td>
                </tr>
                
            </table>
        </div>
        </div>
    </body>
</html>
