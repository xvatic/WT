<form action="show.php" method="POST">
<?php
    $id = $_GET['id'];
    $man = $_GET['manufactor'];
    $name = $_GET['name'];
    $dist = $_GET['distance'];

    $host = 'localhost'; 
	$user = 'root'; 
	$password = 'root';
	$db_name = 'plane';

    $link = mysqli_connect($host, $user, $password, $db_name);
    

	
    

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    if($id != NULL){
        $query = "SELECT * FROM info WHERE id = $id";
    }

    if($man != NULL){
        $query = "SELECT * FROM info HAVING manufactor = '".$man."' ";

    }
    if($name != NULL){
        $query = "SELECT * FROM info HAVING name = '".$name."' ";
    }
    if($dist != NULL){
        $query = "SELECT * FROM info WHERE distance > $dist";
    }
    
    if($result = mysqli_query($link, $query) or die(mysqli_error($link))){

    }
    else{echo "Getting data error";}

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    $data_a = []; 
    foreach($data as $row){
        $query = "SELECT * FROM additional WHERE id = $row[id]";
        if($result = mysqli_query($link, $query) or die(mysqli_error($link))){
        }
        else{echo "Getting data error";}
        for ($data_a; $row_a = mysqli_fetch_assoc($result); $data_a[] = $row_a);


    }
    
    
    echo '<table border="1">';

    for ($tr=0; $tr<=count($data); $tr++){ 
        echo '<tr>';
    
            echo '<td>'. $data[$tr][id].'</td>';
            echo '<td>'. $data[$tr][manufactor] .'</td>';
            echo '<td>'. $data[$tr][name] .'</td>';
            echo '<td>'. $data[$tr][distance] .'</td>';
            echo '<td>'. $data_a[$tr][reldate] .'</td>';
           
        
        echo '</tr>';
    }

    echo '</table>';


    
    $link = "req.php";
    echo "<a href='".$link."'>Back</a>";
?>
</form>