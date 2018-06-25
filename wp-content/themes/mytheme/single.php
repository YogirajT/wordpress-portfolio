<?php get_header(); ?>
<div id="main">
    <div id="site_content">
    <?php get_sidebar(); ?>
      <div id="content">
        <?php 
        if (have_posts()) {
          while(have_posts()){
            the_post();
            ?>
            <h1><?php the_title();?></h1>
            <p><?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} ?></p>
            <p><?php the_content();?></p>
        <?php
          }
        }
        ?>
      </div>
      <div><?php comments_template();?><div>
    </div>
    <?php get_footer(); ?>