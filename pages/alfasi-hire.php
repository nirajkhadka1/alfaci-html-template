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

//alfasi hire section
$html .= "<section class='alfasi-hire-container'>";
$header_txt="About Us";
$header_subtxt = "Alfasi Hire";
$image = "https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
$text = "";
include "../shared/head-section-temp.php";
$html .= "<div class='left'>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste quasi laboriosam fugiat magni animi alias id ipsum est voluptate! Dolore velit corporis earum natus voluptatum eligendi, illo, officiis amet autem a qui. Est, dolore, deserunt eos aut fugit, ipsum veniam sapiente corrupti corporis minus sunt quam molestias incidunt! Modi, provident.</p>
        </div>
        <div class='right'>
            <div class='content'>
                <div class='fleet'>
                    <h2 class='header'>Our Fleet</h2>
                    <h1 class='count'>3000+</h1>
                    <p class='text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, delectus.</p>
                </div>
                <div class='location'>
                    <h2 class='header'>Our Location</h2>
                    <h1 class='count'>7</h1>
                    <p class='text'>Lorem ipsum dolor sit amet consectetur adipisicing.</p>    
                </div>
            </div>
             <button class='alisa-hire'>Go to Alfasi Hire</button>
        </div>
        ";
$html .= "</section>";

//footer
include "../shared/footer-temp.php";

$html .= "</body></html>";
echo $html;

