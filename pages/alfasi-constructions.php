<?php 

$html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Alfasi Group</title>
</head>
<body>
";

// alfasi-constructions-section starts
$html .= "<section class='alfasi-constructions-section'>";
$header_txt = "Sub Title";
$header_subtxt = "Alfasi Constructions";
$image = "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit necessitatibus quidem ullam aut quo, debitis nisi reiciendis! Mollitia dolores deleniti, ex cum impedit, tempore praesentium, sunt fuga fugit possimus tempora maiores dolorem autem deserunt dignissimos voluptates porro animi vitae maxime minima. Beatae debitis eveniet commodi ducimus optio nobis exercitationem amet velit minima! Debitis autem sint cumque ab sapiente id laboriosam nemo, odit mollitia aperiam ea consequatur magni quae dolor placeat nisi fugiat officiis nobis doloremque dolores totam eaque amet! Eum amet sit error quasi quidem doloremque dignissimos odit ab natus illo, culpa aliquam accusamus consequuntur expedita est nihil magni omnis!";
include "../shared/head-section-temp.php";
$html .= "</section>"; 
// alfasi-constructions-section ends

// alfasi constructions legacy sections starts
$html .="
    <section class='alfasi-constructions-legacy-container'>
        <div class='heading'>
            <h1 class='main_text'>Alfasi Constructions Legacy</h1>
            <h3 class='sub_text'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
        </div>
        <div class='contents'>";
$image_contents =[
    [
        "title" => "Melbourne, 1980",
        "text" => "Alfasi Contructions founder",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Brisbane, 1992",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Sydney, 1995",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Melbourne, 2000",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Bangkok, 2002",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Melbourne, 2004",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Singapore, 2005",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Quatar, 2006",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Singapore, 2012",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Hong Kong, 2017",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
    [
        "title" => "Melbourne, 2019",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "img_src" => "https://images.pexels.com/photos/924310/pexels-photo-924310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
];
foreach($image_contents as $content){
    $html .= "<div class='container'>
                <img src={$content['img_src']} height='100px' width='80px'/>
                <h3>{$content['title']}</h3>
                <p>{$content['text']}</p>
            </div>";
}
$html .= "</div>";
// alfasi constructions legacy sections ends

// past projects sections starts
$html .= "<section class='past-projects-container'>";
$html .="<div class='heading'>
            <h1 class='main_text'>Alfasi Constructions Legacy</h1>
            <h3 class='sub_text'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
         </div>";
$html .= "<div class='cart-container'>";
$cart_contents = [
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "AI Waqrah Stadium",
        "sub_text" => "Quatar",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Maria Bay Sands",
        "sub_text" => "Singapore",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Northen Stand Redevelopment",
        "sub_text" => "Melbourne, Australia",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Kallang",
        "sub_text" => "Quatar",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "The Age",
        "sub_text" => "Quatar",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Etihad Stadium",
        "sub_text" => "Melbourne, Australia",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Melbourne Sports and Aquatic Centre",
        "sub_text" => "Quatar",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Yarra Arts Theatre",
        "sub_text" => "Melbourne, Australia",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Melbourne Airport Link Bridge",
        "sub_text" => "Melbourne, Australia",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "New Doha International Airport Emiri Terminal and Mosque",
        "sub_text" => "Doha, Quatar",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Suvarnabhumi Airport",
        "sub_text" => "Bangkok, Thailand",
    ],
];
include "../shared/image-background-temp.php";
$html .= "</div>";
$html .= "</section>";
// past projects sections ends
include "../shared/footer-temp.php";
$html .= "</body></html>";
echo $html;