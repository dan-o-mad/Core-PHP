<!DOCTYPE html>
<html>
<style>


form {
    border: 3px solid #f1f1f1;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #4CAF50;
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
<body>

<?php


//include("connect.php");
include("getid.php");





?>




<h2>Welcome to your portal </h2>
<form action="/quizes.php">
        
    <button type="submit">Quizes</button>

</form>

<form action="/first.php">

<button type="submit">Assignments</button>

</form>

<form action="/first.php">

    <button type="submit">Mid</button>

</form>

<form action="/first.php">
<button type="submit">Final</button>
</form>
<form action="/first.php">
<button type="submit">Attendance</button>
</form>
<form action="/first.php">
<button type="submit">Results</button>
</form>

</form>

</body>
</html>
