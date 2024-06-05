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

<img class="im" src="..\img\logo2.png" alt="Sonargaon University"></h3>
<img class="imn" src="..\img\23-04-2022_1650701758.jpg" alt="Sonargaon University"></h3>
<img class="imn" src="..\img\logo.jpg" alt="Sonargaon University"></h3>
  <br>
  <br>
  <br>
  
  <h3 class="home">GREEN ROAD CAMPUS<br>
147/I, Green Road, Panthapath, Tejgaon, Dhaka<br>
   +8801955529725<br>
   +8801780330055<br>
   +8801780220099<br>
   +8801955529721<br>
   +8801775000888<br>
  +880241010352<h3>
    <br>
    <br>
    <h3 class="home">MOHAKHALI CAMPUS<br>
GP Ja-146, Wireless Gate, Mohakhali, Dhaka<br>
   +8801971337777<br>
   +8801955529724<br>
   +8801955529722<br>
   +8801955529710<br>
  +8802222292134<h3>
  <br><br><br><br>
  <h2 class="home" >FARUQ HOSEN<br>
Additional Director<br>
Admission & Branding<br>
director.suadmission@gmail.com<h2>

<?php
include('../Includes/Footer.php');
?>