<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>User</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['users'])){
        $users = unserialize($_COOKIE['users']);

        $user = end($users);
        
        echo 'Last User: ' . $user['name'] . '<br>';
    }
    else{
        echo 'User is not set';
    }
    ?>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <button type="submit" name="ok" value="Ok">Ok</button>
    </form>

    <?php
    if(isset($_POST['ok']))
    {
        //перенаправление на другую страницу
        header('Location: page2.php');
    }
    ?>

</body>
</html>
