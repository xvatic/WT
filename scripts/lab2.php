<?php

    function equalize($word)
    {
        $word = str_split($word);
        for ($i = 0; $i < count($word); $i++){
            if($i == 0){
                $word[$i] = strtoupper($word[$i]);
            }
            else{
                $word[$i] = strtolower($word[$i]);
            }
        }
        $word = implode('', $word);
        return $word;
    }

    function show($resultText)
    {
        echo $resultText;
    }

    $sourceText  = $_POST['sourceText'];
    $sourceText = explode(',', $sourceText);
    for ($i = 0; $i < count($sourceText); $i++){
        $sourceText[$i] = equalize($sourceText[$i]);
    }
    sort($sourceText);
    $sourceText = array_unique($sourceText);
    $resultText = implode('  ', $sourceText);
    show($resultText);


?>
