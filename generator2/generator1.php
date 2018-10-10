<?php
// generate from FAKER package with Fake Data

	require "vendor/autoload.php";

	$faker = Faker\Factory::create('fr_FR'); //init data generator

	ob_start();

	require 'pdf.php';
	
     
 	$content = ob_get_clean();  

    $PDF = new \mikehaertl\wkhtmlto\Pdf();
    if(true){
        $PDF->addCover('cover.html');
    }
    // $PDF->addPage('HELLO WORLD');
    $PDF->addPage($content);
    // $PDF->send();


    $fileName = 'generated.pdf';

    // 	$PDF->send('generated.pdf'); //gen and force download with provided name
   if( $PDF->saveAs($fileName)){

    echo "File Saved on the server"; //saved on the server

    }