<?php
    // Template Name: Home page
    get_header();
    $cat = get_categories(array('taxonomy'=>'category'));
    // print_r($cat); 
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-img.png" class="img-fluid" alt="">
    </div>
  </div>
  <div class="row">
    <?php foreach($cat as $catvalue) { ?>
    <div class="col-sm-2 card mx-2"><a class="card-body" href='<?php echo get_category_link($catvalue->term_id); ?>'><?php echo $catvalue->name ?> ( <?php echo $catvalue->count; ?> )</a></div>
    <?php } ?>
  </div>
 
</div>

</section>
<!-- End Hero -->


<?php get_footer();  ?>