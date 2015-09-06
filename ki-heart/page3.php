<?php
/*
Template Name: page3
*/
?>
<?php load_template(TEMPLATEPATH . '/header4.php'); ?>

<main>
  <div class="container ">
         <?php while(have_posts()): the_post(); ?>
         <?php the_content(); ?>
         <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
