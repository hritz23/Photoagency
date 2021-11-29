<?php
include 'config.php';
include 'header1.php';
session_start();
if(!$_SESSION['user']){
      echo '';
}
else { 
if(isset($_POST['submit']))
{   
$u_name=$_SESSION['user'];

$insert =
mysqli_query($conn,"insert into comment (u_name,message) values ('$u_name','$_POST[message]') ");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "<script>alert('Done!')</script>";
        header("Location: review.php");
        exit;
    }
}
?>
<section></section>
<div class="package_c overflow-x:auto">
<section data-aos="fade-up"id="review">
    <h1>Write A Review</h1>
  <hr>
  <form action="" method="POST">
  <label>Comment</label><br><br>
  <input type="hidden" id="u_name" name="u_name" value="<?php echo $_SESSION['user']; ?>">
<textarea name="message" rows="5" placeholder="Message" required></textarea>
<input type="submit" name="submit" value="Submit" class="button_a">
</form>
</div>
</section>
<?php 
}
?><section></section>
<div class="package_c overflow-x:auto">
<section data-aos="fade-up">
    <h1>Customer Reviews</h1><br>
    <?php

$records = mysqli_query($conn,"SELECT * FROM `comment`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h5><?php echo $data['u_name']; ?></h5></div><hr>
    <div id="view-details">
        <p><em>Message:</em></p>
      <li> <?php echo $data['message']; ?></li>
      <p style="float:right;"><?php echo $data['created_at']; ?></p>
    </div>
  
</div><br><br>
<?php
}
?>                   

</section>
</div>

<?php 

mysqli_close($conn);?>
<?php
include 'footer.php';?>