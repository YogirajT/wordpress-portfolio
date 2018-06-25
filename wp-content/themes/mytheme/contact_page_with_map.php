<?php /* Template Name: contact_page_with_map */ ?>
<?php get_header(); ?>
<div id="main">
    <div id="site_content">
      <div id="content">
        <?php 
        if (have_posts()) {
          while(have_posts()){
            the_post();
            ?>
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p>
        <?php
          }
        }
        ?>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15072.513823371168!2d72.97162188354496!3d19.18959097783585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a2bc4d4b4644d0e!2sFierydevs+Software!5e0!3m2!1sen!2sin!4v1513853822084" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <?php get_footer(); ?>