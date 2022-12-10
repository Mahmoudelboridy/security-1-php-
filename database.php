<?php
include ('conn/conn.php');
?>
<form action="" method="POST">

    <input type="text" name="name" />
    <input type="password" name="pass" />
    <button name="btn">save</button>
</form>


<?php
if(isset($_POST['btn'])){
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $pass= mysqli_real_escape_string($con,$_POST['pass']);
    $mnr="INSERT INTO `login`(name,pass) VALUES ('$name','$pass')";
    $mntr=mysqli_query($con,$mnr);
}
?>

<?php
$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);


foreach($users as $user){
echo  "<h1>".htmlspecialchars($user['name'])."</h1>"  ;
}
?>