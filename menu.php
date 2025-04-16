<!DOCTYPE html>
<?php include 'connect.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'header.php';?>

    <main>
        <div class="main-container">
            <div class="menu-container">
                <div class="menu-text-container">
                    <h1 class="menu-text">Menu</h1>
                </div>
                <ul>
                    <?php for  ($i = 0; $i < 10; $i++) { ?>
                        <li class="menu-item">
                            <div class="menu-item-text-container">
                                <h1 class="menu-item-text">Menu item <?php echo $i + 1; ?></h1>
                            </div>
                            <div class="menu-item-img-container">
                                <img class="menu-item-img" src="img/menu-item.png" alt="">
                            </div>
                        </li>
                    <?php } ?>
                </ul>
               
                </div>
            </div>
        </div>


    </main>

    <?php include 'footer.php';?>



</body>

</html>