<?php

// Iclude configuration
require_once __DIR__.'/../inc/config.php';

//from index to home1 display nav bar and text in binary if not then normal text
$currentPage = 'binary';



// At the end, display the "views"
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/home1.php';
require_once __DIR__.'/../view/footer.php';

?>
