<?php
$jsonData = '[
    {
      "title": "Card 1 Title",
      "description": "Description for the first card.",
      "image": "https://images.unsplash.com/photo-1424296308064-1eead03d1ad9?q=80&w=3570&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    },
    {
      "title": "Card 2 Title",
      "description": "Description for the second card.",
      "image": "https://images.unsplash.com/photo-1527334919515-b8dee906a34b?q=80&w=3570&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    },
    {
      "title": "Card 3 Title",
      "description": "Description for the third card.",
      "image": "https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=3570&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    },
    {
        "title": "Card 3 Title",
        "description": "Description for the third card.",
        "image": "https://images.unsplash.com/photo-1508873535684-277a3cbcc4e8?q=80&w=3570&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      },
      {
        "title": "Card 3 Title",
        "description": "Description for the third card.",
        "image": "https://images.unsplash.com/photo-1508873535684-277a3cbcc4e8?q=80&w=3570&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      },{
        "title": "Card 3 Title",
        "description": "Description for the third card.",
        "image": "https://images.unsplash.com/photo-1508873535684-277a3cbcc4e8?q=80&w=3570&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      }
  ]';

  $cards = json_decode($jsonData, true);

if ($cards === null) {
    die('Invalid JSON data');
}
?>
