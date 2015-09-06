<?php load_template(TEMPLATEPATH . '/header3.php'); ?>

<main>
  <div class="container white">
     <div class="col-md-7 contents">
          <h2><?php wp_title(); ?></h2>
           <?php if ( have_posts()): ?>
           <ul>
           <?php while ( have_posts() ) : the_post(); ?>
           <li>
           <p>
           <span>日付：<a href="<?php the_permalink(); ?>"><time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span>
           </p>
           <a href="<?php the_permalink(); ?>"> </a>
           <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
           <a href="<?php the_permalink(); ?>">
           <?php if ( has_post_thumbnail() ) :
           the_post_thumbnail('post-thumbnails');
           else :
           echo '<img src="';
           bloginfo( 'template_url' );
           echo '/images/the_post_thumbnail_default.png" alt="デフォルト画像" />';
           endif; ?>
           </a>
           <p>
           <?php the_excerpt(); ?>
           </p>
           <p>
           <span>カテゴリー：<?php the_category(','); ?></span>
           <span><?php the_tags(); ?></span>
           </p>
           </li>
           <?php endwhile; ?>
           </ul>
           <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
           <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
           <?php endif; ?>
     </div>
    <?php get_sidebar(); ?>
  </div>
</main>

<?php get_footer(); ?>


