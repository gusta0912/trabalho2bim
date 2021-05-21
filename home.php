<?php
    include 'connect.php';
    include 'checkLogin.php';

    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

?>
<html>
    <head>
        
    </head>

    <link rel="stylesheet" type="text/css" href="css/stylehome.css">

    <body>

<div class="pai">
<div class="filho">
<div class="name">

<table>
    <tr>
        <td>
            Name
        </td><td>
            
<?php echo $f['name'];?>
            </td>
    </tr>
    <tr>
    <td> Username</td>
    
    <td>
            
<?php
echo $f['username'];?>
        </td></tr>
<tr><td> Password</td>
    <td>
<?php
echo $f['password']."<br>";?>
    </td></tr>
  <tr><td> City </td>   <td>           
 <?php
 echo $f['city']."<br>";?></td></tr>
  <tr>
      <td>Gender</td>
      <td><?php
echo $f['gender']."<br>";?></td>
  </tr>
  <tr><td> Image</td><td>

 <img src="<?php
echo $f['image'];?>" width="100px" height="100px">
</td>

</tr>
</table>
<div class="botao">

<a href="edit.php">Edit</a>
<a href="delete.php">Delete</a>
<a href="logout.php">Logout</a>

<?php
    if($_SESSION['profile']=='Admin'){
        echo "
            <a href='viewall.php'>View All Users</a>
            <a href='reg_city.php'>Reg City</a>
        ";
    }else{
        echo "
            <a href=''>Você não ADM</a>
        ";
    }
?>
<br><br>
<a href="home1.php">Ir para a pagina principal</a>
</div>
</div>
</div>
</div>

    </body>
</html>