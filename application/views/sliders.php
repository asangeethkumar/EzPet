<style>
#testimonials {
  background-color: #ef8172;
  padding: 5% 15%;
  test-align:center;
}

.testimonial-text {
  font-size: 3rem;
  line-height: 1.5;
}

.testimonial-image {
  width: 30%;
  border-radius: 100%;
  margin: 20px;
}
.carousel-item{
	 padding: 7% 55%;
}

#press {
  background-color: #ef8172;
  padding-bottom: 3%;
}
.carousel-inner {
    left: 150;
}

.press-logo {
  width: 15%;
  margin: 20px 20px 50px;
}
</style>
  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Find a Pet For You</h2>
          <img class="testimonial-image" src="assets/images/1.jpg" alt="dog-profile">
        <!-- <em> <button type="button" class="btn btn-secondary">GET A PET</button></em>-->
		<em> <a href="<?php echo base_url('users/details/1');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET A PET</a></em>
        </div>
      <!--  <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Today's featured pets</h2>
        <img class="testimonial-image" src="assets/images/8.jpg" alt="lady-profile">
           <em> <button type="button" class="btn btn-secondary">GET THIS PET</button></em>
        </div>-->
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Take Care of Your Pet </h2>
        <img class="testimonial-image" src="assets/images/8.jpg" alt="lady-profile">
           <em> <button type="button" class="btn btn-secondary">Schedule Veterinarian Appointment</button></em>
        </div>
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Get The Best Service for Your Pet </h2>
        <img class="testimonial-image" src="assets/images/mainBanner.jpg" alt="lady-profile">
           <em> <button type="button" class="btn btn-secondary">Pet Services</button></em>
        </div>
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Are You A Pet Industry Professional?  </h2>
        <img class="testimonial-image" src="assets/images/mainBanner1.jpg" alt="lady-profile">
           <em> <button type="button" class="btn btn-secondary">For Pros</button></em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>


  <!-- Press -->

