<?php

include "../config.php"; // Using database connection file here

$package_id = $_GET['package_id']; // get id through query string

$del = mysqli_query($conn,"delete from packages where package_id = '$package_id'"); // delete query// delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:package.php"); // redirects to all records page
    exit;       
}
else
{
    echo "Error deleting record"; // display error message if not delete
}


?>