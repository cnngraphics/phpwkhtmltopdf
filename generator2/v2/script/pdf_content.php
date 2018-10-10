<!DOCTYPPE html>
<html>  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pdf.css">
    <title>PDF Generator</title>
</head>

   <body>
        <?php

            // alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)
            
            // use the factory to create a Faker\Generator instance
            $faker = Faker\Factory::create();
            echo "<h1>Test PDF</h1>";
            
            // generate data by accessing properties
             for ($i=0; $i < 100; $i++) {
                 echo '<b><span style="color: red; font-size: 34pt;">'.$faker->name.'</span></b><br>';
                //  echo '"<img src="'.$faker->imageUrl($width = 740, $height = 480).'">';
                 echo $faker->address.'<br><br>';
              }
              ?>
   </body>
</html>