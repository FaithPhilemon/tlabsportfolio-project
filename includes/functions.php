<?php

function display_menu(){
    include('data.php');  
    foreach($menus as $key => $menu){
        echo '<li class="nav-item">
                <a class="nav-link click-scroll" href="'.$menu.'">'.$key.'</a>
            </li>';
    }
}



function display_user_info(){
    include ('data.php'); 
    foreach($personal_info as $key => $info){
        if($key != "myStory"){
            echo '<p>
                <span class="profile-small-title">'.strtoupper($key).'</span> 
                <span>'.$info.'</span>
            </p>';
        }
    }
}