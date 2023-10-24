<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Анкета</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $patronymic = $_POST["patronymic"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $interests = isset($_POST["interests"]) ? implode(", ", $_POST["interests"]) : "";
        $country = $_POST["country"];
        $comments = $_POST["comments"];
        $birthdate = $_POST["birthdate"];
        $profile_picture = $_FILES["profile_picture"]["name"];
        $eye_colour = $_POST["eye_color"];
        $height = $_POST["height"];
        $email = $_POST["email"];

        echo "<p>Имя: $first_name</p>";
        echo "<p>Фамилия: $last_name</p>";
        echo "<p>Пароль: $password</p>";
        echo "<p>Пол: $gender</p>";
        echo "<p>Интересы: $interests</p>";
        echo "<p>Страна: $country</p>";
        echo "<p>Комментарии: $comments</p>";
        echo "<p>Дата рождения: $birthdate</p>";
        if (!empty($profile_picture)) {
            echo "<p>Фотография профиля: $profile_picture</p>";
        }
        echo "<p>Цвет глаз: $eye_colour</p>";
        echo "<p>Рост: $height см</p>";
        echo "<p>Email: $email</p>";
    }
    ?>
</body>
</html>