<?php
require 'setup.php';



if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['nameEdit'];
    $zodiac = $_POST['zodiacEdit'];
    $chakra = $_POST['chakraEdit'];
    $crystalRepository->update($id, $name, $zodiac, $chakra);

}

require "editoverview.php";


