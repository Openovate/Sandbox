<?php # search.inc
error_reporting(E_ALL); // 
ini_set('display_errors', '1');
include "connect_to_mysql.php";
?>
<?php # search.inc.php

//header file:
include_once ('./includes/header.inc');
?>
<?php

$terms= $_GET['terms'];
echo "You've searched for: " . $terms;

$sql= "SELECT * FROM products WHERE product_name ='Big Tree'"; 
//-run  the query against the mysql query function 
$result=mysql_query($sql);

while ($row = mysql_fetch_array($result)) { // While there are products that match the search criteria, assign their data to a variable and echo their details on a webpage


             $id = $row["id"];
             $product_name = $row["product_name"];
             $price = $row["price"];
             $details = $row["details"];
             $category = $row["category"];
                echo '<br/> <img name="image" src="inventory_images/' . $row['id'] . '.jpg" width="100" height="150"/>';
                echo '<br/>';
                echo '<br/> Product Name: '.$row['product_name'];
                echo '<br/>';
                echo '<br/> <a href="modules/productsdetails.inc.php?id=' . $id . '">Click Here To View Product Page</a>';
                echo '<br/>';
                echo '<br/>';

        }
mysql_close(); //closes the MySQL connection.
?>
<?php
// Include footer file 
include_once ('./includes/footer.inc');
?>