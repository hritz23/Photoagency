<?php 
include 'menu.php';
include '../config.php';
session_start();
?>



<div>
      <?php  if(!$_SESSION['admin']){
      		header("Location: login.php");
      	?>
      
      <?php } 
      else { ?>
      	<div class="main">
                  <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

<div class="row">
<?php

$records = mysqli_query($conn,"SELECT * FROM `users`"); 
$records1 = mysqli_query($conn,"SELECT * FROM `packages`");
$records2 = mysqli_query($conn,"SELECT * FROM `contacts`");
$records3 = mysqli_query($conn,"SELECT * FROM `comment`");
$records4 = mysqli_query($conn,"SELECT * FROM `products`");// fetch data from database
$rowcount=mysqli_num_rows($records);
$rowcount1=mysqli_num_rows($records1);
$rowcount2=mysqli_num_rows($records2);
$rowcount3=mysqli_num_rows($records3);
$rowcount4=mysqli_num_rows($records4);
?>
          <div class="col-85">
            <div class="zoom">
              <span><i class="fa fa-user" style='font-size:40px'></i></span>
              <h3>USER'S</h3>
              <span style="font-size: 40px;"><?php echo $rowcount ?></span>
            </div>
          </div>
    </div>

<div class="row">
        <div class="col-85">
            <div class="zoom">
              <span><i class="fa fa-suitcase" style='font-size:40px'></i></span>
              <h3>PACKAGE'S</h3>
              <span style="font-size: 40px;"><?php echo $rowcount1 ?></span>
            </div>
          </div>
    </div>
<div class="row">
        <div class="col-85">
            <div class="zoom">
              <span><i class="fa fa-folder-open" style='font-size:40px'></i></span>
              <h3>ENQUIRIE'S</h3>
              <span style="font-size: 40px;"><?php echo $rowcount2 ?></span>
            </div>
          </div>
    </div>
<div class="row">
        <div class="col-85">
            <div class="zoom" >
              <span><i class="fa fa-folder-open" style='font-size:40px'></i></span>
              <h3>REVIEW'S</h3>
              <span style="font-size: 40px;"><?php echo $rowcount3 ?></span>
            </div>
          </div>
    </div>
    <div class="row">
        <div class="col-85">
            <div class="zoom" data-aos="zoom-in" data-aos-delay="100">
              <span><i class="fa fa-folder-open" style='font-size:40px'></i></span>
              <h3>PRODUCT'S</h3>
              <span style="font-size: 40px;"><?php echo $rowcount4 ?></span>
            </div>
          </div>
          <?php mysqli_close($conn);?>
    </div>
</section>

   </div>
</div>
	<?php }?>