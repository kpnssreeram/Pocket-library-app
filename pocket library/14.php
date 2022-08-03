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
#t1{
  text-align: center;
  border: 2px white solid;
  background-color:black;
  color: white;
  font-weight:600;
  font-family:Arial,helvetica,sans-serif;
  margin-bottom:2%;
  margin-left:40%;
}
h3{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:24px;
    color:white;
    background-color:black;
    margin-left:35%;
    width:30%; 
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
</style>
<body>
    <h3>List Of Students Had Fines</h3>
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
$sql = "SELECT f_name,S_id,fines FROM students";
$result = $conn->query($sql);?>
<table id='t1'align=center cellspacing=5px cellpadding=4px>
  <tr>
    <th>Student_id</th>
    <th>Student_name</th>
    <th>Fines</th>
</tr>
<?php if ($result->num_rows > 0) {?>
    <!-- &ensp; This tag is used for displaying two spaces. &emsp; This tag is used for displaying four spaces.   -->
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
<td><?php echo $row["S_id"]; ?></td>       
<td><?php echo $row["f_name"]; ?></td> 
<td><?php echo "$".$row["fines"];?></td>
 </tr>
  <?php } ?>
<?php } ?>
</body>
</html>