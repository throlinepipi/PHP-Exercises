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
            <h1>Currency convertor</h1>
            <p>Enter your money in dollars.</p>
            <input type="number" name="dollars" id="dollars" class="dollars" />
            <br><br>
            <input type="submit" name="calculate" id="calculate" value="Convert" class="calculate" />
            <br><br>
        </form>

        <?php

          function british()
          {
            $british = $_GET['dollars'] / 1.487;
            return $british;
          }
          $return_british =british($_GET['dollars']);

          function french()
          {
            $french = $_GET['dollars'] / 0.172;
            return $french;
          }
          $return_french =french($_GET['dollars']);

          function german()
          {
            $german = $_GET['dollars'] / 0.584;
            return $german;
          }
          $return_german =german($_GET['dollars']);

          function japan()
          {
            $japan = $_GET['dollars'] / 0.00955;
            return $japan;
          }
          $return_japan =japan($_GET['dollars']);

          function burmese()
          {
            $burmese = $_GET['dollars'] * 1800;
            return $burmese;
          }
          $return_burmese =burmese($_GET['dollars']);

         if ($_GET['calculate'] == "Convert")
         {
            echo "In British currency - It is : $return_british  Pounds";
            echo "<br/>";
            echo "In French currency - It is : $return_french  Franc";
            echo "<br/>";
            echo "In German currency - It is : $return_german  Deutschemark";
            echo "<br/>";
            echo "In Japanese currency - It is : $return_japan  Yens";
            echo "<br/>";
            echo "In Burmese currency - It is : $return_burmese Kyats";
         }
        
        ?>
    </div>
    
</body>
</html>