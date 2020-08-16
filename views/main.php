<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Shareboard</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo ROOT_URL ?>">Shareboard</a>
            <div class="mr-auto">
                <ul class="navbar-nav flex-row">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
                </li>
                </ul>
            </div>
            <div class="ml-auto">
                <ul class="navbar-nav flex-row">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Register</a>
                </li>
                </ul>
            </div>
        </nav>
    <?php echo $view; require($view); ?>
    </div>
</body>
</html>