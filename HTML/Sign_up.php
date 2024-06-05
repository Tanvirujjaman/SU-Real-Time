<?php session_start();


$link=mysqli_connect('localhost', 'root','','su_real_time');

if(!empty($_POST))
{
$id=$_POST['s_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];

$q="Select * from su_real_time_user where S_ID='$id'";
$re=mysqli_query($link,$q);
$count=mysqli_num_rows($re);
if($count!=0)
{
  $user[]= '<br><br><b>User already exist. Please select a new one.<b/><br><br><br>';
}
else{
if($password==$cpassword)
{

  $query = "INSERT INTO su_real_time_user(S_ID,Name,Email,Password) VALUES ('$id','$name','$email','$password')";
  $res = mysqli_query($link,$query);
  
  if($res)
  {
    $_SESSION['S_ID'] = $id;
    $_SESSION['NAME'] = $name;
    $_SESSION['EMAIL'] = $email;
    header('location:Home.php');
  }

  else{
    $pob[]='<br><br>There is a problem.Registration unsuccessful. 😓 Please try again.<br><br><br>';
  }
}

else{
  $rpass[]='<br><br><b>Password not matched.<b><br><br><br>';
}
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../CSS/Sign_up.css" />
  <title>SU Real Time</title>
</head>

<body>
  <div class="Sign_up">
    <img src="../img/logo2.png" alt="logo" />
    <h3 class="top">Sign Up From</h3>

    <?php
    if(isset($user))
    {
      foreach($user as $user){
        echo'<span class="in">'.$user.'</span>';
      };
    };
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

    <form action="" method="post">
    <h4>Please fill in this form to create an account.</h4>

    <table>

      <tr>
        <th></th>
        <th></th>
      </tr>

      <tr>
        <td><label><b>Student ID :</b></label></td>
        <td><input type="text" name="s_id" placeholder="Enter Your Full ID"  required></td>
      </tr>

      <tr>
        <td><label><b>Name :</b></label></td>
        <td><input type="text" name="name" placeholder="Enter Your Name"  required></td>
      </tr>

      <tr>
        <td><label><b>Email :</b></label></td>
        <td><input type="email" name="email" placeholder="Enter Your Email" required></td>
      </tr>

      <tr>
        <td><label><b>Password :</b></label></td>
        <td><input type="password" name="pass" placeholder="Enter Tour Password" required></td>
      </tr>

      <tr>
        <td><label><b>Repeat Password :</b></label></td>
        <td><input type="password" placeholder="Confirm Password" name="cpass" required></td>
      </tr>

      <tr>
        <td></td>
        <div class="clearfix">
          <td><button type="submit" class="signupbtn"><b>Sign Up</b></button></td>
        </div>
      </tr>

    </table>
    <br><br>Already a member?<a class="login" href="Login.php"><b>Login</b></a></br></br>
    </form>
  </div>

</body>

</html>