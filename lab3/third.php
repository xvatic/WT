<form action="third.php" method="POST">
<p>Id: <input type="text" name="id" value="<?php if(isset($_POST['id'])){ echo $_POST['id'];} ?>"/></p>
<p>Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>"/></p>
<p>Price: <input type="text" name="price" value="<?php if(isset($_POST['price'])){ echo $_POST['price'];} ?>"/></p>
<p>Description: <input type="text" name="description" value="<?php if(isset($_POST['description'])){ echo $_POST['description'];} ?>"/></p>
<p><input type="submit" value="Add"/></p>
</form>
<?php
    if (!empty($_POST['id']) and
        !empty($_POST['price']) and
        !empty($_POST['name']) and
        !empty($_POST['description']))
    {
        if(AddOrder($_POST['id'], $_POST['name'], $_POST['price'], $_POST['description']))
            echo '<p style="color:green">Order is added.</p>';
        else
            echo '<p style="color:red">Some data are incorrect.</p>';
    }

    ShowData();

    function AddOrder($id, $name, $price, $descript)
    {
        if (!is_numeric($price))
        {
            return false;
        }
        $csv = array_map('str_getcsv', file('list.csv'));

        $newOrder = array($id, $name, $price, $descript);
        array_push($csv, $newOrder);
        $fp = fopen('list.csv', 'w');

        foreach ($csv as $fields)
        {
            fputcsv($fp, $fields);
        }

        fclose($fp);
        return true;
    }

    function ShowData()
    {
        $csv = array_map('str_getcsv', file('list.csv'));
        echo "<ul>";
        foreach ($csv as $value)
        {
            $link = "show.php?id=$value[0]&name=$value[1]&price=$value[2]&descr=$value[3]";
            echo "<li><a href='".$link."'>$value[1]</br></a></li>";
        }
        echo "</ul>";
    }
?>
