<!DOCTYPPE html>
<html>  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pdf.css">
    <title>PDF Generator</title>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
#footer {
    position:   absolute;
    bottom:     0;
    width:      100%;
    height:     3cm;

    background: #ccc;
}

.container {
    display: block;
    padding-left: 35px;
    margin-bottom: 12px;
    font-size: 22px;
   
}
.country {
    width: 15px;
    height: 15px;
    border: 1px solid red;
    background-color: white;
}
.checkmark {
    height: 25px;
    width: 25px;
    background-color: #eee;
}

</style>
</head>

   <body>
        <?php

            // alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)
            
            // use the factory to create a Faker\Generator instance
            $faker = Faker\Factory::create();
            echo "<h1>Test PDF</h1>";
            
            // generate data by accessing properties
             for ($i=0; $i < 3; $i++) {
                 echo "<table>
                          <tr>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                          </tr>
                          <tr>
                            <td>Alfreds Futterkiste</td>
                            <td><input type='radio'>Maria Anders</td>
                            <td>
                            <label class='container'>
                            <span class='checkbox'>
                            <span class='country'>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <input type='checkbox' style='width: 40px;'>Germany
                            
                            </label></td>
                          </tr>
                          <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                          </tr>
                          <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                          </tr>
                          <tr>
                            <td>Island Trading</td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                          </tr>
                          <tr>
                            <td>Laughing Bacchus Winecellars</td>
                            <td>Yoshi Tannamuri</td>
                            <td>Canada</td>
                          </tr>
                          <tr>
                            <td>Magazzini Alimentari Riuniti</td>
                            <td>Giovanni Rovelli</td>
                            <td>Italy</td>
                          </tr>
                        </table>
                        ";
                 echo '<b><span style="color: red; font-size: 34pt;">'.$faker->name.'</span></b><br>';
                 echo $faker->address.'<br><br>';;
                 echo '"<img src="'.$faker->imageUrl($width = 640, $height = 480).'">';
                 
              }
              
              ?>
   </body>
</html>