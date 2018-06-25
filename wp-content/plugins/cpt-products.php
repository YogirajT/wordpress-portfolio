<?php
/*
Plugin Name: CPT Products
Plugin URI: http://wordpress.org/plugins/
Description: This a plugin to add prodducts CPT to your wordpress site.
Author: Yogiraj
Version: 1.0
*/

function category_init(){
    register_taxonomy( 
        'product_categories', 
        'products', //change after creating new post type
         array(
            'labels'=>array(
                'name'=>'Product Categories',
                'singular_name'=>'Product Category',
                'add_new_item'=>'Add new product Category',
                'edit_item'=>'Edit Product Category',
            ),
            'rewrite'=>array(
                'slug'=>'product-categories'
            ),
            'hierarchical'=>true
        ) 
    );
}

add_action( 'init', 'category_init' );

function product_init() {
    $args = array(
        'public' => true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'Products',
            'singular_name'=>'Product',
            'add_new'=>'Add new product',
            'add_new_item'=>'Add new product'
        ),
		'supports' => array(
		'author','custom-fields')
    );
    register_post_type( 'products', $args );
}

add_action( 'init', 'product_init' );

function render_my_meta_box( $post ){   //$post is added to pass post object to the function
    $price = get_post_meta( $post->ID, 'price', true );
    $warranty = get_post_meta( $post->ID, 'warranty', true ); //second parameter passed is same as second parameter of product save. This is the key used.
    ?>
        <p>
            <label for='price'>Price</label>
            <input type='text' name='price' id='price' value='<?php echo $price; ?>'>
        </p>
        <p>
            <label for='warranty'>Warranty</label>
            <input type='text' name='warranty' id='warranty' value='<?php echo $warranty; ?>'>
        </p>
    <?php
}

function adding_products_meta_boxes( $post ) {
    add_meta_box( 
        'product-info',
        __( 'Additional product info' ),  //label displayed above tab
        'render_my_meta_box', //callback function
        'products',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes_products', 'adding_products_meta_boxes' );



function product_save_update( $post_id ) {
    
    if(isset($_POST['price'])){
        update_post_meta( $post_id, 'price', $_POST['price'] );
    }
    if(isset($_POST['warranty'])){
        update_post_meta( $post_id, 'warranty', $_POST['warranty'] );
    }
}
add_action( 'save_post', 'product_save_update' );


?>