<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aнкетаt</title>
</head>
<body>
    <h2>Анкета</h2>
        <form method="post" action="process.php">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" value="Отправить">
        </form>
</body>
</html>