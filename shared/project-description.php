<?php 
$html .= "
<div class='container'>
    <div class='left-container'>
";
$images = $descriptions['images'];
$text = $descriptions['text'];
unset($descriptions['images'],$descriptions['text']);

foreach($descriptions as $description){
    $html .= "
    <div class='description'>   
        <h4>{$description['key']}<h4>
        <h2>{$description['value']}<h2>
    </div>
    ";
}

$html .= "
</div>
    <div class='right-container'>
        <p>{$text}</p>
        <div class='images'>
";
include "../shared/images-temp.php";
$html .= "
</div>
    </div>
</div>";


