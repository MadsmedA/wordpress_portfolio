<?php

register_nav_menus(array(
    'main menu' => 'Main Menu',
    'footer menu' => 'Footer Menu'
));

register_sidebar(array(
    'name'          => 'Sidebar for blogs',
    'id'            => 'blogs-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
));
?>