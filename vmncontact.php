

<?php
include 'header.php';
?>


<style>

html,
body,
header,
.view {
height: 100%;
}

</style>

<!-- Main navigation -->
<header>

<!-- Full Page Intro -->
<div class="view"style="background-image: url('images/newcon.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; height:90%">
<!-- Mask & flexbox options-->
<div class="mask">
<!-- Content -->
<div class="container h-100">
<!--Grid row-->
<div class="row align-items-center h-100">
<!--Grid column-->
<div class="col-md-7 wow fadeInLeft" data-wow-delay="0.2s">
<h1 class="h1 white-text mb-4 text-uppercase font-weight-bold">contact us</h1>
<hr class="w-header danger-color ml-n1 w-25">
<p class="mb-4 pb-2 white-text text-capitalize font-weight-bolder" style="font-size: 20px;">let's us talk about your business strategy in digital environment,<br> how to change your business today in digital world <br>within business analytics, making decision to the experience analytics.</p>

</div>
<!--Grid column-->

<!--Grid column-->

</div>
<!--Grid row-->
</div>
<!-- Content -->
</div>
<!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->

</header>
<!-- Main navigation -->

<div class="container">

<!--Section: Contact v.2-->
<section class="section text-center text-capitalize">
<form id="contact-form" name="contact-form" action="mail.php" method="POST">
<!--Section heading-->
<h2 class="font-weight-bold title h1 mt-5"><span style="color: darkblue;">talk to us</span></h2>
<!--Section description-->
<h4 class="w-responsive mx-auto mb-5 font-weight-bolder text-capitalize text-center dark-text" style="color: yellowgreen;">Fill the form with your query, we will try to revert you back in 24hrs.</h4>

<div class="row">

<!--Grid column-->
<div class="col-md-8 col-xl-9 mb-4">
<form>


<!--Grid row-->
<div class="row font-weight-bolder">

<!--Grid column-->
<div class="col-md-6">
<div class="md-form mb-0">
<div class="md-form mb-0">
<input type="text" name="fname" id="contact-name" class="form-control">
<label for="contact-name" class="">first name <span style="color: red;">*</span></label>
</div>
</div>
</div>
<!--Grid column-->
<div class="col-md-6">
<div class="md-form mb-0">
<div class="md-form mb-0">
<input type="text" name="lname" id="contact-name" class="form-control">
<label for="contact-name" class="">last name <span style="color: red;">*</span></label>
</div>
</div>
</div>
<!--Grid column-->
<div class="col-md-6">
<div class="md-form mb-0">
<div class="md-form mb-0">
<input type="text" name="email" id="contact-email" class="form-control">
<label for="contact-email" class="">email<span style="color: red;">*</span></label>
</div>
</div>
</div>
<!--Grid column-->
<div class="col-md-6">
<div class="md-form mb-0">
<div class="md-form mb-0">
<input type="text" name="phone" id="contact-email" class="form-control">
<label for="contact-email" class="">mobile no.<span style="color: red;">*</span></label>
</div>
</div>
</div>

</div>
<!--Grid row-->

<!--Grid row-->
<div class="row font-weight-bolder">
<div class="col-md-12">
<div class="md-form mb-0">
<input type="text" name="subject" id="contact-Subject" class="form-control">
<label for="contact-Subject" class="">Subject <span style="color: red;">*</span></label>
</div>
</div>
</div>
<!--Grid row-->

<!--Grid row-->
<div class="row font-weight-bolder">

<!--Grid column-->
<div class="col-md-12">

<div class="md-form mb-0">
<textarea type="text" name="message" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
<label for="contact-message">write your query here<span style="color: red;">*</span></label>
</div>

</div>
</div>
<!--Grid row-->

</form>

<div class="text-center text-md-left mt-4 darken-4">
<button type="submit" class="btn btn-unique btn-rounded font-weight-bold ml-lg-0">Submit<i class="far fa-paper-plane ml-2"></i></button>

</div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-4 col-xl-3">
<ul class="list-unstyled contact-icons">
<li>
<i class="fas fa-map-marker-alt fa-2x blue-text"></i>
<p class="font-weight-bold">click to get address</p>
</li>

<li>
<a href="tel:9911190803"> 
<i class="fas fa-phone fa-2x blue-dark"></i>
<p class="font-weight-bold">+91-9911190803</p>
</a>
</li>

<li>
<a href="tel:9716531488"> 
<i class="fas fa-phone fa-2x blue-text"></i>
<p class="font-weight-bold">+91-9716531488</p>
</a>
</li>


<li>
<a href="mailto:contact@vmninfo.com?subject=subject&cc=contact@vmninfo.com">
<i class="fas fa-envelope fa-2x blue-text"></i>
<p class="font-weight-bold">contact@vmninfo.com</p>
</a>
</li>
</ul>
</div>
<!--Grid column-->

</div>
</form>
</section>
<!--Section: Contact v.2-->
<hr>
</div>
</div>

</div>
</div>

</main>
<!--Main Layout-->


<?php
include 'footer.php';
?>
