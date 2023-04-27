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

// contact us section starts 
$html .= "<section class='contact-us-container'>";
$html .= "<div class='heading'>
            <h1 class='main_text'>Lets Connect</h1>
            <h3 class='sub_text'>Contact us</h3>
          </div>
          <div class='map'>
          </div>
          </section>";
//contact us section ends

// our office section starts
$html .= "<section class='our-office-container'>";
$contact_info = [
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
    [
        "branch" => "Alfasu Head Office",
        "contact_details" => [
            [
                "text" => "73-79 Watweview Close Dandenong South Victoria 3175 Australia",
                "icon" => "location",
            ],
            [
                "text" => "+61 3 9652 2600",
                "icon" => "phone",
            ],
            [
                "text" => "alfasu@alfasi.com.au",
                "icon" => "location",
            ],

        ],
    ],
];
foreach($contact_info as $contact){
    $html .= "
    <div class='cart'>
        <h3>{$contact['branch']}</h3>
    ";
    foreach($contact['contact_details'] as $contact_detail){
        $html .= "
        <div class ='contact-info-container'>
            <h3><small class={$contact_detail['icon']}></small>  {$contact_detail['text']}</h3>
        </div>
        ";
    }
    $html.="</div>";
}


//footer section
include "../shared/footer-temp.php";
$html .= "</body></html>";
echo $html;
