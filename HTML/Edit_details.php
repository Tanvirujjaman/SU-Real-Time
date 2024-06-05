<?php
include('../Includes/Header.php');
if(empty($_SESSION['S_ID']))
{
  header('location:Login.php');
  die("You must login first!!");
}
$Id=$_SESSION['S_ID'];
$Name=$_SESSION['NAME'];
$Email=$_SESSION['EMAIL'];

if(!empty($_POST))
{
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];

$q="Select * from su_real_time_user where S_ID='$Id'";
$re=mysqli_query($link,$q);
$data=mysqli_fetch_assoc($re);
if($password==$data['Password'])
{
  $query = "UPDATE su_real_time_user SET S_ID='$id',Name='$name',Email='$email' WHERE S_ID='$Id'";
  $res = mysqli_query($link,$query);
  if($res)
  {
    $_SESSION['S_ID'] = $id;
    $_SESSION['NAME'] = $name;
    $_SESSION['EMAIL'] = $email;
    header('location:Profile_details.php');
  }

  else{
    $pob[]='<br><br>There is a problem.Update unsuccessful. 😓 Please try again.<br><br><br>';
  }
}
else{
  $rpass[]='<br><br><b>Password not matched!<b><br><br><br>';
}
}

?>
<div class="background">
  <div class="main">
    <h3 id="id">Editing Profile Details</h3><br><br>

    <?php
    if(isset($rpass))
    {
      foreach($rpass as $rpass){
        echo'<span class="in">'.$rpass.'</span>';
      };
    };
    if(isset($pob))
    {
    foreach($pob as $pob){
      echo'<span class="in">'.$pob.'</span>';
    };
  };
    ?>

<form action="" method="POST">
    <table class="pp">

      <tr>
        <th></th>
        <th></th>
      </tr>

      <tr>
        <td><label><b>User ID :</b></label></td>
        <td><input type="text" id="a1" name="id"value="<?php echo $Id ?>" required></td>
      </tr>

      <tr>
        <td><label><b>User Name :</b></label></td>
        <td><input type="text" id="a1" name="name"value="<?php echo $Name ?>" required></td>
      </tr>

      <tr>
        <td><label><b>Email :</b></label></td>
        <td><input type="text" id="a1" name="email"value="<?php echo $Email ?>" required></td>
      </tr>
      <tr>
        <td><label><b>Password :</b></label></td>
        <td><input type="text" id="a1" name="pass"placeholder="Enter your password to update" required></td>
      </tr>

    </table>
    <br><br><button onclick="return confirm('Sure to update your details?')" type="submit" class="up"><b>Update Details</b></button></br></br>
    </form>
</div>
</div>
<?php
include('../Includes/Footer.php');
?>