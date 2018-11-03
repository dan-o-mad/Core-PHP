<!DOCTYPE html>
<html>


<style>

body {
    background-color:   #cccccc;
//background-image: url("i.jpg");
}

h1 {
    color: white;

    text-align: center;
    font-family: calibri;
    font-style: bold;
font-size: 40px;
border-style: solid;
background-color:   #4d4d4d;
 border-radius: 1000px;
}

h2 {
    color: white;

    text-align: center;
font-family: verdana;
font-style: italic;
 border-style: solid;
background-color: #4d4d4d;
border-width: 1px;
 border-radius: 1000px;

}

p {
color: black;
    font-family: verdana;
    font-size: 20px;
font-style: italic;

text-align: center;

}

p1 {

color: white;
    font-family: verdana;
    font-size: 25px;
font-style: italic;
 
}

form {
    border: 0px solid #f1f1f1;

text-align: center;


}

b{

color: black;
    font-family: verdana;
    font-size: 20px;
font-style: bold;
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
     background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border-style: solid;
    cursor: pointer;
    width: 15%;
text-align: center;
border-width: 1px;
 border-radius: 1000px;

}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
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
text=align: center;
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
   /* Extra styles for the cancel button */




</style>
<!DOCTYPE html>
<html>
<body>


<h1>Dashboard  <h1>



<?php
session_start();

include("connect.php");

$username=$_GET["uname"];
$password=$_GET["psw"];


?>




<?php
$results = "SELECT * FROM student
            WHERE (`student_id` LIKE '%".$username."%') AND (`student_password` LIKE '%".$password."%')";




$x = mysqli_query($d , $results);


  if(mysqli_num_rows($x) == 0){
         
                echo  "<script language='javascript'>document.location.href='first.php';</script>";


        }

    

while($row = mysqli_fetch_array($x)) {
//$na=$row['student_name'];

?>

<p1>

<?php

echo "Student Name: " . $row['student_name'];
echo " and ";
echo "Student ID: " . $row['student_id'];

?>

</p1>

<?php
//print_r($row);
}





	$row=mysqli_fetch_array($x);
	$_SESSION['$username'] = $username;
	


?>





</body>



<h2>Welcome To Student Portal  <h2>

<form action="/quizes.php" method="GET">
        
    <button type="submit" name="q">Quizes/Assignments</button>


</form>

<form action="/assignments.php">

<button type="submit">Sessional</button>


</form>

<form action="/mid.php" method="GET">

    <button type="submit">Mid</button>


</form>

<form action="/final.php">
<button type="submit">Final</button>
</form>
<form action="/attendance.php">
<button type="submit">Attendance</button>
</form>
<form action="/results.php">
<button type="submit">Results</button>
</form>



</form>
<h1> <form action="/first.php">
<button type="submit" class="cancelbtn">Logout</button>
</form></h1>

</body>








</html>
