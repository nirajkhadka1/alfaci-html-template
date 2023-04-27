<?php
$footerLists = [
    [
        "head" => "Alfasi Group",
        "lists" => [
            "Alfasi Property",
            "Alfasi Hire",
            "Alfasi Constructions",
            "Our Locations"
        ],
    ],
    [
        "head" => "About Us",
        "lists" => [
            "About Alfasis",
            "Our Team"
        ],
    ],
    [
        "head" => "Contact Us",
        "lists" => [
            [
                "key" => "Phone Number",
                "value" => "+61 3 9652 2600"
            ],
            [
                "key" => "Facsimile",
                "value" => "+61 3 9654 5842"
            ]
        ],
    ]
];

$html .= '
<footer class="footer">
<div class="section-1">
  <p class="text">
    After forty years in steel construction and engineering accross the globe,
    Alfasi Group is forgin ahead to lead in the equipment hire and property
    development industries.
  </p>
  <button class="contact-us">Contact Us</button>
</div>
<div class="section-2">
  <div class="left-container">
      <p class="name"><small class="higlight">alfasi</small> group</p>
      <p class="text">hire & property</p>
      <div class="social-media-links">
          <small></small>
          <small></small>
      </div>
  </div>
  <div class="right-container">
      <div>
';

foreach ($footerLists as $lists) {
    $html .= "<p>{$lists['head']}</p>";
    foreach ($lists['lists'] as $list) {
        if (isset($list['key'])) {
            $html .= "<li>{$list['key']}</li>";
            $html .= "<li>{$list['value']}</li>";
        } else {
            $html .= "<li>{$list}</li>";
        }
    }
}
$current_date = date("Y");
$html .= "
            </div>
        </div>
    </div>
    <div class='copyright-container'>
        <p>&copy; 2 {$current_date} ALFASI GROUP. ALL RIGHTS RESERVED</p>
        <p>Website by WEBO Digital</p>
    </div>
</footer>
    ";
