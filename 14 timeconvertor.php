<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" type="text/css">
    <title>Time Convertor</title>
</head>

<body>
    <div>
        <img src="clock.jpg" width="200px" height="150px">
        <form action="" method="GET">
            <h1>Time Convertor</h1>
            <p>Enter Hours : </p>
            <input type="number" name="hours" id="hours" class="hours" />
            <p>Enter Minutes : </p>
            <input type="number" name="minutes" id="minutes" class="minutes" />
            <p>Enter Seconds : </p>
            <input type="number" name="seconds" id="seconds" class="seconds" />

            <br><br>
            <input type="submit" name="calculate" id="calculate" value="Show in Seconds" class="calculate" />
            <br><br>
        </form>

        <?php if (isset ($_GET['hours']) && isset ($_GET['minutes']) && isset ($_GET['seconds']) ):?>

        <?php

        function showseconds()
        {
            $showseconds = ($_GET['hours'] * 3600) + ($_GET['minutes'] * 60) + $_GET['seconds'];
            return $showseconds;
        }
         $return_showseconds =showseconds($_GET['hours'],$_GET['minutes'] , $_GET['seconds']);

         if ($_GET['calculate'] == "Show in Seconds")
         {
            echo "The total seconds : $return_showseconds  seconds.";
         }

         else

         echo "";
         ?>

        <?php endif; ?>







</body>

</html>