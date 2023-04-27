<?php

$html .= "<div class='head-section'>
            <h3>{$header_txt}</h3>
            <h1>{$header_subtxt}</h1>";
$html .= $image ? "<img src={$image} height='400px' width='100%'/>" : "";
$html .= $text ? "<p class='long-text'>{$text}</p>" : "";

$html .="</div>";
