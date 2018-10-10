<?php

    class Generator{
        public randomNumber = rand(5, 15);

        public function index()
        {
            require "vendor/autoload.php";

            $data = isset($_REQUEST)? $_REQUEST : 'No Data Received';

            if ( is_array($data) && empty(!$data) ) {
                    return "No Data";
            } else {
                echo "<h3>Here is the Data</h3>";
                print_r($_REQUEST);
                print_r($data);
            }

            $this->generatePdf();
        }


        public function generatePdf(){

            $faker = Faker\Factory::create('eng_GB'); //init data generator

            ob_start(); //stops the output
                // require 'pdf.php'; //the actual data to be rendered as pdf
                $data = isset($_REQUEST)? $_REQUEST : 'No Data Received';

            $content = ob_get_clean();  //recoup the result of the run file or data

            $pdf = new \mikehaertl\wkhtmlto\Pdf($content); //init pdf generator
            //$pdf->send(); //generate and display
            // $pdf->send('filename'); //gen and force download
            $pdf->saveAs($fileName); //saved on the server

        }

    }
    
    

    