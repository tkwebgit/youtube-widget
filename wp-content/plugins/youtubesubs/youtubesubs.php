<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://tkweb.se
Description: subscription to my youtube channel
Version: 0.1.0
Author: kamande
Author URI: tkweb.com
*/


//Exit if accessed directly for security reasons
if(!defined('ABSPATH')){
    exit;
}

//access plugin directory and load scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

//load class

require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');



//Register Widget
function register_youtubesubs(){
    register_widget('Youtube_subs_Widget');
    
   
}

//Hook in function
add_action('widgets_init', 'register_youtubesubs');




