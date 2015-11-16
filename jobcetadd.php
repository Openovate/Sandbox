<!DOCTYPE>
<html>
	<head>
		<title>Add Job</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>

<style>

#border{
border: 10px solid #a1a1a1;
padding: 50px 100px;
background: #dddddd;
width:1350px;
height:528px;
border-radius: 99px;
}

body {
   margin:0;
   padding:0;
   height:100%;
}
#container {
   min-height:100%;
   position:relative;
}
#header {
  
   padding:0px;
}
#body {
   padding:10px;
   padding-bottom:60px;  
}
#footer {
   position:absolute;
   bottom:-80;
   width:100%;
   height:60px;   
   
}
#pic 
{
  padding: 5px;
  height: 0px;

}

#navpic{
  margin: 20px;
}

div.relative {
    position: relative;
    width: 500px;
    height: 270px;
     margin-top: 10px;
    margin-bottom: 0px;
    margin-right: 150px;
    margin-left: 450px;
   
} 
#notif{
  width:400px;
   position: relative;
   text-align: center;
    margin-left: 350px;
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
        <li><a href="joblist.php">Joblist</a></li>
        <li><a href="jobcetcontact.php">Contact Us</a></li>

          
    </div>
      </ul>
  </div>
</div>
</nav>
<div id = "border">

<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("jobset", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$jobname = $_POST['jobname'];

$desc = $_POST['desc'];
if($jobname !=''||$desc !=''){
//Insert Query of SQL
$query = mysql_query("insert into job(jobname,jobdetails) values ('$jobname', '$desc')");
echo "<div class=' alert alert-success' role='alert' id='notif'> Data Successfully Inserted! </div>";
}
else{
echo "<div class=' alert alert-danger' role='alert' id='notif'>Please fill in the Blank.</div>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
 
		

<div class="relative"><form action="jobcetadd.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Add Job</h2>
<label>Jobname:</label><br>
<input cols="25" name="jobname" rows="1"></input ><br>

<label>description: &nbsp;</label>
<br>
<textarea cols="25" name="desc" rows="5"></textarea ><br>
<br>
<input class="btn btn-primary" value="Add" name="submit" type="submit" >
</form>

<div id="footer" align = "left" color="black"><br><br><br><br><br><p class="text-muted">Copy right @ Jobcet</p></div>




</form>
</div>
</div>





</body>
</html>
