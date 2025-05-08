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

            <div class="hidden-content">
                <?php
                    $db = $conn->prepare("
                        SELECT * FROM Menu Kaart 
                        WHERE naam  LIKE '%". $_POST["search"] ."%';
                    ");

                    $db->execute();
                    $result = $db->fetchAll();
                ?>
            </div>

            <div class="menu-item-container">
            <?php
                    for($i  = 0; $i < count($result); $i++){
                ?>
            </div>

            <div class="menu-item-info">
                    <div>
                        <div><?php echo $result[$i]['id'];?></div>
                        <div><?php echo $result[$i]['naam'];?></div>
                        <div><?php echo $result[$i]['prijs'];?></div>
                    </div>
                    
                    <img class="food-image" src="assets/images/<?php echo $result[$i]['id'].".png";?>" alt="<?php echo $result[$i]['naam'];?>">
                </div>

           
                <div class="menu-text-container">
                    <h1 class="menu-text">Menu</h1>
                </div>
               
                </div>
            </div>
        </div>
    </main> 

    <?php include 'footer.php';?>

</body>

</html>