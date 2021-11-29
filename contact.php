<?php
include 'header1.php'; 
include 'config.php';

session_start();
if(isset($_POST['submit']))
{   

$status="Pending";
$insert = 
mysqli_query($conn,"insert into contacts (name, email, phone, location, subject, message, status)values ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[location]','$_POST[subject]','$_POST[message]','$status')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "<script>alert('we will soon contact you!!, thankyou.')</script>";
        header("location:contact.php");
        exit;
    }
}
?>


<section></section>

<section class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.111078489971!2d73.01536181490029!3d19.014826387123033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c33de97f0449%3A0xb06cde7251e819fe!2sVedant%20Digi%20albums!5e0!3m2!1sen!2sin!4v1628939479149!5m2!1sen!2sin"frameborder="0"></iframe>
      </div>

      <div class="container" id="contact" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Om Prathamesh, Seawood, Navi Mumbai-400706</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  10:00 AM - 21:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>vedantdigialbums@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 9920530865</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form  action="" method="POST" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="text" name="phone" class="form-control" placeholder="Your Contact Number" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="text" class="form-control" name="location" placeholder="Your Location" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              
              <div class="text-center"><input type="submit" name="submit" value="Submit"></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

<?php
include 'footer.php';
?>