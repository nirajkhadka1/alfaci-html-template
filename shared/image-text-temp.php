<?php
foreach($contents as $index=>$content){
    if(($index+1)% 2 === 0){
        $html .= "<div class='image-text-container-reverse'>
        <img src={$content['image_src']} height='100px' width='30%'/>
        <p>{$content['text']}</p>
        </div>
    ";
    }
    else{
        $html .= "<div class='image-text-container'>
        <img src={$content['image_src']} height='100px' width='30%'/>
        <p>{$content['text']}</p>
        </div>
    ";
    }
   
}
?>