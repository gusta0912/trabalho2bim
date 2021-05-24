<?php
include 'connect.php';
include 'checkLogin.php';

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
    else{
        $img=$_POST['img1'];
    }
    $i="update reg set name='$t',username='$u',password='$p',city='$c',gender='$g',image='$img' where id='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:home.php');
}
    $s="select*from reg where id='$_SESSION[id]'";
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

<h1>Editar</h1>
  <p> 
       <img src="i2.jpeg" width="150" height="150" align="middle">
       <img src="i3.jpeg" width="150" height="150" align="right">
</p>
            
                <p>
                        Name
                        <input type="text" name="text" value="<?php echo $f['name']?>">
                  </p> 
                <p>
            
                        Username
                        <input type="text" name="user" value="<?php echo $f['username']?>">
                 </p>
                 <p>
                        password
                        <input type="password" name="pass" value="<?php echo $f['password']?>">
                 </p>
                      <p>
                        city
                        <select name="city">
                            <option value="">-select-</option>
                        
                            <?php
                            $sqlCity= mysqli_query($con, "select * from city");
                                                        
                            while($item = mysqli_fetch_assoc($sqlCity))
                            {
                                $nomeItem = utf8_encode($item['nameCity']);
              
                                if($f['city'] == $nomeItem){
                                    echo "                                
                                        <option value=$nomeItem selected='selected'>$nomeItem</option>                                
                                    ";
                                }else{
                                    echo " <option value=$nomeItem>$nomeItem</option>";
                                }
                            }
                            ?>
                            genero
                            </p>

                    <p>

                    
                        <?php if($f['gender']=='male'){
                            ?>
                          <input type="radio"name="gen" id="gen" value="male" checked>
                        <?php
                        } else {
?>
                        <input type="radio"name="gen" id="gen" value="male">
                        <?php } ?>M
                       <?php if($f['gender']=='female'){
                            ?>
                          <input type="radio"name="gen" id="gen" value="female" checked>
                        <?php
                        } else {
?>
                        <input type="radio"name="gen" id="gen" value="female">
                        <?php } ?>F
                        genero
                    </p>
                    <p>
                        Image
                        <img src="<?php echo $f['image']?>" width="100px" height="100px">
                        <input type="file" name="f1">
                        <input type="hidden" name="img1" value="<?php echo $f['image']?>">
                        
                    </p>
                    <p>
                   
                        <input type="submit" value="submit" name="sub">
                               
                   </p>
            
</form>