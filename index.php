<?php
$users = ["ali", "sara", "sasan"];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>تست گیت</title>
</head>

<body>
    <ul>
        <?php
        foreach ($users as $user) {
        ?>
            <li><?= $user ?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>