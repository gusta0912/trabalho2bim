<?php
include 'connect.php';
?>
<table border='1'>
    <tr>
        <th>
            Name
        </th>
        <th>
            Username
        </th>
         <th>
            Password
        </th>
        <th>
            Image
        </th>
         <th>
            City
        </th>
        <th>
            Gender
        </th>
    </tr>

<?php
$sq="select * from reg";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['name']?>
        </td>
        <td>
            <?php echo $f['username']?>
        </td>
        <td>
            <?php echo $f['password']?>
        </td>
        <td>
            <?php echo $f['image']?>
        </td>
        <td>
            <?php echo $f['city']?>
        </td>
        <td>
            <?php echo $f['gender']?>
        </td>
    </tr>
    <?php
}
?>

<?php
    include 'connect.php';
    include 'checkLogin.php';

    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

?>

