<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Array</title>
</head>

<body>
    <form action="" method="post">
        <label for="array[]">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="array[]" id="" class="" />
        <br /><br />
        <label for="array[]">Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="email" name="array[]" id="" class="" />
        <br /><br />
        <label for="array[]">Address: &nbsp;&nbsp;</label>
        <input type="text" name="array[]" id="" class="" />
        <br /><br />
        <input type="submit" name="calculate" id="calculate" value="Total" class="calculate" />
        <br /><br />

    </form>

    <?php
    foreach ($_POST['array'] as $infovalue)
    {
        echo $infovalue;
        echo "<br>";
    }
    ?>

</body>

</html>