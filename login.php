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
<html>
      
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<link rel="stylesheet" type="text/css" href="css/style.css">
        <div class ="pai">
        <div class="filho">


        <form method="POST" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>
                        <b>EMAIL</b>
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td> 
                        <b>SENHA</b>
                       
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="Entrar">
                    </td>
                </tr>

                

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
