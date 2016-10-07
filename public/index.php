<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';


require_once __DIR__ . '/../utils/helper_functions.php';

require_once __DIR__ . '/../utils/Input.php';

require_once __DIR__ . '/../utils/Auth.php';

require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';


?>
<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>