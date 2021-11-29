<?php 
include '../config.php';
include 'menu.php';
?>
<div class="main">

<section><h1 style="font-size:30px">Enquiries</h1></section>
<div class="package_c">
<section data-aos="fade-up">
  <table class="table table-hover">
    <tr>
    <th scope="col">Sr.No.</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone No.</th>
    <th scope="col">Loaction</th>
    <th scope="col">Subject</th>
    <th scope="col">Message</th>
    <th scope="col">Sended Date</th>
    <th scope="col">Status</th>
    </tr>
<?php

$records = mysqli_query($conn,"SELECT * FROM `contacts`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td scope="row"><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['phone']; ?></td>
    <td><?php echo $data['location']; ?></td>
    <td><?php echo $data['subject']; ?></td>
    <td style="padding: 30px"><?php echo $data['message']; ?></td>
    <td><?php echo $data['created_at']; ?></td>
    <td><button class="button_d"><a href="status.php?id=<?php echo $data['id']; ?>" style="color: white;" ><?php echo $data['status'];?></a></button></td>
  </tr> 
<?php
}
?>
</table>
<?php mysqli_close($conn);?>
</div>
</section>
</div>