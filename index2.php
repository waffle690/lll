<?php

session_start(); 

if (isset($_SESSION['user_data'])) { 

    $user_data = $_SESSION['user_data'];

    ?>

    <ul>

        <li>Имя: <?php echo $user_data['name']; ?></li>

        <li>Возраст: <?php echo $user_data['age']; ?></li>

        <li>Зарплата: <?php echo $user_data['salary']; ?></li>

        <li>Другие данные: <?php echo $user_data['other_data']; ?></li>

    </ul>

    <?php

} else { 

    echo 'Данные не найдены';

}

?>
