<?php get_header(); ?>
<div id="main">
    <div id="site_content">
    <div class="sidebar">

        <li id="categories"><?php _e('Categories:'); ?>
        <ul>
      <?php wp_list_cats(); ?>
        </ul>
      </li>

    </div>
      <div id="content">
        <?php 
        if (have_posts()) {
          while(have_posts()){
            the_post();
            $price = get_post_meta( $post->ID, 'price', true );
            $warranty = get_post_meta( $post->ID, 'warranty', true ); //second parameter passed is same as second parameter of product save. This is the key used.        
            ?>
            <h1><?php the_title();?></h1>
            <small><?php the_terms( $POST->ID, 'product_categories', 'Category : ','/'); ?></small>
            <p><?php the_content();?></p>
            <hr />
            <p>Price : <?php echo $price; ?><small style="float:right"><?php echo $warranty; ?> warranty</small></p>
            
        <?php
          }
        }
        ?>
      </div>
      <div><?php comments_template();?><div>
    </div>
    <?php get_footer(); ?>