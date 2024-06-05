<?php session_start();

$link=mysqli_connect('localhost', 'root','','su_real_time');

if(!empty($_POST))
{
$id=$_POST['s_id'];
$password=$_POST['pass'];

  $query="SELECT * FROM su_real_time_user WHERE S_ID='$id'";
  $res = mysqli_query($link,$query);
  $data=mysqli_fetch_assoc($res);

  if($data)
  {
  if($password==$data['Password'])
  {
    $_SESSION['S_ID'] = $data['S_ID'];
    $_SESSION['NAME'] = $data['Name'];
    $_SESSION['EMAIL'] = $data['Email'];
    header('location:Home.php');
  }
  else{
    $incorrect[]= 'Password or ID is incorrect !!';
  }
}
else{
  $no_user[]= 'User does not exist.';
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../CSS/Login.css" />
  <title>SU Real Time</title>
</head>

<body>
  <div id="login">
  
    <img src="../img/logo2.png" alt="logo" />
    <h3 class="top">Login Form</h3>
    <?php
    if(isset($incorrect))
    {
    foreach($incorrect as $incorrect){
      echo'<span class="in">'.$incorrect.'</span>';
    };
  };
    if(isset($no_user))
    {
      foreach($no_user as $no_user){
        echo'<span class="in">'.$no_user.'</span>';
      };
    };
    ?>
    <form  action="" method="POST">
      <table>

        <tr>
          <th></th>
          <th></th>
        </tr>

        <tr>
          <td><label><b>ID : </b></label></td>
          <td><input type="text" name="s_id" placeholder="Enter Your Full ID"  required></td>
        </tr>

        <tr>
          <td><label><b>Password : </b></label></td>
          <td><input type="password" name="pass" placeholder="Enter Your Password" required ></td>
        </tr>

        <tr>
          <td></td>
          <div class="clearfix">
            <td><button type="submit" class="loginbtn"><b>Login</b></button></td>
          </div>
        </tr>

      </table>
      <br><br>Not yet a member?<a class="register" href="Sign_up.php"><b>Register</b></a></br></br>
    </form>
  </div>

</body>

</html>