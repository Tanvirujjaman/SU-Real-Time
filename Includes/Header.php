<?php session_start(); 
$link=mysqli_connect('localhost', 'root','','su_real_time');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Nav bar.css">
    
</head>

<body>

    <marquee behavior="scroll" direction="left" style="background-color: rgb(111, 59, 151); 
    color: rgb(255,255,255); padding: 15px;">
        <strong>Notice: </strong>New notice updated. Check CSE department. Last updated 22 hours ago ( 20/03/2024 6:30
        PM )
    </marquee>

        <div class="menu-ber">
            <ul>
            <li><a href="../HTML/Home.php">Home</a></li>
            <li><a href="../HTML/Program.php">Program</a></li>
                <li><a href="#">Notice</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="../HTML/Notice-CSE.php">CSE</a></li>
                            <li><a href="../HTML/Notice-BBA.php">EEE</a></li>
                            <li><a href="../HTML/Notice-EEE.php">BBA</a></li>
                        </ul>
                    </div>
                <li><a href="../HTML/Contact_Us.php">Contact As</a></li>
                <li><a href="../HTML/About_Us.php">About Us</a></li>
                <li><a href="../HTML/profile_details.php">My profile</a></li>
                <li><a href="../HTML/Logout.php">Log out</a></li>
            </ul>
        </div>