<?php
include('../Includes/Header.php');
if(empty($_SESSION['S_ID']))
{
  header('location:Login.php');
  die("You must login first!!");
}
$id=$_SESSION['S_ID'];
$Name=$_SESSION['NAME'];
$Email=$_SESSION['EMAIL'];
?>
<div class="background">
  <div class="main">
    <h3 id="id">User Profile Details</h3><br><br>
    <table class="pp">

      <tr>
        <th></th>
        <th></th>
      </tr>

      <tr>
        <td><label><b>User ID :</b></label></td>
        <td><label id="a1"><b><?php echo $id ?></b></label></td>
      </tr>

      <tr>
        <td><label><b>User Name :</b></label></td>
        <td><label id="a1"><b><?php echo $Name ?></b></label></td>
      </tr>

      <tr>
        <td><label><b>Email :</b></label></td>
        <td><label id="a1"><b><?php echo $Email ?></b></label></td>
      </tr>

    </table>
    <br><br><a class="up" href="Edit_details.php"><b>Update Details</b></a></br></br>
    <br><a class="up" href="Change_pass.php"><b>Change Password</b></a></br></br>
    <br><a onclick="return confirm('Are You Sure to Delete Your Account?')"class="login" href="Delete_account.php"><b>Delete Account</b></a></br></br>

</div>
</div>
<?php
include('../Includes/Footer.php');
?>