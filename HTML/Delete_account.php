<?php session_start();

$link=mysqli_connect('localhost', 'root','','su_real_time');

if(empty($_SESSION['S_ID']))
{
  header('location:Login.php');
  die("You must login first!!");
}

$id=$_SESSION['S_ID'];

$query="DELETE FROM su_real_time_user WHERE S_ID='$id'";
$res=mysqli_query($link,$query);

if($res)
{
  header('location:Sign_up.php');
}
else
{
  echo "Something went wrong. Failed to delete Account. Please try again.";
  ?><a class="a_tag_delete_page"href="Edit_details.php"><b>Go Back and Try Again<b></a><?php
}

?>