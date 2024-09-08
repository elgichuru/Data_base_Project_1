<?php
 $dsn='mysql:host=localhost;dbname=ap';
 $username='Mutwiri';
 $pwd='Reztraint@90!';
 
 try
 {
     $pdo=new PDO($dsn,$username,$pwd);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $ex) {
     $error_message=$ex->getmessage();
include('database_error.php');
 }
