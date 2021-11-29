<?php

include "../config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"UPDATE `contacts` SET `status`='Read' WHERE id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:enquiry.php"); // redirects to all records page
    exit;       
}
else
{
    echo "Error updating status"; // display error message if not delete
}
