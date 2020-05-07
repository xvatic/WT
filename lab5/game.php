<form action="game.php" method="POST">

<p>City: <input type="text" name="city" value="<?php if(isset($_POST['city'])){ echo $_POST['city'];} ?>"/></p>



<p><input type="submit" value="answer"/></p>

</form>
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
    

    
   

    if($result = mysqli_query($link, "SELECT * FROM cities") or die(mysqli_error($success))){

    }
    else{echo "Getting data error";}

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    $currcity = $data[0][city];
    
    
    if (!empty($_POST['city']))
    {
    
       $p1 = $_POST['city'];
       $c1 = mb_strtolower($p1);
       $c1 = str_split($c1);
       
       $currcity = mb_strtolower($currcity);
       $currcity_a = str_split($currcity);
       if ($c1[0] != end($currcity_a) ){
           if ($currcity == NULL){
            echo ('START');
           }
           else {
               echo ('GAME OVER');
               $result = mysqli_query($link, "UPDATE cities SET used = 0 WHERE id>=1") or die("Error".mysqli_error($link));
               $result = mysqli_query($link, "UPDATE cities SET used = 0,city = '' WHERE id=1") or die("Error".mysqli_error($link));
            }
        }
       Game($p1, $data, $link);
    }

    

    function Game($cityc, $list, $link)
    {
        
        $cityc = str_split($cityc);
        $letter = end($cityc);
    
        foreach ($list as $row){
            $city_needed  = $row[city];
            $city_needed_l = mb_strtolower($city_needed);
            $city_needed_l = str_split($city_needed_l);
            $needed_letter = $city_needed_l[0];

            if($needed_letter == $letter and $row[used] == 0 and random_int(0, 1000) < 974 and $row[id] != 1) {
                echo($city_needed);
                $currcity = $city_needed;
                $id = $row[id];
                $result = mysqli_query($link, "UPDATE cities SET city = '$city_needed' WHERE id=1") or die("Error".mysqli_error($link));
                $result = mysqli_query($link, "UPDATE cities SET used = 1 WHERE id=$id ") or die("Error".mysqli_error($link));
                break;
            }
            
        }

        

    }

    
?>