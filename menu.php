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

                <?php
                $sql = "SELECT * FROM `Menu Kaart` WHERE id = $i";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $_GET['id']);
                $stmt->execute();
                $result = $stmt->fetchAll();
                ?>

                <ul>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <li> 
                            
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