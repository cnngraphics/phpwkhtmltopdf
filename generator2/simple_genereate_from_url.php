<?php
  require "vendor/autoload.php";

  use mikehaertl\wkhtmlto\Pdf;


ob_start();

    if(isset( $_REQUEST )){
        $data = $_POST['url'] ."\n";
    } else {
        $data = "No data received";
    }
    echo $data;

ob_get_clean();

  // Create a new Pdf object with some global PDF options
  $pdf = new Pdf(array(
      'no-outline',         // Make Chrome not complain
      'margin-top'    => 0,
      'margin-right'  => 0,
      'margin-bottom' => 0,
      'margin-left'   => 0,

      // Default page options
      'disable-smart-shrinking',
      'user-style-sheet' => '/path/to/pdf.css',
  ));

  // Add a page. To override above page defaults, you could add
  // another $options array as second argument.
  // $pdf->addPage('/path/to/demo.html');


$content = <<<EOD
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    /* Define page size. Requires print-area adjustment! */
    body {
        margin:     0;
        padding:    0;
        width:      21cm;
        height:     29.7cm;
    }

    /* Printable area */
    #print-area {
        position:   relative;
        top:        1cm;
        left:       1cm;
        width:      19cm;
        height:     27.6cm;

        font-size:      10px;
        font-family:    Arial;
    }

    #header {
        height:     3cm;

        background: #ccc;
    }
    #footer {
        position:   absolute;
        bottom:     0;
        width:      100%;
        height:     3cm;

        background: #ccc;
    }

.headline{
  color: red;
}

  </style>
</head>
<body>

    <div id="print-area">
        <div id="header">
            This is an example header.
        </div>
        <div id="content">

            <h1 class="headline">PDF Generated From From Data</h1>
            <p><pre>$data</pre></p>
        </div>
        <div id="footer">
            This is an example footer.
        </div>
    </div>

</body>
</html>
EOD;

$pageTitle = 'Test Options';
$myPageOoptions = array(
    'no-outline',           // option without argument
    'encoding' => 'UTF-8',  // option with argument

    // Repeatable options with 2 arguments
    'replace' => array(
        '{page}' => $page++,
        '{title}' => $pageTitle,

    ),
);

  $pdf->addPage($content);
  // $pdf->addPage($data, $myPageOoptions);     // Add page with options

  // $pdf->addPage($content);
  $pdf->addPage($url);


  if (!$pdf->send()) {
      $error = $pdf->getError();
      // ... handle error here
  }

  ?>


