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
?>
    <body>
    <form method="post" action="3.php">
        <input type="submit"name="insert" value="Insert Book">
        <input type="submit"name="update" value="Update Books">
        <input type="submit"name="delete" value="Delete Books">
    </form>
    <?php
    if (isset($_POST['insert'])) {?>
            <form method="post" action="3.php">
                <span>Enter book id to insert</span>
                <input type="number" name="id"><br>
                <span>Enter book name</span>
                <input type="text" name="name"><br>
                <span>Enter author name</span>
                <input type="text" name="author"><br>
                <span>Enter category</span>
                <input type="text" name="caty"><br>
                <span>Enter price</span>
                <input type="number" name="price"><br>
                <span>Enter Quantity</span>
                <input type="number" name="quantity">
                <input type="submit" value="Insert">
            </form>
       <?php  } 
       if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['author'])&&isset($_POST['caty'])&&isset($_POST['price'])&&isset($_POST['quantity'])){
        $i=$_POST['id'];
        $n=$_POST['name'];
        $a=$_POST['author'];
        $c=$_POST['caty'];
        $p=$_POST['price'];
        $q=$_POST['quantity'];
       $sql = "INSERT INTO books (book_id,book_name,Author_name,category,Price,Quantity) VALUES($i,'$n','$a','$c',$p,$q)";
       if ($conn->query($sql) === TRUE) {
        echo "<div>Inserted Successfully &nbsp;<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      echo "<button onclick=back()>Back</button></div>";
      } ?>
       <?php if (isset($_POST['update'])) {?>
            <form method="post" action="4.php">
                <span>Enter book id to update</span>
                <input type="number" name="id"><br>
                <span>Enter book name</span>
                <input type="text" name="name"><br>
                <span>Enter author name</span>
                <input type="text" name="author"><br>
                <span>Enter category</span>
                <input type="text" name="caty"><br>
                <span>Enter price</span>
                <input type="number" name="price"><br>
                <span>Enter Quantity</span>
                <input type="number" name="quantity">
                <input type="submit" value="Update">
            </form>
       <?php  } ?>
       <?php if (isset($_POST['delete'])) {?>
            <form method="post" action="5.php">
                <span>Enter book id to detete</span>
                <input type="number" name="id"><br>
                <span>Enter book name</span>
                <input type="text" name="name"><br>
                <input type="submit" value="Delete">
            </form>
       <?php  } ?>
</body>  
<script>
    back=()=>{ 
    window.location.href="2.php";
   }
</script>
</html>
 