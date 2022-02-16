<?php
    $input = rand(0,100);
    $i = 0;
    $output = 0;
    echo "$input<br>";
    while ($i < $input) {
        $i ++;
        echo "$i + ";
        $output += $i;
    };
    echo "$input = $output<br><br>";
?>