<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area calculator</title>
</head>
<body>
    <div>
        <form action="" method="GET">
            <h1>Area Calculator</h1>
            <p>Enter length</p>
            <input type="number" name="length" id="length" class="length" />
            <p>Enter width</p>
            <input type="number" name="width" id="width" class="width" />

            <br><br>
            <input type="submit" name="calculate" id="calculate" value="Total" class="calculate" />
            <br><br>
        </form>

        <?php

          function area($length,$width)
          {
            $area = $_GET['length'] * $_GET['width'];
            return $area;
          }
         $return_value = area($_GET['length'],$_GET['width']);

         if ($_GET['calculate'] == "Total")
         {
            echo "The area is : $return_value  square units";
         }
        
        ?>
    </div>
    
</body>
</html>

