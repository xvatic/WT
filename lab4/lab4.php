<?php


$text = file_get_contents("text.txt");
preg_match_all("/.*?[.?!](?:\s|$)/s",$text,$items);
for ($i = 0; $i < count($items[0]); $i++){
    $items[0][$i] .= " <br>";
    $s = preg_replace('#(\d+)#', '<span style="color: blue">$1</span>', $items[0][$i]);
    echo preg_replace('`(\b[А-ЯЁA-Z]{2,}\b)`u', '<span style="text-decoration: underline;">$1</span>', $s);
}

?>
