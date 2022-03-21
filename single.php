<?php get_header(); the_post(); ?>
<div class="container mb-3 row mx-auto" style="margin-top: 5%;">
<?php get_sidebar(); ?>
    <div class="card col-sm-6">
        <div class="card-body">
            <h2><?php the_title(); ?></h2>
            <?php
      $imgpath = wp_get_attachment_image_src( get_post_thumbnail_id()); 
      if($imgpath){
        echo "<img class='img-fluid' src='$imgpath[0]' alt=''>";
      }
      ?>
      <p class="mt-2"><?php echo get_the_date(); ?></p>
      <p>By: <?php the_author(); ?></p>
      <div class="my-3"><?php the_content(); ?></div>
      <?php comments_template(); ?>
        </div>
    </div>
</div>
<script>
    let cbody = document.getElementsByClassName("comment-body");
    // x.classList.add("mystyle");
    for(let i=0; i< cbody.length; i++){
        cbody[i].classList.add("card");
        cbody[i].classList.add("card-body");
    }

    let text = document.getElementById("comment");
    text.classList.add("form-control");
    text.removeAttribute("rows");
    text = document.getElementById("author");
    text.classList.add("form-control");
    text = document.getElementById("email");
    text.classList.add("form-control");
    text = document.getElementById("url");
    text.classList.add("form-control");
    let btn = document.getElementById("submit");
    btn.classList.add("btn");
    btn.classList.add("btn-primary");

</script>
<script>
    let widgets = document.getElementsByClassName("widget");
    for(let i =0; i < widgets.length; i++){
      widgets[i].classList.add("nav-link");
      widgets[i].classList.add("text-dark");
    }

  </script>
<?php get_footer(); ?>