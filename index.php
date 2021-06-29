<?php
    
   for($i = 0; $i < 10; $i++){
    $D[] = rand(0,20);
    $E[] = rand(0,20); 
   }

    echo "\n";
    $A = [$D, $E];
    $B = $D;
    
    $mask = "|%5.5s |%-10.10s |\n";

    printf($mask, 'Key', 'Value');
    $i = 0;
    foreach($A as $key => $value){
        foreach($value as $k => $val){
            printf($mask, $k, $val);
        }
    }
    echo "\n";

    $merge = array_merge($A[0],$A[1]);
    $result = array_intersect($merge, $B); 
    print_r(implode(",", $result));
    echo "\n";

    echo "\n";
    printf($mask, 'Key', 'Value');
    foreach($B as $key => $value){
        printf($mask, $key, $value);
    }
    
    
    echo "\n";

    for($j = 0; $j < count($merge); $j++){
        if(in_array($merge[$j], $B)){
            $array[] = $merge[$j];
        }else{
            $array[] = 'нет';
        }
    }
    foreach($array as $key => $value){
        printf($mask, $key, $value);
    }
    
    echo "\n";
?>