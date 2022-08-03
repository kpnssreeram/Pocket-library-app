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
h3{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:24px;
    color:white;
    background-color:black;
    margin-left:35%;
    width:30%; 
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
button{
  text-align: center;
  color:yellow;
  font-size:18px;
  font-weight:600;
  font-family:Arial,helvetica,sans-serif;
  margin-left:44%;
  border: 2px white solid;
  background-color:black;
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "selab2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
  <form id="f1" method="post" action="6.php">
      <input type="submit"name="insert" value="Insert Student">
      <input type="submit"name="update" value="Update Student">
      <input type="submit"name="delete" value="Delete Student"><br>
  </form>
  <button onclick="back1()">Back to Home Page</button>
  <?php
    if (isset($_POST['insert'])) {?>
            <form method="post" action="6.php">
                <span>Enter first name</span>
                <input type="text" name="fname"><br>
                <span>Enter Last name</span>
                <input type="text" name="lname"><br>
                <span>Enter student id</span>
                <input type="number" name="sid"><br>
                <span>premium_content</span>
                <input type="text" name="pc"><br>
                <span>Enter fines</span>
                <input type="number" name="fine"><br>
                <span>Enter Number Of Books</span>
                <input type="number" name="nob">
                <input type="submit" value="Insert">
            </form>
       <?php  } 
       if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['sid'])&&isset($_POST['pc'])&&isset($_POST['fine'])&&isset($_POST['nob'])){
        $i=$_POST['fname'];
        $n=$_POST['lname'];
        $a=$_POST['sid'];
        $c=$_POST['pc'];
        $p=$_POST['fine'];
        $n=$_POST['nob'];
       $sql = "INSERT INTO students(f_name,l_name,S_id,premium_content,fines,number_of_books) VALUES ('$i','$n','$a','$c','$p','$n')";
       if ($conn->query($sql) === TRUE) {
        echo "<div>Inserted Successfully &nbsp;<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      echo "<button onclick=back()>Back</button></div>";
      } ?>
 <?php
    if (isset($_POST['update'])) {?>
            <form method="post" action="7.php">
                <span>Enter first name</span>
                <input type="text" name="fname"><br>
                <span>Enter Last name</span>
                <input type="text" name="lname"><br>
                <span>Enter student id (**)</span>
                <input type="number" name="sid"><br>
                <span>premium_content(1/0)</span>
                <input type="text" name="pc"><br>
                <span>Enter fines</span>
                <input type="number" name="fine"><br>
                <span>Enter Number Of Books</span>
                <input type="number" name="nob">
                <input type="submit" value="Update">
            </form>
       <?php  } ?>
       <?php
    if (isset($_POST['delete'])) {?>
            <form method="post" action="8.php">
                <span>Enter student id to delete (**)</span>
                <input type="number" name="sid"><br>
                <span>Enter first name</span>
                <input type="text" name="fname"><br>
                <input type="submit" value="Delete">
            </form>
       <?php  } ?>
<?php $sql = "SELECT * FROM students";
$result = $conn->query($sql);
echo "<h3>List of Students are</h3><br>";
?>
  <table id='t1'align=center cellspacing=5px cellpadding=4px>
  <tr>
    <th>F_Name</th>
    <th>L_name</th>
    <th>Student_Id</th>
    <th>Pc</th>
    <th>Fine</th>
    <th>No Of Books</th>
</tr>
<?php if ($result->num_rows > 0) {?>
    <!-- &ensp; This tag is used for displaying two spaces. &emsp; This tag is used for displaying four spaces.   -->
  <?php while($row = $result->fetch_assoc()) {?>
    <tr>
<td><?php echo $row["f_name"]; ?></td>       
<td><?php echo $row["l_name"]; ?></td> 
<td><?php echo $row["S_id"]; ?></td> 
<td><?php echo $row["premium_content"]; ?></td> 
<td><?php echo "$".$row["fines"]; ?></td> 
<td><?php echo $row["number_of_books"]; ?></td> 
 </tr>
<?php }} ?>
  </body>
  <script>
    back=()=>{ 
    window.location.href="6.php";
   }
   back1=()=>{ 
    window.location.href="2.php";
   }
</script>
</html>
