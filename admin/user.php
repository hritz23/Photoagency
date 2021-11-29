<?php 
include '../config.php';
include 'menu.php';
session_start();
if($_SESSION['admin']){
  ?>

<div class="main">

<section><h1 style="font-size:30px">Users</h1></section>
<div class="package_c">
<section data-aos="fade-up">
  <table class="table table-hover">
    <tr>
    <th scope="col">Sr.No.</th>
    <th scope="col">Name</th>
    <th scope="col">Username</th>
    <th scope="col">User Email</th>
    </tr>
    
<?php

$records = mysqli_query($conn,"SELECT * FROM `users`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td scope="row"><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['email']; ?></td>
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