<?php

session_start(); 

if (isset($_POST['submit'])) { 

    $_SESSION['user_data'] = array(

        'name' => $_POST['name'],

        'age' => $_POST['age'],

        'salary' => $_POST['salary'],

        'other_data' => $_POST['other_data']

    );

}

?>

<form action="index2.php" method="post">

    <label for="name">Имя:</label>

    <input type="text" name="name" required>

    <br>

    <label for="age">Возраст:</label>

    <input type="number" name="age" min="18" max="100" required>

    <br>

    <label for="salary">Зарплата:</label>

    <input type="number" name="salary" required>

    <br>

    <label for="other_data">Другие данные:</label>

    <input type="text" name="other_data">

    <br>

    <input type="submit" name="submit" value="Отправить">

</form>
