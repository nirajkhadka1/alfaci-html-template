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

// images-section starts 
$html .= "  
<section class='images-container'>
    <img src='https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' height='500px' width='96%'>
    <div class='sub-images'>
        <img src='https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' height='200px' width='40%'>
        <img src='https://images.pexels.com/photos/15851472/pexels-photo-15851472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' height='500px' width='40%'>
    </div>
</section>
        ";
//image section ends

// alfasi property section starts
$html .= "<section class='property-section-container'>";
$header_txt="Alfasi Property";
$left_title = "Years of Experience";
$right_title = "Project Completed";
$left_number = "40";
$right_number = "35";
$left_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$right_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$long_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.";
include "../shared/homepage-info-temp.php";
$html .= "</section>";
// alfasi property section ends

// footer section starts
include "../shared/footer-temp.php";
// footer section ends


$html .= "</body></html>";
echo $html;
?>