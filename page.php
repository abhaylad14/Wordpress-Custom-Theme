<?php get_header(); 
the_post(); ?>  
<main class="container" id="main" style="margin-top: 7%;">
<h1><?php the_title(); ?></h1>
<?php the_post_thumbnail(array(500,500)); ?>
<?php the_content(); ?>

</main>

<?php get_footer(); ?>
