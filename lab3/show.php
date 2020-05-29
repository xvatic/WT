<form action="show.php" method="POST">
<?php
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $descr = $_GET['descr'];
    

    $floatPrice = floatval($price);
    $floatPrice = $floatPrice - $floatPrice * 0.15;
    $floatPrice = round($floatPrice, 2);

    echo "id: $id</br>Name: $name</br>Price: $floatPrice (%15)</br>Real price: $price</br>Description: $descr</br>";
    $link = "third.php";
    echo "<a href='".$link."'>Back</a>";
?>
</form>
