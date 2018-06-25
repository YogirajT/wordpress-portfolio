<?php get_header(); ?>
<div id="main">
    <div id="site_content">
    <?php get_sidebar(); ?>
      <div id="content">
        <?php 
        if (have_posts()) {
          while(have_posts()){
            the_post();
            $rent_cost = get_post_meta( $post->ID, 'rent_cost', true );
			  ?>
            <h1><?php the_title();?></h1>
            <small><?php the_terms( $POST->ID, 'product_categories', 'Category : ','/'); ?></small>
            <p><?php the_content();?></p>
            <hr />
            <p>Rent Cost : <?php echo $rent_cost; ?></p>
        <?php
          }
        }
        ?>
      </div>
      <div><?php comments_template();?><div>
    </div>
    <?php get_footer(); ?>