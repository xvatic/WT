<form action="req.php" method="POST">
<p>Id: <input type="text" name="id" value="<?php if(isset($_POST['id'])){ echo $_POST['id'];} ?>"/></p>
<p>Manufactor: <input type="text" name="manufactor" value="<?php if(isset($_POST['manufactor'])){ echo $_POST['manufactor'];} ?>"/></p>
<p>Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>"/></p>
<p>Distance: <input type="text" name="distance" value="<?php if(isset($_POST['distance'])){ echo $_POST['distance'];} ?>"/></p>
<p><input type="submit" value="sort"/></p>

</form>
<?php
    if (!empty($_POST['id']) or
        !empty($_POST['manufactor']) or
        !empty($_POST['name']) or
        !empty($_POST['distance']))
    {
        if (empty($_POST['id'])) {
            $p1 = NULL;
        }
        else{
            $p1 = $_POST['id'];
        }
        if (empty($_POST['manufactor'])) {
            $p2 = NULL;
        }
        else{
            $p2 = $_POST['manufactor'];
        }
        if (empty($_POST['name'])) {
            $p3 = NULL;
        }
        else{
            $p3 = $_POST['name'];
        }
        if (empty($_POST['distance'])) {
            $p4 = NULL;
        }
        else{
            $p4 = $_POST['distance'];
        }

        Sort_by($p1, $p2, $p3, $p4);
    }

    

    function Sort_by($id, $manufactor, $name, $distance)
    {
        echo "<ul>";
       
        $link = "show.php?id=$id&manufactor=$manufactor&name=$name&distance=$distance";
        echo "<li><a href='".$link."'>Formed Request</br></a></li>";
        
        echo "</ul>";

    }

    
?>