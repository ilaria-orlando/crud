<?php

// Require the correct variable type to be used (no auto-converting)
require 'setup.php';



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $zodiac = $_POST['zodiac'];
    $chakra = $_POST['chakra'];
    $crystalRepository->create($name, $zodiac, $chakra);
}



// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';
