<?php
if(isset($_GET['numb']))
{
    if($_GET['numb'] == '1'){$clr1="#FFFF00";}
    if($_GET['numb'] == '2'){$clr2="#FFFF00";}
    if($_GET['numb'] == '3'){$clr3="#FFFF00";}
    if($_GET['numb'] == '4'){$clr4="#FFFF00";}
}
?>
<!DOCTYPE html>
<html>
    <body>
        <style>
        a{
            text-decoration: none;
            color: #000000;
            background-color: #fff;

        }
        </style>
        <div>
            <a href="?numb=1" style = "background-color:<?php echo $clr1; ?>;">About</a>
            <a href="?numb=2" style = "background-color:<?php echo $clr2; ?>;">Service</a>
            <a href="?numb=3" style = "background-color:<?php echo $clr3; ?>;">Price</a>
            <a href="?numb=4" style = "background-color:<?php echo $clr4; ?>;">Contact</a>


        </div>
        <form action="scripts/lab2.php" method="post">
            Source text: <input type="text" name="sourceText"/><br/>
            <p><input type = "submit" name = "action_button"></p>

        </form>
    </body>
</html>
