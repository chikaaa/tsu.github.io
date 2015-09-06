<?php
/*
Template Name: page2
*/
?>
<?php load_template(TEMPLATEPATH . '/header3.php'); ?>

<main>
  <div class="container white">
     <div class="col-md-7 contents">
       <p>
         <?php while(have_posts()): the_post(); ?>
         <?php the_content(); ?>
         <?php endwhile; ?>
       </p>
     </div>
    <?php get_sidebar(); ?>
  </div>
</main>

<?php get_footer(); ?>


