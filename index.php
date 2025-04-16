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
            <div class="intro-container">
                <div class="intro-text-container">
                    <h1 class="intro-text-head">Sigma Cafe</h1>
                    <h2 class="intro-text-sub">Welkom bij Sigma Cafe <br> Een cafe voor sigma's</h2>
                </div>
                <div class="intro-img-container">
                    <img class="intro-img" src="img/interior.png" alt="">
            </div>
           
        </div>
        <div class="locatie-img-container">
            <img class="locatie-img" src="img/map1.png" alt="">
            <img class="locatie-img" src="img/map2.png" alt="">
            <img class="locatie-img" src="img/map3.png" alt="">
        </div>
    </main>

    <?php include 'footer.php';?>
</body>

</html>