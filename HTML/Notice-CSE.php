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
<h3 class="text"> 21/03/2024  5:30 AM<br><br><br>
  Dear Students<br>
Greetings!<br>

As your final exams begin on March 29, 2024, and the last class is set for March 27, 2024, we assume you've received your mid-semester marks for all courses.<br>

Additionally, please make sure you've received marks for all class tests/quizzes/assignments/presentations before the final exams. If not, notify me via WhatsApp at +8801977880888 with the course title and section name.<br>

Please feel free to share any difficulties you are encountering in any particular course directly with me at bulbul.cse.su@gmail.com.<br>
<br>
Thank you for your attention.<br>
<br>
Note: Final exam admit cards are available on ERP.<br>
<br>
Best regards,<br>
Prof. Bulbul Ahamed<br>
Head, Department of CSE<br></h3>

<h3 class="text"> 14/03/2024  12:50 PM <br><br><br>
<img class="im" src="../img/432145644_7501995953194960_305248233834175100_n.jpg" 
src="https://www.facebook.com/photo/?fbid=7501995719861650&set=gm.1767409790392900&idorvanity=487986885001870" 
alt="Notice 14/03/2024"></h3>

<h3 class="text"> 18/03/2024  10:39 AM <br><br>
Ramadan Schedule<br><br>
<img class="im" src="../img/433513161_7516705135057375_3859912353258736427_n.jpg"
src="https://www.facebook.com/photo/?fbid=7516705145057374&set=gm.1769643946836151&idorvanity=487986885001870" 
alt="Notice 18/03/2024"></h3>

<h3 class="text"> 18/03/2024  12:00 AM<br><br><br>
Lab Exam, Spring 2024<br>
All Lab exams of Spring 2024 will be held according to course teacher's provided time slot.</h3>

<?php
include('../Includes/Footer.php');
?>