<?php
/*
Template Name: page1
*/
?>

<?php load_template(TEMPLATEPATH . '/header2.php'); ?>

<main>
  <div class="container white">
     <p>
         <?php while(have_posts()): the_post(); ?>
         <?php the_content(); ?>
         <?php endwhile; ?>
     </p>
  </div>
</main>

<?php get_footer(); ?>