<!DOCTYPE html>
<html lang="ru">

<head>
    <title>AIRHYPE</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
    <div class="wrapper">
        <div class="grid-item-header">

          <?php include ('navbar.php') ?>
           
        </div>
        <div class="grid-item-main-content">

            
            <?php include (''.$page.'.php') ?>
        </div>

        
       
         
        
    </div>
</body>
</html>

            <div class="grid-item-header">
            <div class="grid-box1">
                <a href="aircraft.html">
                    <span>AIRCRAFT</span>
                </a>
            </div>
            <div class="grid-box1">
                <a href="engines.html">
                    <span>ENGINES</span>
                </a>

            </div>
            <div class="grid-box1">
                <a href="contact.html">
                    <span>
                         <img src="img/aircraft-logo.png" class="logo" alt="Главная страница" width="75" height="50">
                    </span>
                </a>
            </div>
            <div class="grid-box1">
                <a href="index.html">
                    <span>NEWS</span>
                </a>

            </div>
            <div class="grid-box1">
                <a href="privatejet.html">
                    <span>PRIVATE JETS</span>
                </a>

            </div>

        </div>
        <div class="grid-item-main-content">


            <?php include ('aircraft.php') ?>
        </div>





    </div>
</body>
</html>

