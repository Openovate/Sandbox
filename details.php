<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOBCET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<style>
.right {
    position: absolute;
    right: 100px;
    width: 300px;
    padding: 10px;
}
</style>

 <style>
  .carousel-inner > .item > width: 2000px;  img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
      align: left;
  }

#pic 
{
  padding: 5px;
  height: 0px;

}

#navpic{
  margin: 20px;
}


  </style>


<body>


<nav class="navbar navbar-inverse" id = "navpic">
  <div class="container-fluid" id= "pic" >
    <div class="navbar-header">
  
 
  </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="jobcet.php">Home</a></li>
        <li><a href="jobcetadd.php">Add Job</a></li>
           
                            </div>
                        </div>
  </div>
</div>
        
  </div>
</div>
      </ul>

    </div>
  </div>
</nav>
  
<div class="container">
<?php	
require ("config.php");

$id=mysql_real_escape_string($_GET['id']);
$query  = "Select jobname,jobdetails from job where id = '$id'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<legend>" . $row["jobname"]. "</legend>"."<b> Job Description:</b> <br />" . $row["jobdetails"]. "<br>";
    }
} else {
    echo "0 results";
}
	echo "<a href='joblist.php'> Go Back </a>";

$conn->close();
				
?>		
           
 
<br>
<footer class="footer" align="center" style = "color: black;">
  <div class= "container">
   <p class="text-muted">Copy right @ Jobcet</p>
</div>
</footer>
</div>
</body>
</html>
