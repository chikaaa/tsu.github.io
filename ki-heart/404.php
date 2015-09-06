<?php load_template(TEMPLATEPATH . '/header2.php'); ?>

<main>
  <div class="container white">
     <h3>SORRY !</h3>
       <p>Document or file requested was not found...</p>
       <h2>404</h2>
       <div class="back-to-home">
       <a href="<?php echo home_url(); ?>">Go Back to Home</a>
     </div>
  </div>
</main>

<?php get_footer(); ?>