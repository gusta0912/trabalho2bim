<?php


include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <body>
        <div class="pai">
        <div class="filho">
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <b>NOME</b>
                        <input type="text" name="text">
                    </td>
                </tr>
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
                        <b>CIDADE</b>
                        <select name="city">
                            <option value="">-select-</option>

                            <?php
                            $sqlCity= mysqli_query($con, "select * from city");
                                                        
                            while($item = mysqli_fetch_assoc($sqlCity))
                            {
                                $nomeItem = utf8_encode($item['nameCity']);
                                $idCity = $item['idCity'];
                                echo "                                
                                    <option value=$nomeItem>$nomeItem</option>                                
                                ";
                            }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>GENERO:</b>
                        <input type="radio"name="gen" id="gen" value="male">M
                        <input type="radio" name="gen" id="gen" value="female">F
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <b>IMAGEM</b>

                        <input type="file" name="f1">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="cadastrar" name="sub">
                               
                    </td>
                </tr>


                  <div class="login">
                <tr>
                    <td>
                        <a href="login.php"> Login</a>
                    </td>
                </tr>
            </table>
        </div>
            </div>
        </div>

    </body>
</html>