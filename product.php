<?php
include 'header1.php';
include 'config.php';
?>
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/style.css">                                   <!-- Templatemo style -->
<section></section>

        <section class="tm-section" data-aos="fade-up">
            <div class="container-fluid overflow-x:auto">
                <div class="section-title">
          <h2>Products</h2>
          <p>Our Products</p>
        </div>
                <div class="row">
                    <?php

$records = mysqli_query($conn,"SELECT * FROM `products`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-6">

                        <div class="tm-content-box">
                            <img src="admin/<?php echo $data['product_img']; ?>" class="tm-margin-b-20 img-fluid imgBox">
                            <h2 class="tm-margin-b-20 tm-gold-text"><?php echo $data['product_name']; ?></h2>
                            <p class="tm-margin-b-20"><?php echo $data['product_detail']; ?></p>
                            <a href="contact.php#contact"><button class="buttona"><span>Send Enquiry</span></button></a>    
                        </div>  
                    </div>
<?php
}
?>                   
                </div> <!-- row -->
                    
                                
                                
                                           <!-- row -->

            </div>
        </section>
        
        <!-- load JS files -->
        <script src="assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
<!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="assets/js/bootstrap1.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
<?php
include 'footer.php';
?>