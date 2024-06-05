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

<div class="under_maintenance">
<h1> Page Under Maintenance 🙃 </h1>
</div>

<?php
include('../Includes/Footer.php');
?>