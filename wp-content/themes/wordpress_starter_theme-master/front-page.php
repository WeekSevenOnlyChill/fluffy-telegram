<?php get_header();  ?>
<div class = "hero">
       <h2> <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'description'); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a></h2>
</div>
<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <h2><?php the_title(); ?></h2>
        <h3> <?php the_field('subtitle');?></h3>
        <p> <?php the_field('bio'); ?></p>

        <?php $image = get_field('image'); ?>
        <pre><?php print_r($image);?></pre>
        <img src="<?php echo $image['sizes']['square'] ?>">
        <?php the_content(); ?>


      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>