<?php 
include '../config.php';
include 'menu.php';
session_start();
if($_SESSION['admin']){
  ?>
<div class="main">

<section><h1 style="font-size:30px"> Products</h1></section>
<div class="package_c">
<section data-aos="fade-up">
  <table class="table table-hover">
    <tr>
    <th scope="col">Product Name</th>
    <th scope="col">Product Details</th>
    <th scope="col">Product Images</th>
    <th scope="col">Edit</th>
    <th scope="col">Delete</th>
    </tr>
    
<?php

$records = mysqli_query($conn,"SELECT * FROM `products`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_detail']; ?></td>
    <td><img src="<?php echo $data['product_img']; ?>"width="250" height="200" ></td>
    <td><a href="editPr.php?product_id=<?php echo $data['product_id']; ?>" style="color: white;" ><button class="button_e">Edit <i class="fa fa-pencil"></i></button></a></td>
    <td><a href="deletePr.php?product_id=<?php echo $data['product_id']; ?>" style="color: white;" ><button class="button_d">Delete <i class="fa fa-trash-o"></i></button></a></td>
  </tr> 
<?php
}
?>
</table>
<button class="button_a"><a href="addproduct.php">Add More Products</buttons>
<?php mysqli_close($conn);?>
</div>
</section>
</div><?php
}
?>