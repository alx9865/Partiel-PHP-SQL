<?php
    echo "PARTIE A. <br><br><br>";
    $input = rand(0,10);
    $i = 0;
    $output = 0;
    echo "Table de $input.<br><br>";
    while ($i < 10) {
        $i ++;
        $output = $input * $i;
        echo "$input *$i = $output<br>";
    };
    
    echo "<br><br><br><br>";

    echo "PARTIE B. <br><br><br>";
    $nombre = 0;
    $i = 0;
    $output = 0;
    echo "Tables de multiplication de 1 à 10.<br><br>";
    while ($nombre < 10){
        $nombre++;
        while ($i < 10) {
            $i ++;
            $output = $nombre * $i;
            echo "$nombre *$i = $output<br>";
        };
        echo "<br><br>";
        $i = 0;
    }
?>