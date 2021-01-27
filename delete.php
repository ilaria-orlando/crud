<?php
require "setup.php";

$id = $_GET['id'];

$crystalRepository->delete($id);

header('Location: index.php');
exit;