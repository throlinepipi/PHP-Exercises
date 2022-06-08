<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" type="text/css">
    <title>Ticket Booth</title>
</head>

<body>
    <div>
        <img src="banner1.png" width="500px" height="150px">
        <form action="" method="GET">
            <h1>Ticket Booth</h1>
            <p>Adults ($10 each)</p>
            <input type="number" name="adult" id="adult" class="adult" />
            <p>Children ($5 each)</p>
            <input type="number" name="children" id="children" class="children" />

            <br><br>
            <input type="submit" name="calculate" id="calculate" value="Total" class="calculate" />
            <br><br>
        </form>

        <?php

         if ($_GET['calculate'] == "Total")
         {
             echo "The total amount is ".($_GET['adult']*10 ) + ($_GET['children']*5 ) ."dollars";
         }

         else

         echo "";
         ?>







</body>

</html>