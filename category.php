<?php get_header(); ?>
<div class="container row mx-auto" style="margin-top: 5%;">
<?php get_sidebar(); ?>

  <main id="main" class="col">
    
  <div class="container col row mx-auto">
    <?php 
      while(have_posts(  )){
        the_post();
    ?>
    <div class="card col my-2 mx-3">
      <div class="card-body">
      <?php
      $imgpath = wp_get_attachment_image_src( get_post_thumbnail_id()); 
      if($imgpath){
        echo "<img class='img-fluid' src='$imgpath[0]' alt=''>";
      }
      ?>
      <h5 class="card-title mt-3"><?php the_title(); ?></h5>
       <p><?php the_excerpt(); ?></p>
       <p><?php echo get_the_date(); ?></p>
        <a href="<?php the_permalink(); ?>"><input class="btn btn-primary btn-sm" type="button" value="Read More" /></a>
      </div>
    </div>
    <?php }  echo wp_pagenavi();?>
    </div>

   

    

  </main><!-- End #main --></div>
  <script>
    let widgets = document.getElementsByClassName("widget");
    for(let i =0; i < widgets.length; i++){
      widgets[i].classList.add("nav-link");
      widgets[i].classList.add("text-dark");
    }

  </script>
<?php get_footer(); ?>
