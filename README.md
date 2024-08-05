This is an HTML project that also uses PHP and CSS. This project needs a data server to function. For this project, I like to utilize Xampp with Apache and MySQL. For it to function correctly, the database, table, and rows must be exactly the same. You must navigate to the HTML folder in order to view the home page; after that, it will automatically reroute to the login page where you may log in or register as a new user. We are preparing this project for the 6th semester's Web Programming Session Course. Whereas the lab final calls for a project, which our group turned in. Six of us, including me, make up our group.

 1. Tanvirujjaman (Leader)
 Id: CSE2202026130

 2. Mehedi Hasan
 Id: CSE2202026147

 3. Md . Tarek Rahman
 Id: CSE2202026122

 4. Ayesha Akter Akhi
 Id: CSE2202026145

 5. Eva Rahman Fatema
 Id: CSE2202026113

 6. Mitu Rani Das
 Id: CSE2202026107


SQL Operation:- 

CREATE DATABASE su_real_time;

CREATE TABLE su_real_time_user (
    S_ID varchar(20) NOT NULL,
    Name varchar(40) NOT NULL,
    Email varchar(40),
    Password varchar(32) NOT NULL,
    PRIMARY KEY (S_ID)
);

