<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета</title>
</head>
<body>
<h2>Анкета</h2>
    <form method="POST" action="process.php" enctype="multipart/form-data">
        <label for="first_name">Имя:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>

        <label for="last_name">Фамилия:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>

        <label for="patronymic">Отчество:</label>
        <input type="text" name="patronymic" id="patronymic" required>
        <br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        <br>

        <label>Пол:</label>
        <input type="radio" name="gender" value="Мужской" id="gender_male"> Мужской
        <input type="radio" name="gender" value="Женский" id="gender_female"> Женский
        <br>

        <label>Интересы:</label>
        <input type="checkbox" name="interests[]" value="Спорт" id="interest_sport"> Спорт
        <input type="checkbox" name="interests[]" value="Искусство" id="interest_art"> Искусство
        <input type="checkbox" name="interests[]" value="Музыка" id="interest_music"> Музыка
        <br>

        <label for="country">Страна:</label>
        <select name="country" id="country">
            <option value="Россия">Россия</option>
            <option value="США">США</option>
            <option value="Германия">Германия</option>
        </select>
        <br>

        <label for="comments">Комментарии:</label>
        <textarea name="comments" id="comments" rows="4" cols="50"></textarea>
        <br>

        <label for="birthdate">Дата рождения:</label>
        <input type="date" name="birthdate" id="birthdate">
        <br>

        <label for="profile_picture">Загрузить фотографию:</label>
        <input type="file" name="profile_picture" id="profile_picture">
        <br>

        <label for="eye_color">Цвет глаз:</label>
        <input type="color" name="eye_color" id="eye_color">
        <br>

        <label for="height">Рост (см):</label>
        <input type="range" name="height" id="height" min="40" max="250">
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>

        <input type="submit" value="Создать анкету">
    </form>
</body>
</html>