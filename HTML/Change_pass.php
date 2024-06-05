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
$Old_password=$_POST['old_pass'];
$New_password=$_POST['new_pass'];
$cpassword=$_POST['cpass'];

$q="Select * from su_real_time_user where S_ID='$Id'";
$re=mysqli_query($link,$q);
$data=mysqli_fetch_assoc($re);
if($Old_password==$data['Password'])
{
  if($New_password==$cpassword)
{
  $query = "UPDATE su_real_time_user SET Password='$New_password' WHERE S_ID='$Id'";
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
    $cpass[]='<br><br><b>Confirm Password not matched. Please try again.<b><br><br><br>';
  }
}
else{
  $rpass[]='<br><br><b>Old Password not matched!<b><br><br><br>';
}
}

?>
<div class="background">
  <div class="main">
    <h3 id="id">Changing Password</h3><br><br>

    <?php
    if(isset($rpass))
    {
      foreach($rpass as $rpass){
        echo'<span class="in">'.$rpass.'</span>';
      };
    };
    if(isset($cpass))
    {
      foreach($cpass as $cpass){
        echo'<span class="in">'.$cpass.'</span>';
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
        <td><label><b>Enter Old Password :</b></label></td>
        <td><input type="text" id="a1" name="old_pass" placeholder="Old Password" required></td>
      </tr>

      <tr>
        <td><label><b>New Password :</b></label></td>
        <td><input type="text" id="a1" name="new_pass" placeholder="Your New Password" required></td>
      </tr>

      <tr>
        <td><label><b>Confirm New Password :</b></label></td>
        <td><input type="text" id="a1" name="cpass" placeholder="Retype New Password" required></td>
      </tr>

    </table>
    <br><br><button onclick="return confirm('Sure to change your Password?')" type="submit" class="up"><b>Change Password</b></button></br></br>
    </form>
</div>
</div>
<?php
include('../Includes/Footer.php');
?>