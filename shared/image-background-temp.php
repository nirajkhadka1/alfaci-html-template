<?php
foreach($cart_contents as $item){
    $html .= "<div class='cart'>
                <image src ={$item['image_src']} height='200x' width='200px'/>
            ";
    $html .= $item['main_text'] ?  "<h3>{$item['main_text']}</h3>" :"";
    $html .= $item['sub_text'] ?  "<h6>{$item['sub_text']}</h6>" :"";
    $html .= $item['button']  ? "<button>{$item['button']}</button>" : "";
    $html .= "</div>";
}
