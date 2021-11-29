<?php 
include 'menu.php';
include '../config.php';
if($_SESSION['admin']){
  ?>
<div class="main">
<section><h1 style="font-size:30px"> Admin</h1></section>
<div class="package_c">
<section data-aos="fade-up">
  <table class="table table-hover">
    <tr>
    <th scope="col">Sr.No.</th>
    <th scope="col">Admin Name</th>
    <th scope="col">Admin Password</th>
    </tr>
    
<?php

$records = mysqli_query($conn,"SELECT * FROM `admin`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td scope="row"><?php echo $data['id']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
  </tr> 
<?php
}
?>
</table>
<?php mysqli_close($conn);?>
</div>
</section>
</div>
<?php
}
?>