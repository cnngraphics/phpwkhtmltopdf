<?php

	echo 'Hello world';

	class Simple_Generator{
		// require "vendor/autoload.php";
		// public $randomNumber = rand(5, 15);
		// public $filename = "theoPdf-". $this->$randomNumber;

		public function __construct( $randomNumber, $fileName )
		{
			
			echo "Working...";
			// $data = isset($_REQUEST)? $_REQUEST : 'No Data Received';

			// if ( is_array($data) && empty($data) ) {
			// 		return "No Data";
			// } else {
			// 	echo "<h3>Here is the Data</h3>";
			// 	print_r($_REQUEST);
			// 	print_r($data);
			// }

			// $this->generatePdf();
		}

		public function runit(){
			echo "I run it";
		}

		// public function generatePdf( ){

			
		// 	ob_start(); //stops the output
		// 		// require 'pdf.php'; //the actual data to be rendered as pdf
		// 		$data = isset($_REQUEST) ? $_REQUEST : 'No Data Received';

		// 	$content = ob_get_clean();  //recoup the result of the run file or data

		// 	$pdf = new \mikehaertl\wkhtmlto\Pdf($content); //init pdf generator
		// 	//$pdf->send(); //generate and display
		// 	// $pdf->send('filename'); //gen and force download
		// 	$pdf->saveAs($this->$fileName); //saved on the server

		// }

	}
	
	
	public $doit = new Simple_Generator();
	// $doit -> generatePdf();
	$doit -> run();
	