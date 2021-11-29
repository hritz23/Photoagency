<?php
include '../config.php';
include 'menu.php';
$product_id = $_GET['product_id']; // get id through query string

$qry = mysqli_query($conn,"select * from products where product_id='$product_id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['submit'])) // when click on Update button
{
    $product_name = $_POST['product_name'];
    $product_detail = $_POST['product_detail'];
        
    $edit = mysqli_query($conn,"update products set product_name='$product_name', product_detail='$product_detail' where product_id='$product_id'");
    
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:product.php"); // redirects to all records page
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
<label>Enter product Name:</label></div>
        <div class="col-75">
<input type="text" name="product_name" value="<?php echo $data['product_name'] ?>" Required></div></div>

        <div class="row">
        <div class="col-25">
  <label>Enter product Details: </label></div>
  <div class="col-75">
  <textarea class="form-control" name="product_detail" rows="5" cols="60" Required><?php echo $data['product_detail'] ?></textarea></div></div>

<input type="submit" name="submit" value="Update" class="button_e">
</div></div>