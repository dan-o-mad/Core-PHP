<!DOCTYPE html>
<html>
<style>

body {
    background-color:   #b3ccff;
//background-image: url("i.jpg");
}

h1 {
    color: white;

    text-align: center;
    font-family: calibri;
    font-style: bold;
font-size: 40px;
border-style: solid;
background-color:    #003399;
 border-radius: 1000px;
}

h2 {
    color: white;

    text-align: center;
font-family: verdana;
font-style: italic;
 border-style: solid;
background-color:  #003399;
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

color: white;
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
border-width: 1px;
 border-radius: 1000px;
text-align: left;

}



button {
     background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border-style: solid;
    cursor: pointer;
    width: 10%;
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
    
}
</style>
<h1> Dashboard </h1>

<?php
include("connect.php");

session_start();

$username = $_GET['uname'];
$password = $_GET['psw'];




$results = "SELECT * FROM faculty
            WHERE (`faculty_id` LIKE '%".$username."%') and (`faculty_password` LIKE '%".$password."%')";


$x = mysqli_query($d , $results);

 if(mysqli_num_rows($x) == 0){
         
                echo  "<script language='javascript'>document.location.href='faculty.php';</script>";


        }


$row = mysqli_fetch_array($x);


?>
<h2>
<?php
echo "Faculty Name: ";

echo $row['faculty_name'];

echo " and ";

echo "Faculty ID: ";

echo $row['faculty_id'];
?>
</h2>


<?php

$row=mysqli_fetch_array($x);
	$_SESSION['$username'] = $username;

?>

<body>

<h2>Welcome to faculty portal</h2>
<h1>
<form action="/quizenter.php" method="GET">
        
    <button type="submit">Enter Quizes Marks</button>

</form>

<form action="/assignmententer.php" method="GET">
        
    <button type="submit">Enter Assignments Marks</button>

</form>


<form action="/midenter.php" method="GET">
        
    <button type="submit">Enter Mid Marks</button>

</form>

<form action="/finalenter.php" method="GET">
        
    <button type="submit">Enter Final Marks</button>

</form>

<form action="/attendanceenter.php" method="GET">
        
    <button type="submit">Enter Attendance</button>

</form>

</h1>
<h1>
<form action="/faculty.php" >
        
    <button type="submit" class="cancelbtn">Logout</button>
</h1>
</body>
</html>