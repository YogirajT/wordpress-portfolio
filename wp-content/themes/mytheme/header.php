<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>night_sky</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <?php wp_head(); ?>
    
    <style type="text/css" id="custom-background-css">
    body.custom-background { background-color: #000000; }
    </style>
</head>

<body>
<div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="<?php bloginfo('url'); ?>">&lt;yii2_&gt;<span class="logo_colour"><?php bloginfo('name'); ?></span></a><span>          <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            } ?></span></h1>
          <h2><?php bloginfo('description'); ?></h2>
        </div>
      </div>
      <div id="menubar">
        <!--<ul id="menu">
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li><a href="page.html">A Page</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>-->
        <?php wp_nav_menu(array(
            'menu'=> 7,
            'menu_id'=>'menu'   

        ));?>
      </div>
    </div>