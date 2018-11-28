<?php
// Add Scripts yts short for youtube subscribers
function yts_add_scripts(){
    //Add Main Css
    wp_enqueue_style('yts-main-style',plugins_url(). '/youtubesubs/css/style.css');

    // Add Main JS

    wp_enqueue_script('yts-main-script',plugins_url(). '/youtubesubs/js/main.js');

    //Add youtube scripts
    wp_register_script('youtube', 'https://www.youtube.com/');
    wp_enqueue_script('youtube');
    
}

    //hooking them to wordpress

    add_action('wp_enqueue_scripts','yts_add_scripts');
    
    ?>