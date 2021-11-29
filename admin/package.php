<?php 
include '../config.php';
include 'menu.php';
session_start();
if($_SESSION['admin']){
  ?>
<div class="main">

<section><h1 style="font-size:30px"> Packages</h1></section>
<div class="package_c">
<section data-aos="fade-up">
  <table class="table table-hover">
    <tr>
    <th scope="col">Package Name</th>
    <th scope="col">Package Type</th>
    <th scope="col">Package Details</th>
    <th scope="col">Package Images</th>
    <th scope="col">Edit</th>
    <th scope="col">Delete</th>
    </tr>
    
<?php

$records = mysqli_query($conn,"SELECT * FROM `packages`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['package_name']; ?></td>
    <td><?php echo $data['Package_type']; ?></td>
    <td><?php echo $data['Package_detail']; ?></td>
    <td><img src="<?php echo $data['package_img']; ?>"width="230" height="150" ></td>
    <td><a href="edit.php?package_id=<?php echo $data['package_id']; ?>" style="color: white;" ><button class="button_e">Edit <i class="fa fa-pencil"></i></button></a></td>
    <td><a href="delete.php?package_id=<?php echo $data['package_id']; ?>" style="color: white;" ><button class="button_d">Delete <i class="fa fa-trash-o"></i></button></a></td>
  </tr> 
<?php
}
?>
</table>
<button class="button_a"><a href="insert_package.php">Add More Packages</buttons>
<?php mysqli_close($conn);?>
</div>
</section>
</div><?php
}
?>