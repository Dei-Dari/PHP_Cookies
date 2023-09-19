<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Pass</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['users'])) {
        $users = unserialize($_COOKIE['users']);
        $user = end($users);

        echo 'Last pass: ' . $user['pass'] . '<br>';
    } else {
        echo 'Pass is not set';
    }
    ?>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <button type="submit" name="return" value="Return">Return</button>
    </form>

    <?php
    if (isset($_POST['return'])) {
        //перенаправление на другую страницу
        header('Location: index.php');
    }
    ?>
</body>
</html>
