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

#navpic
{
  margin: 20px;
}
#border
{
border: 10px solid #a1a1a1;
padding: 50px 100px;
background: #dddddd;
width:1365px;
height:528px;
border-radius: 99px;
}

  </style>


<body>


<nav class="navbar navbar-inverse" id = "navpic">
  <div class="container-fluid" id= "pic" >
    <div class="navbar-header">
  
 
  </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="jobcet.php">Home</a></li>
        <li><a href="jobcetadd.php">Add Job</a></li>
            <div id="custom-search-input">
                        </div>
  </div>
</div>
        
  </div>
</div>
      </ul>

    </div>
  </div>
</nav>
<div id = "border"> 
  <form action="job.php" method="post">
  <input type="text" name="search" placeholder="Search Jobs"/>
  <input type="submit" value="search"/>
  </form>
<div class="container">
  <?php 
  include ("config.php");
  if(isset($_POST['search'])){
  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]#i","","$searchq");

 
  $count = mysql_num_rows($query);
  
if($count ==0){
    $output = 'There was no search results!';
    $query = "Select * from job";
        $res = mysql_query($query);
      
      echo "<table class='table'>";

      while($row = mysql_fetch_array($res)){ 
        echo "<tr><tr><td><td>" .$row['jobname']; 
        echo "<td><td>" . "<input type = 'button' value = 'View' class='btn btn-primary'>" . "</td>";
  
      }
      echo "</table>";
    }else {
       $query = mysql_query("SELECT * FROM job WHERE jobname LIKE '%$searchq%'") or die ("could not search");
      while ($row = mysql_fetch_array($query)) {
        $jobname = $row['jobname'];
        $jobdetail = $row['jobdetail'];
        $id = $row['id'];

        $output .= '<div>'.$jobname.' '.$job_details.'</div>';
    }
  }
}
   ?> 
      
      
          
        

     
       
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer" align="center" style = "color: black;">
  <div class= "container">
   <p class="text-muted">Copy right @ Jobcet</p>
</div>
</footer>
</div>
</body>
</html>
