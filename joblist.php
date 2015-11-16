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
    right: 300px;
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

#border{
border: 10px solid #a1a1a1;
padding: 50px 100px;
background: #dddddd;
width:1365px;
height:900px;
border-radius: 99px;
}







  </style>


<body>


<nav class="navbar navbar-inverse" id = "navpic">
  <div class="container-fluid" id= "pic" >
    <div class="navbar-header">
    
   <ul class="nav navbar-nav">
        <li><a href="jobcet.php">Home</a></li>
        <li><a href="jobcetadd.php">Add Job</a></li>

                                  
            
        
      </ul>
 
  </div>
    
    

    </div>
  </div>
</nav>


  
<div class="container">
		

        <form method="GET" action="search.php">
         <input type="text" class="search-query form-control" placeholder="Search" name= "search"><br>
         <input class="btn btn-danger" type="hidden" name="searchbtn" id="searchbtn"/>    
          </form>
			<?php 
				require ("config.php");
					
				$query = "Select * from job";
				
			echo "<table class='table table-bordered'>";
			
			foreach($conn->query($query) as $id){
				echo "<tr><td> <legend> $id[jobname]</legend> <form method='POST' action='details.php'> <a href=details.php?id=$id[id]> <input type= button name=view class = 'btn btn-primary' value='View details'  /></a></form>" ;
			}
				
			echo "</table>";
			
			
			
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
