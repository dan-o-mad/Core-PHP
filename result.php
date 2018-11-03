<!DOCTYPE html>
<html>
<style>

body {
    background-color:  #003300;
}

h1 {
    color: #805500;

    text-align: center;
    font-family: verdana;
    font-style: italic;
}

h2 {
    color: #805500;

    text-align: center;
font-family: verdana;
font-style: italic;
}

p {
color: #805500;
    font-family: verdana;
    font-size: 20px;
font-style: italic;
}

p1 {

color: #805500;
    font-family: verdana;
    font-size: 20px;
font-style: italic;
}

form {
    border: 0px solid #f1f1f1;
text-align: center;

}

input[type=text], input[type=password] {
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


button {
   background-color: #4d0026;
    color: #805500;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;

}

button:hover {
    opacity: 0.8;
}

.cancelbtn {

    width: auto;
    padding: 10px 18px;
    background-color: red;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>


<h1> Result Card</h1>






<body>

<form>
        
    <button </button>


</form>

<table>

<?php

include("connect.php");

session_start();


	$username = $_SESSION['$username'];

	//echo "<script language='javascript'>document.location.href='index.php';</script>";
	//}


//$xx=$_GET['uname'];
//$yy=$_SESSION['student_password'];

//if(isset($_GET['q'))]

//$username = $_GET['uname'];
//$password = $_GET['psw'];




$results = "SELECT * FROM course where student_id= '$username'";


$x = mysqli_query($d , $results);



while($row = mysqli_fetch_array($x)) {


echo $row['course_name'] . "="; 

echo $row['course_quiz'] . "=";

echo $row['course_assignments'] . "=";

echo $row['course_final'] . "=";

echo $row['course_mid'] . "=";

echo $row['course_attendance'] . "="; 

echo " ";





//print_r($row);
}




?>


</table>
</body>


</html>
