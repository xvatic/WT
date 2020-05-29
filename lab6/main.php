
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>AIRHYPE</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
    <form action="main.php" method="POST">
        <p><input type="submit" name="checkout" value="Checkout"/></p>
        <?php
             $user = 'root';
             $password = 'root';
             $db = 'plane';
             $host = 'localhost';
             $port = 8889;
             
             $link = mysqli_init();
             $success = mysqli_real_connect(
                $link,
                $host,
                $user,
                $password,
                $db,
                $port
             );
            $res = mysqli_query($link,"SELECT * FROM shop");
            while ($row =mysqli_fetch_assoc($res)){
                
                echo"<img src='img/".$row['jet'].".png' width=20%>";
                echo"<img src='img/".$row['jet'].".jpg' width=20%>";
                echo'Price: '.$row['price'].' kk$';
                ?>
                <p><input type="submit" name="<?php echo $row['jet']; ?>" value="Add to cart"/></p>
                <?php
            }
            
        ?>
       
    </form>
    <?php

        session_start();
        if (!isset($_SESSION['cart_list'])){
            $_SESSION['cart_list'] = [];
        } 
        if (!isset($_SESSION['total'])){
            $_SESSION['total'] = 0;
        }
        $arrPost = array();
        $res = mysqli_query($link,"SELECT * FROM shop");
        while ($row =mysqli_fetch_assoc($res)){
                array_push($arrPost, $row['jet']);  
        }
        
        
        foreach($arrPost as $val){
            if(isset($_POST[$val])){
                array_push($_SESSION['cart_list'], $val);
                $res = mysqli_query($link,"SELECT * FROM shop WHERE jet ='$val'");
                while ($row =mysqli_fetch_assoc($res)){
                        $_SESSION['total']+=$row['price'];
                }
                Print_list($_SESSION['cart_list'], $_SESSION['total']);
            }
        }
      
        if(isset($_POST['checkout'])){
            $_SESSION['cart_list'] = array();
            $_SESSION['total'] = 0;
            Print_list($_SESSION['cart_list'],$_SESSION['total']);
        }

        function Print_list($list,$total){
            echo('Total price:'.$total.' KK$<br/>');
            echo('items in cart:<br/>');
            $list_u = array_unique($list);
            foreach ($list_u as $item){
                $count = 0;
                foreach ($list as $item1){
                    if ($item == $item1){
                        $count+=1;
                    }
                }

                echo($item .'x'.$count. '<br/>');
            }
        }


        
        
    ?>

</body>
</html>
