<?php
	require_once __DIR__ . '/vendor/autoload.php';
    $name = (new MongoDB\Client)->companydb->empcollection; 
	
?>