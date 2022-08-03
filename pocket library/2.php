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
#c{
  text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:28px;
    color:blue;
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
h3{
    text-align:center;
    font-family:Arial,helvetica,sans-serif;
    font-size:28px;
    color:white;
    background-color:black;
    margin-left:35%;
    width:30%; 
}
button{
  text-decoration:none;
  font-family:Arial,helvetica,sans-serif;
  font-size:16px;
  font-weight:600;
}
p{
  margin-left:35%;
}
  </style>
<body>
<h3 id="c">Admin Page</h3>
<table id="t2" align=center cellspacing=5px cellpadding=4px><tr><td><a href="3.php"><button>Manage Books</button></a></td>
<td><a href="6.php"><button>Manage Students</button></a></td>
<td><a href="9.php"><button>Manage Faculty</button></a></td></tr>
<tr><td><a href="12.php"><button>Premium Content</button></a></td>
<td><a href="13.php"><button>View</button></a></td>
<td><a href="14.php"><button>Fines</button></a></td>
<tr><td><a href="3.php"><button>Change UserID/Password</button></a></td>
<td><button onclick="logout();">Logout</button></td>
<td><button onclick="back();">Back</button></td>
</table>
</body>
<script>
   back=()=>{ 
    window.location.href="1.php";
   }
   logout=()=>{
    window.location.replace("1.php");
    alert("logout successful!");
   }
</script>
</html>