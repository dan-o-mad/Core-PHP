<?php


$user = 'root';

$password = '';

$db = 'ncba_db';


$d = mysqli_connect('localhost' , $user , $password , $db );

if (!$d) {
  die('Could not connect: ' . mysql_error());
}


?>