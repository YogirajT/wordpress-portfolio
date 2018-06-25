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
            <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
            <p><?php the_excerpt();?></p>
        <?php
          }
        }
        ?>
      </div>
    </div>
    <?php get_footer(); ?>