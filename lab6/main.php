
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
        <img src="img/challenger650.png" alt="" width="20%" >
        <p><input type="submit" name="addchallenger" value="Add to cart"/></p>
        <img src="img/g500.jpg" alt="" width="20%" >
        <p><input type="submit" name="addg500" value="Add to cart"/></p>
        <img src="img/g700.jpg" alt="" width="20%" >
        <p><input type="submit" name="addg700" value="Add to cart"/></p>
        <img src="img/global6000.png" alt="" width="20%" >
        <p><input type="submit" name="addglobal" value="Add to cart"/></p>
        <img src="img/learjet75.png" alt="" width="20%" >
        <p><input type="submit" name="addlearjet" value="Add to cart"/></p>
    </form>
    <?php

        session_start();
        if (!isset($_SESSION['cart_list'])){
            $_SESSION['cart_list'] = [];
        } 
        
        if(isset($_POST['addchallenger'])){
            array_push($_SESSION['cart_list'], 'Challenger 650');
            Print_list($_SESSION['cart_list']);
        }
        if(isset($_POST['addg500'])){
            array_push($_SESSION['cart_list'], 'G 500');
            Print_list($_SESSION['cart_list']);
        }
        if(isset($_POST['addg700'])){
            array_push($_SESSION['cart_list'], 'G 700');
            Print_list($_SESSION['cart_list']);
        }
        if(isset($_POST['addglobal'])){
            array_push($_SESSION['cart_list'], 'Global 6000');
            Print_list($_SESSION['cart_list']);
        }
        if(isset($_POST['addlearjet'])){
            array_push($_SESSION['cart_list'], 'Learjet 75');
            Print_list($_SESSION['cart_list']);

        }
       
        if(isset($_POST['checkout'])){
            $_SESSION['cart_list'] = array();
            Print_list($_SESSION['cart_list']);
        }

        function Print_list($list){
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
