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

color: black;
    font-family: verdana;
    font-size: 20px;
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
    border: none;
    cursor: pointer;
    width: 8%;
text-align: center;

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
text=align: center;
}

span.psw {
    float: right;
    padding-top: 16px;
}

th{
    
    padding: 5px;
 border-bottom: solid white;


height: 30px;
    horizontal-align: bottom;


color: white;

    text-align: center;
font-family: verdana;
font-style: italic;
 border-style: solid;
background-color: #4d4d4d;
border-width: auto;
 border-radius: 1000px;
}
td{
    padding: 5px;
 border-bottom: solid white;


height: 30px;
    horizontal-align: bottom;


color: white;

    text-align: center;
font-family: verdana;
font-style: italic;
 border-style: solid;
background-color: #4d4d4d;
border-width: 1px;
 border-radius: 1000px;
}
}

tr{

background-color: #4d4d4d

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


<h1> Mid Marks</h1>






<body>


<div style="overflow-x:auto;">
<table>

<th> Course Name </th>
<th> Marks ( 25 ) </th>
<tr>

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




$results = "SELECT *FROM course where student_id= '$username'";


$x = mysqli_query($d , $results);





while($row = mysqli_fetch_array($x)) {
?>



<tr>

<th> <?php echo "{$row['course_name']}" . ":" ?> </th>

<td> <?php echo "{$row['course_mid']}"  ?> </td>
</tr>


<?php
}




?>


</table>
</div>
</body>


</html>
