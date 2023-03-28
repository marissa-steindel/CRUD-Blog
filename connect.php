<!----------------

    Assignment 3
    Name: Marissa Steindel
    Date: June 1, 2022
    Description: Blog Application

------------------>

 <?php

    // define constant for MySQL database
     define('DB_DSN','mysql:host=localhost;dbname=serverside;charset=utf8');

     // define constant for your DB user
     define('DB_USER','serveruser');

     // define constant for password
     define('DB_PASS','gorgonzola7!');

     // connect to database with PDO object
     try
     {
         $db = new PDO(DB_DSN, DB_USER, DB_PASS,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         // to displaying DB errors on screen, add this fourth parameter:
         // ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
     }
     catch (PDOException $e)
     {
         print "Error: " . $e->getMessage();
         die();   //  ¯\_(ツ)_/¯
     }
 ?>
