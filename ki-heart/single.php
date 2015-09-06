<?php load_template(TEMPLATEPATH . '/header3.php'); ?>

<main>
  <div class="container white">
     <div class="col-md-7 contents">
       <?php while(have_posts()): the_post(); ?>
         <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
         <h4>
         <span>Posted：<a href="<?php the_permalink(); ?>"><time datetime="<?php the_time('y-m-d'); ?>"></time>
         <?php the_time( get_option('date_format') ); ?></a></span>
         </h4>

         <?php the_content(); ?>
         <?php endwhile; ?>
     </div>
    <?php get_sidebar(); ?>
  </div>
</main>

<?php get_footer(); ?>


