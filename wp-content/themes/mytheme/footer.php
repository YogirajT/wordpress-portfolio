    <div id="footer">
    <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
    <ul id="sidebar">
        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    </ul>
<?php endif; ?>
    </div>
  </div>
  
 <?php wp_footer(); ?> 
</body>
</html>