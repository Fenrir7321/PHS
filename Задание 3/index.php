<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>

<body>
    <?php
    require 'data.php';
    require 'func.php';
    ?>
    <table class="number_table">
        <tbody>
            <?php generateTable($days); ?>
        </tbody>
    </table>
</body>

</html>