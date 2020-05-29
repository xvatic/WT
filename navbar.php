<link rel="stylesheet" type "text/css" href="style.css"/>
<?php
    if(isset($_GET['numb']))
    {
        if($_GET['numb'] == '1'){$_clr1="#FFFF00"; $page="aircraft";}
        if($_GET['numb'] == '2'){$_clr2="#FFFF00"; $page="engines";}
        if($_GET['numb'] == '3'){$_clr3="#FFFF00"; $page="start";}
        if($_GET['numb'] == '4'){$_clr4="#FFFF00"; $page="privatejet";}
        
    }



?>

            <div class="grid-box1"> 
                <a href="index.php?numb=1">
                    <span style="background-color:<?php echo $_clr1; ?>;">AIRCRAFT</span>
                </a>

            </div>
            <div class="grid-box1">
                <a href="index.php?numb=2">
                    <span style="background-color:<?php echo $_clr2; ?>;">ENGINES</span>
                </a>
                
            </div>
            <div class="grid-box1">
                <a href="contact.php">
                    <span>
                         <img src="img/aircraft-logo.png" class="logo" alt="Главная страница" width="75" height="50">
                    </span>
                </a>
            </div>
            <div class="grid-box1">
                <a href="index.php?numb=3">
                    <span style="background-color:<?php echo $_clr3; ?>;">NEWS</span>
                </a>
                
            </div>
            <div class="grid-box1">
                <a href="index.php?numb=4">
                    <span style="background-color:<?php echo $_clr4; ?>;">PRIVATE JETS</span>
                </a>   
            </div>
