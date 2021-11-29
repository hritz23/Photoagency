<?php 
include '../config.php';
include 'menu.php';
?>


<?php
include "../config.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variabl  // generate random number in $var2 variable
	 // concatenate $var1 and $var2 in $var3
    $var3 = md5($var1);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($conn,"insert into products(product_name,product_detail,product_img) values('$_POST[name]','$_POST[detail]','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
      header("location:product.php");
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
}
?>
<div class="main">
<h2>Insert Product Data</h2>
<div class="package_c">
<form method="post" enctype="multipart/form-data">
 <div class="row">
      <div class="col-25">
      <label>Enter Name:</label>
    </div>
      <div class="col-75">
      <input type="text" name="name" placeholder="Enter Name" Required>
    </div>
  </div>

  <div class="row">
      <div class="col-25">
      <label>Enter Detail:</label>
    </div>
    <div class="col-75">
      <textarea name="detail" placeholder="Enter Details" Required></textarea></div></div>
    <div class="row">
      <div class="col-25">
      <label>Select Image:</label></div>
      <div class="col-75">
      <input type="file" name="image" Required>
    </div></div>
    <br>
      <input type="submit" name="submit" value="Upload" class="button_e">
</form>
</div>

</div>