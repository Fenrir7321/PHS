<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>Logo</h1>
        <?php if (!isset($_SESSION['useraname'])) {?>
        <form method="post" action="http://localhost/PHP/%d0%97%d0%b0%d0%b4%d0%b0%d0%bd%d0%b8%d0%b5%205/index.php">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">
            <label for="password">Пороль</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Зарегистроваться">
        </form>
        <?php } else { ?>
            <div><?php $_SESSION['username']?></div>
            <?php } ?>
    </div>
</body>
</html>