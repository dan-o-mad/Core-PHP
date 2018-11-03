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
background-color: #003399;
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
background-color: #003399;
border-width: 1px;
 border-radius: 1000px;
}
}

tr{

background-color: #003399

}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    
}
</style>


<body>


<div class="container" style="overflow-x:auto;">


<table>
<h2>Enter Quiz Marks</h2>
<th> Student ID </th>
<th> Student Name </th>
<th> Quiz Marks ( 25 ) </th>

<tr>

<?php

include("connect.php");
session_start();

$username = $_SESSION['$username'];
$coursename = $_SESSION['$coursename'];

//$q = $_GET['quizes'];

//if(isset($xx) == 1){


$result = "select * from student join faculty on student.student_id=faculty.student_id and faculty_id= '$username'";

$x = mysqli_query($d , $result);


//if($x !=0) {
//echo "Welcome: ";

//echo $row['name'];
//echo $row['id'];
//echo "Quiz Marks Added Successfully";
//}



while($row = mysqli_fetch_array($x)) {


//$r=select*from student where faculty_id= '$username';

?>


<form action="/submitquiz.php" id="form1" method="GET" >


<tr > 

<th> <?php echo  "{$row['student_id']}" ?>  </th>  
<th> <?php echo  "{$row['student_name']}" ?>  </th>

<th> <input type="text" name="quiz[]" > </th>

</tr>


</form>
 




<?php




$studentid= $row['student_id'];


$_SESSION['$studentid'] = $studentid;
$_SESSION['$coursename'] = $coursename;




//$_SESSION['$xxx']

//$_SESSION['$quiz'] = $quiz;


}



?>
</table>

 <button type="submit" form="form1">Submit</button> 

    
    
       
    
    
  



</body>


</html>
