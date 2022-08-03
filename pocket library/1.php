<!DOCTYPE html>
<html lang="en">
    <style>
    body{
    background-image: url('a.jpg');
    width: 100%;
    min-height: 28rem;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
    background-position:center;
}
form{
    background-color:black;
    padding-top:4%;
    border: 2px ;
    outline-style: solid;
    outline-color: white;
    padding-bottom:4%;
    margin-left:35%;
    border-radius:9px;
    text-align:center;
    line-height:35px;
    color:white;
    width:30%;
    font-family:Arial,helvetica,sans-serif;
}
h3{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:28px;
    color:white;
    
}
h1{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:22px;
    color:white;
    background-color:black;
    margin-left:35%;
    width:30%;
}
h2{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:20px;
    color:white;
    border-radius:9px;
    background-color:red;
    margin-left:35%;
    width:30%;
}
a{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:19px;
    color:red;
    background-color:black;
    margin-left:45%;
    
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocket Library</title>
    <link rel="stylesheet" href="/3.css">
</head>
<body>
    <h3>Pocket library login</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <span>USERNAME</span>
    <input type="text" name="uname"/><br>
    <span>PASSWORD</span>
    <input type="password" name="password"/><br>
    <input type="radio" name="rad" value="ADMIN"><label>ADMIN</label>
    <input type="radio" name="rad" value="STUDENT"><label>STUDENT</label>
    <input type="radio" name="rad" VALUE="FACULTY"><label>FACULTY</label><br>
    <input type="submit" value="SUBMIT"/>
    <input type="reset" value="RESET"/>
    </form>

<?php
if(isset($_POST['uname'])&&isset($_POST['password'])&&isset($_POST['rad'])){
    $name=$_POST['uname'];
    $password=$_POST['password'];
    $radio=$_POST['rad'];
    if($name=="seadmin"&&$password=="1234"&&$radio=="ADMIN"){
    echo "<h1>Login Successful here you go <i style=color:blue>$radio</i></h1>";
    echo "<a href=2.php>$radio page</a>";
    }
    elseif($name=="sestudent"&&$password=="5678"&&$radio=="STUDENT"){ 
        echo "<h1>Login Successful here you go <i style=color:blue>$radio</i></h1>";
    echo "<a href=a.html>$radio page</a>";
    }
    elseif($name=="sefaculty"&&$password=="9012"&&$radio=="FACULTY"){
        echo "<h1>Login Successful here you go <i style=color:blue>$radio</i></h1>";
    echo "<a href=b.html>$radio page</a>";
    }
    else{
        echo "<h2>Invalid Credentials</h2>";
    }
}
else{
    echo "<h2>Warn : please fill all boxes</h2>";
}
?>
</body>
</html>