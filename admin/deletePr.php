<?php

include "../config.php"; // Using database connection file here

$product_id = $_GET['product_id']; // get id through query string

$del = mysqli_query($conn,"delete from products where product_id = '$product_id'"); // delete query// delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:product.php"); // redirects to all records page
    exit;       
}
else
{
    echo "Error deleting record"; // display error message if not delete
}


?>