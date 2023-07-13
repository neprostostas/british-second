<!DOCTYPE html>
<html lang="ua-uk">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <meta name="language" content="ua-uk">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="neprostostas">
    <title><?= $request_uri ?> - British Second</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="<?= SERVER_URL ?>style/style.css">
</head>
<body>

	<?php
        require "@commons/header.php";
        $file_name = $request_uri ?? 'main';
        $file_path = "@pages/{$file_name}.php";
        if(file_exists($file_path)) {
            require_once $file_path;
        }
        else {
            require_once "@pages/404.php";
        }
        require "@commons/footer.php";
    ?>

    <?php require "@commons/modal.php"; ?>

    <script src="<?= SERVER_URL ?>js/main.js"></script>
</body>
</html>