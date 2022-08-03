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
  margin-left:35%;
}
h3{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:28px;
    color:white;
    background-color:black;
    margin-left:35%;
    width:30%; 
}

  </style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "selab2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
echo "<h3>List of available books are</h3><br>";?>
<table id='t1'align=center cellspacing=5px cellpadding=4px>
  <tr>
    <th>Book_id</th>
    <th>Book_name</th>
    <th>Author_name</th>
    <th>Category</th>
    <th>Price</th>
</tr>
<?php if ($result->num_rows > 0) {?>
    <!-- &ensp; This tag is used for displaying two spaces. &emsp; This tag is used for displaying four spaces.   -->
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
<td><?php echo $row["book_id"]; ?></td>       
<td><?php echo $row["book_name"]; ?></td> 
<td><?php echo $row["Author_name"]; ?></td> 
<td><?php echo $row["category"]; ?></td> 
<td><?php echo "$".$row["Price"]; ?></td> 
 </tr>
  <?php } ?>
<?php } ?>