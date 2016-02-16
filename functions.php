<?php
/*-------------- Enable Widgets--------------- */

function blank_template_widgets() {
    register_sidebar( array(
        'name' => ('My First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
    }
add_action('widgets_init', 'blank_widgets_init');
?>