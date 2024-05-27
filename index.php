<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Nếu trong $_GET có key là action thì lấy $_GET['action]
// Nếu không có thì mặc định action = index
include "controllers/ArticleController.php";
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// $action = $_GET['action'] ?? 'index';
$controller = new ArticleController();
switch ($action) {
    case 'index':
        break;
    default:
        echo "action not found";
        break;
}
?>
</body>
</html>