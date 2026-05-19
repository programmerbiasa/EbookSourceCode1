<?php
   // chapter 30 Using PHP With MySQL; listing30-1.php  

   // Create a new server connection
   $mysqli = new mysqli("127.0.0.1", "catalog_user", "secret", "catalog_prod");

   // Create the query and corresponding placeholders
   $query = "INSERT INTO product SET id=NULL, sku=?, name=?, price=?, description=?";
   
   // Create a statement object
   $stmt = $mysqli->stmt_init();

   // Prepare the statement for execution
   $stmt = $mysqli->prepare($query);

   // Bind the parameters
   $stmt->bind_param('ssds', $sku, $name, $price, $description);

   // Assign the posted productid array
   $productidarray = $_POST['productid'];

   // Assign the posted name array
   $namearray = $_POST['name'];

   // Assign the posted price array
   $pricearray = $_POST['price'];

   // Assign the posted description array
   $descarray = $_POST['description'];

   // Initialize the counter
   $x = 0;

   // Cycle through each posted URL in the array, and iteratively execute the query
   while ($x < sizeof($productidarray)) {

      $productid = $productidarray[$x];
      $name = $namearray[$x];
      $price = $pricearray[$x];
      $description = $descarray[$x];

      $stmt->execute();

   }

   // Recuperate the statement resources
   $stmt->close();

   // Close the connection
   $mysqli->close();

?>
