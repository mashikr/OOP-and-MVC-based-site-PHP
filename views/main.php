<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/OOP-MVC/assets/css/bootstrap.min.css">
    <title>Shareboard</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Shareboard</a>
            <div class="mr-auto">
                <ul class="navbar-nav flex-row">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
                </li>
                </ul>
            </div>
            <div class="ml-auto">
                <ul class="navbar-nav flex-row">
                
                <?php if(isset($_SESSION['is_logged_in'])) { ?>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user_data']['name'] ?></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
                    </li>
                <?php } else {?>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </nav>
    <?php 
        //echo $root = dirname(__DIR__);
        Messages::display();
        require($view); 
     ?>
    </div>
</body>
</html>