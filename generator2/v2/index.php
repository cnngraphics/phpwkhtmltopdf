<?php

	require "vendor/autoload.php";

	$faker = Faker\Factory::create('fr_FR'); //init data generator

	ob_start();

	require 'script/pdf_content.php';
     
 	$content = ob_get_clean();  

    $PDF = new \mikehaertl\wkhtmlto\Pdf();
    $PDF->addCover('cover.html');
    $PDF->addPage($content);

    // print_r($PDF);
    $PDF->send();


//	$pdf->send('filename'); //gen and force download
//	$pdf->saveAs(fileName); //saved on the server
