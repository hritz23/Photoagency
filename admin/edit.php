<?php
include '../config.php';
include 'menu.php';
$package_id = $_GET['package_id']; // get id through query string

$qry = mysqli_query($conn,"select * from packages where package_id='$package_id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['submit'])) // when click on Update button
{
    $package_name = $_POST['package_name'];
    $Package_type = $_POST['Package_type'];
    $Package_detail = $_POST['Package_detail'];
        
    $edit = mysqli_query($conn,"update packages set package_name='$package_name', Package_type='$Package_type', Package_detail='$Package_detail' where package_id='$package_id'");
    
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:package.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }       
}
?>
<div class="main">
<h2>Update Data</h2>
<div class="package_c">
<form method="POST" class="">
    <div class="row">
        <div class="col-25">
<label>Enter Package Name:</label></div>
        <div class="col-75">
<input type="text" name="package_name" value="<?php echo $data['package_name'] ?>" Required></div></div>
<div class="row">
        <div class="col-25">
<label>Enter Package Type:</label></div>
        <div class="col-75">
<input type="text" class="form-control" name="Package_type" value="<?php echo $data['Package_type'] ?>" Required></div></div>
        <div class="row">
        <div class="col-25">
  <label>Enter Package Details: </label></div>
  <div class="col-75">
  <textarea class="form-control" name="Package_detail" rows="5" cols="60" Required><?php echo $data['Package_detail'] ?></textarea></div></div>

<input type="submit" name="submit" value="Update" class="button_e">
</div></div>