<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cookies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

    <?php
    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);
        $userpass = htmlentities($_POST['password']);

        //данные пользователя
        $user = ['name' => $username, 'pass' => $userpass];
        //пользователи
        $users = (isset($_COOKIE['users'])) ? unserialize($_COOKIE['users']) : [];
        
        array_push($users, $user);

        $users = serialize($users);

        setcookie('users', $users, time() + 3600); //1 час
    
        //перенаправление на другую страницу
        header('Location: page1.php');
    }
    ?>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Enter Username" />
        <br />
        <input type="password" name="password" placeholder="Enter Password" />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>


    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
