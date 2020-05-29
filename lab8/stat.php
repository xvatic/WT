<!DOCTYPE html>
<html lang="ru">

<head>
    <title>AIRHYPE</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
    <form action="stat.php" method="POST">
        <p><input type="submit" name="show" value="SHOW"/></p>
        
    
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


        $user_agent = $_SERVER["HTTP_USER_AGENT"];
        $ip = $_SERVER["HTTP_HOST"];
       
        
        
        Check_unique($ip,$link,$user_agent);

        function Check_unique($ip,$link,$user_agent){
            $res = mysqli_query($link,"SELECT * FROM users HAVING ip = '".$ip."'") or die(mysqli_error($link));
            $row = mysqli_num_rows($res);
            if($row > 0){
                return;
            }
            else{
                Refresh_stat($ip,$link,$user_agent);
            }
        }

        function Refresh_stat($ip,$link,$user_agent){
            mysqli_query($link,"INSERT INTO users (ip) VALUES ('$ip') "); 
            if (strpos($user_agent,"Firefox") != False) $browser = "Firefox";
            elseif (strpos($user_agent,"MSIE") != False) $browser = "MSIE";
            elseif (strpos($user_agent,"Opera") != False) $browser = "Opera";
            elseif (strpos($user_agent,"Chrome") != False) $browser = "Chrome";
            elseif (strpos($user_agent,"Safari") != False) $browser = "Safari";
            else $browser = "Unknown";
            $res = mysqli_query($link,"SELECT * FROM stats HAVING browser = '".$browser."'");
            $row = mysqli_num_rows($res);
            if($row > 0){
                mysqli_query($link,"UPDATE stats SET count = count+1 WHERE browser = '".$browser."'");
            }
            else{
                mysqli_query($link,"INSERT INTO stats (browser,count) VALUES ('$browser', 1)");
            }
            


        }

        if(isset($_POST['show'])){
            $res = mysqli_query($link,"SELECT * FROM stats ORDER BY count DESC");
            while ($row =mysqli_fetch_assoc($res)){
                echo"<table> <tr> <td>".$row['browser']."</td><td>".$row['count']."</td> </tr> </table>";
            }
        }
        
        
    ?>

</body>
</html>