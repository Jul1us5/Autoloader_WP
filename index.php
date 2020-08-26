<?php
/**
* Plugin Name: AddEvents
* Plugin URI:
* Description: Admins function to add, edit or remove Events.
* Version: 1.0
* Author: PL
* Author URI:
**/

add_action('admin_menu', function(){
    add_menu_page( 'Events', 'Events', 'manage_options', 'events', 'event_list');
});




use MyApp\Models\Model;
use MyApp\Controllers\Controller;


function event_list(){

    
    
    require 'vendor/autoload.php';

    echo "<br/>";
    $model = new Model;
    echo "<br/>";
    $controller = new Controller; 
    
       
}