<?php
header("Content-Type: image/png");

// Create image
$image = imagecreate(500, 150);

// Allocate colors
$light_gray = imagecolorallocate($image, 230, 230, 230); // Light gray background
$dark_blue = imagecolorallocate($image, 41, 84, 144); // Dark blue text for elegance

// Get name from query parameter
$name = $_GET['name'] ?? 'Everyone';

// Path to cursive/calligraphy TrueType font
// Try these cursive fonts (download from Google Fonts):
$font = __DIR__ . '/fonts/GreatVibes-Regular.ttf';        // Elegant script
// $font = __DIR__ . '/fonts/DancingScript-Regular.ttf';  // Lively script  
// $font = __DIR__ . '/fonts/Pacifico-Regular.ttf';       // Fun script
// $font = __DIR__ . '/fonts/Satisfy-Regular.ttf';        // Handwritten style

// Add text using cursive TrueType font
imagettftext($image, 28, 0, 50, 90, $dark_blue, $font, "Hello, $name!");

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>