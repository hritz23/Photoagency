<?php 
include '../config.php';
include 'menu.php';
session_start();
if($_SESSION['admin']){
  ?>
<div class="main">

<section><h1 style="font-size:30px">User Reviews</h1></section>
<div class="package_c">
<section data-aos="fade-up">
  <table class="table table-hover">
    <tr>
    <th scope="col">Sr.No.</th>
    <th scope="col">User Name</th>
    <th scope="col">Message</th>
    <th scope="col">Created At</th>
    </tr>
    
<?php

$records = mysqli_query($conn,"SELECT * FROM `comment`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td scope="row"><?php echo $data['c_id']; ?></td>
    <td><?php echo $data['u_name']; ?></td>
    <td><?php echo $data['message']; ?></td>
    <td><?php echo $data['created_at']; ?></td>
  </tr> 
<?php
}
?>
</table>
<?php mysqli_close($conn);?>
</div>
</section>
<section></section>
</div><?php
}
?>
