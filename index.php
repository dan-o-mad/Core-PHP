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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<h1>  <img src="Logo_for_ncba.gif" alt="NCBA&E">  National College of Business Administration and Economics , Multan </h1>


              <h2>     NCBA&E Student Console </h2>

 <p>     Login Here: </p>


<form action="/sec.php" method="GET">
 
<h1>
  <div class="container">
    <label><b>USERNAME</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  required>
        
    <button type="submit" name="login">Login</button>

    <input type="checkbox" checked="checked"> <b> Remember me</b></h1>
  </div>


</form>

<form action="/signup.php" method="GET">
<button type="submit" name="login">Signup</button>



  
</form>

</body>
</html>
