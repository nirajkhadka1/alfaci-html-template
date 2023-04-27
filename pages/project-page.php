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


// banner section starts here
$html .= "<section class='banner-container'>";
$img_src = "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
$project_title = "10 River Street";
$location = "South Yarn, Australia";
include "../shared/image-banner-temp.php";
$html .= "</section>";
// banner section ends here


// project description starts here
$html .= "<section class='project-description'>";
$descriptions = [
    [
        'key' => 'Type',
        'value' => 'Commercial Development'
    ],
    [
        'key' => 'Type',
        'value' => 'Commercial Development'
    ],
    [
        'key' => 'Type',
        'value' => 'Commercial Development'
    ],
    [
        'key' => 'Type',
        'value' => 'Commercial Development'
    ],
    [
        'key' => 'Type',
        'value' => 'Commercial Development'
    ],
    [
        'key' => 'Type',
        'value' => 'Commercial Development'
    ],
    [
        'key' => 'Type',
        'value' => 'Commercial Development'
    ],
    'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet odio optio deleniti harum. Tempora, esse quod voluptatem iste nostrum voluptatibus fuga, facere quisquam, non doloremque ullam laboriosam rem ut fugiat dolore tempore dicta? Eaque amet ipsum saepe temporibus expedita dignissimos iure quod, quam accusamus, tempora aspernatur sunt similique enim fugiat explicabo autem necessitatibus consectetur ad ut deserunt! Delectus voluptate repudiandae eos rerum accusamus ad laborum, possimus et laboriosam maiores earum reiciendis repellendus alias officiis culpa illo perferendis quod suscipit. Culpa assumenda reiciendis dignissimos illum hic aut ratione quisquam reprehenderit dicta alias minus ipsam aliquid, consequatur autem tempora soluta labore aperiam',
    "images" => [
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ],
];
include "../shared/project-description.php";
$html .= "</section>";
// project description ends here

// similar projects start here
$html .= "
<section class='similar-project-container'>
    <div class='heading'>
        <h1>Similar Projects</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, aut.</p>
    </div>";

$html .= "<div class='image-cart-container'>";
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
$html .= "</section>";
// similar projects end here


//footer section
include "../shared/footer-temp.php";
$html .= "</body></html>";
echo $html;
