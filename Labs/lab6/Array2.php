<html>
    <head>
        <title>Array2.php</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />

    </head>
    <body>
      <?php include "Header.php"?>
	
	<?php include "Menu.php"?>
	
           <div id ="content" align="center">
            <form action = "Array2.php" method = "GET">
                <b>Convert: </b> <input type="number" name ="srcamount"/>
                <select name = "basecurr">
                    <option value ="CAD">Canadian Dollars</option>
                    <option value ="NZD">New Zealand Dollar</option>
                    <option value ="USD">US Dollar</option>
                </select>
                <b>to</b>
                <select name = "destcurr">
                    <option value ="CAD">Canadian Dollars</option>
                    <option value ="NZD">New Zealand Dollar</option>
                    <option value ="USD">US Dollar</option>
                </select>
                <input type = "submit"/>


            </form>
      
    <?php
           

            echo "<h2>Conversion Results</h2>";

            $currencies = array("CAD"=>"Canadian Dollar ", "NZD"=>"New Zealand ", "USD"=>"US Dollar ");
            $rates = array("CAD"=>0.97645, "NZD"=>1.20642, "USD"=>1.0);

            $srcamount = $_GET['srcamount'];
            $basecurr = $_GET['basecurr'];
            $destcurr = $_GET ['destcurr'];

            $converted_output = ($srcamount/$rates[$basecurr])*$rates[$destcurr];

            echo $srcamount." ".$basecurr." converts to ".$converted_output." ".$destcurr;






           


    ?>

  </div>
       <?php include "Footer.php"?>





    </body>
</html>