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

//alfasi-property-section starts
$html .= "<section class='alfasi-property-container'>";
$header_txt = "Sub Title";
$header_subtxt = "Alfasi Property";
$image = "https://images.pexels.com/photos/2387324/pexels-photo-2387324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
$text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla voluptas corrupti consectetur id ipsam, omnis voluptatem porro possimus quibusdam iste provident doloremque animi nisi, impedit quasi nostrum fugit quidem corporis, sed sint suscipit! Fuga, laboriosam sunt unde dolorem impedit quis aliquam provident ipsam laudantium dignissimos sit praesentium soluta qui dolore minima sapiente mollitia quod minus consequuntur pariatur. Cupiditate libero tempore omnis incidunt dolores distinctio aut consequuntur debitis amet magni soluta delectus sint neque, ipsam minima excepturi perferendis optio iusto dignissimos consectetur! Omnis porro veniam facere consequuntur in, aspernatur similique, voluptatum at mollitia quam, sed aliquam! Commodi voluptates voluptas recusandae in.";
include "../shared/head-section-temp.php";
$html .="</section";
//alfasi-propert-section ends 

//our teams section starts
$html .= "<section class='our-teams-container'>";
$contents = [
        [
            "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rem, nostrum nesciunt repellendus quas provident quisquam unde quasi? Quod vitae eaque voluptas distinctio ex quidem commodi tempora modi, aperiam architecto!",
        ],
        [
            "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rem, nostrum nesciunt repellendus quas provident quisquam unde quasi? Quod vitae eaque voluptas distinctio ex quidem commodi tempora modi, aperiam architecto!",
        ],
        [
            "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rem, nostrum nesciunt repellendus quas provident quisquam unde quasi? Quod vitae eaque voluptas distinctio ex quidem commodi tempora modi, aperiam architecto!",
        ],
        [
            "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rem, nostrum nesciunt repellendus quas provident quisquam unde quasi? Quod vitae eaque voluptas distinctio ex quidem commodi tempora modi, aperiam architecto!",
        ],
    ];

    
include "../shared/image-text-temp.php";
$html .= "</section>";
//our experience section ends

//our experience section start
$html .= "<section class='our-experience'>";
$html .= "<div class='head'>";
$header_subtxt = "Some Of Our Projects";
$text = "";
$image="";
include "../shared/head-section-temp.php";
$html .= "<ul class='tab-navigation'>
            <li>Completed Project</li>
            <li>Current Project</li>
        </ul>
        </div>";
$html .="<div class='image-cart-container'>";
$cart_contents = [
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Clarence Hotel",
        "sub_text" => "Australia",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "10 River Street",
        "sub_text" => "South Yarra, Australia",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "510 Church Street",
        "sub_text" => "Cremorne, Australia",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "Botique Hotel Pool Area",
        "sub_text" => "Quatar",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "",
        "main_text" => "560 Church Street",
        "sub_text" => "Cremorne Australia",
    ],
];
include "../shared/image-background-temp.php";

include "../shared/footer-temp.php";
$html .= "</body></html>";
echo $html;

