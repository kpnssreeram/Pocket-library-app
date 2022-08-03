<html>
    <style>
        body{
    background-image: url('b.jpg');
    width: 100%;
    min-height: 28rem;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
    background-position:center;
}
div{
    text-align: center;
    color: white;
    font-weight:600;
    margin-left:32%;
  margin-right:28%;
  line-height:3rem;
    background-color:black;
  font-family:Arial,helvetica,sans-serif;
  border: 2px white solid;
}
form{
  text-align: center;
  border: 2px white solid;
  background-color:black;
  color: white;
  line-height:3rem;
  font-weight:600;
  font-family:Arial,helvetica,sans-serif;
  margin-bottom:2%;
  margin-left:32%;
  margin-right:28%;
}
</style>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="selab2";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
if(isset($_POST['id'])&&isset($_POST['name'])){
     $i=$_POST['id'];
     $n=$_POST['name'];
     $sql = "DELETE from books WHERE book_id=$i and book_name='$n'";
     if ($conn->query($sql) === TRUE) {
        echo "<div>Deleted Successfully &nbsp;<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      echo "<button onclick=back()>Back</button></div>";
}
?>
</body>
<script>
    back=()=>{ 
    window.location.href="2.php";
   }
</script>
</html>