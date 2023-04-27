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

//first section
$html .= "<section class='alfasi-group-container'>";
$header_txt="About Us";
$header_subtxt = "Alfasi Group";
$image = "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
$text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo vitae eius ullam architecto labore qui molestiae amet consectetur inventore illum eum accusamus? Minima nostrum necessitatibus blanditiis nisi tempora rerum. Animi ipsum vel minima non? Numquam assumenda odio, dignissimos aperiam odit, ratione iusto explicabo repellat alias maiores accusamus commodi culpa atque nulla voluptatum saepe veniam eos magni veritatis fugit dicta dolorem soluta? Eos qui dolore iusto nemo id, commodi quisquam quo aspernatur ratione, deserunt nisi ipsam pariatur dicta culpa reiciendis facilis nihil rerum alias possimus eaque a ut. Quas, aliquam pariatur culpa animi porro corrupti accusamus dicta atque est minus.";
include "../shared/head-section-temp.php";
$html .= "</section>";

//second section
$html .= "<section class='our-people-container'>";
$header_subtxt = "Our People";
$image = "";
include "../shared/head-section-temp.php";
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
$html .= "<div class='brochures'>
            <h1>Brochures</h1>";
$cart_contents = [
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "Download",
        "main_text" => "Brochure (PDF)",
        "sub_text" => "",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "button" => "Download",
        "main_text" => "Brochure (PDF)",
        "sub_text" => "",
    ],
];
include "../shared/image-background-temp.php";
$html .= "</div></section>";

//social impact section
$header_subtxt = "Social Impact";
$html .= "<section class='social-impact-container'>"; 
include "../shared/head-section-temp.php";
$html .= "<p class='social-impact-txt'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla voluptas corrupti consectetur id ipsam, omnis voluptatem porro possimus quibusdam iste provident doloremque animi nisi, impedit quasi nostrum fugit quidem corporis, sed sint suscipit! Fuga, laboriosam sunt unde dolorem impedit quis aliquam provident ipsam laudantium dignissimos sit praesentium soluta qui dolore minima sapiente mollitia quod minus consequuntur pariatur. Cupiditate libero tempore omnis incidunt dolores distinctio aut consequuntur debitis amet magni soluta delectus sint neque, ipsam minima excepturi perferendis optio iusto dignissimos consectetur! Omnis porro veniam facere consequuntur in, aspernatur similique, voluptatum at mollitia quam, sed aliquam! Commodi voluptates voluptas recusandae in.</p>";
$html .= "<div class='image-txt-container'>";
$image_text_contents = [
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "text" => "Community Engagement",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "text" => "Indigenous Reconciliation",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "text" => "Diversity and Equality",
    ],
    [
        "image_src" => "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "text" => "Environmental Responsibility"
    ],
];
foreach($image_text_contents as $content){
    $html .= "<div class='content'>
                <img src={$content['image_src']} height='100px' width='100px'/>
                <b>{$content['text']}</b>
            </div>";
}
$html .= "</div>";

$slider_images = [
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
];
$html .="<div class='slider-container'>";
foreach($slider_images as $image){
    $html .= "<img src={$image} height='400px' width:'95%'>";
}
$html .="</div></section>";

//footer section
include "../shared/footer-temp.php";
$html .= "</body></html>";
echo $html;
?>