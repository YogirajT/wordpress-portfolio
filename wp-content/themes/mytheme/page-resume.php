<?php get_header(); ?>
<div id="main">
    <div id="site_content">
    <?php get_sidebar(); ?>
      <div id="content">
		<?php 
		// the query
		
		// $args = array(
		// 'post_type' => array('products','posts','page'),
		// 'order_by'=> 'title',
		// 'order' => 'DESC'
		// );
		
		$args = array(
				'post_type' => 'products',
				'tax_query' => array(
					array(
						'taxonomy' => 'product_categories',  //term
						'field'    => 'slug',
						'terms'    => array('mob','elect')
					),
				),
			);

		
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<h1><?php the_title();?></h1>
				<p><?php the_content();?></p>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
      </div>
    </div>
    <?php get_footer(); ?>