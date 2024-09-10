<?php
$jsonData = '[
  {
    "slug": "academy-chambers-sport-portal",
    "title": "CFS Academy Portal",
    "description": "Description for the third card.",
    "image": "assets/img/cfs.png"
  },
    {
      "slug": "chambers-for-sport",
      "title": "Dwain Chambers European record holder 🥇",
      "description": "Description for the first card.",
      "image": "assets/img/dwain.png"
    },
    {
      "slug": "e-guide-solutions",
      "title": "E-guide Solutions",
      "description": "Description for the second card.",
      "image": "assets/img/e-guide.png"
    }
  ]';

  $cards = json_decode($jsonData, true);

if ($cards === null) {
    die('Invalid JSON data');
}
?>
