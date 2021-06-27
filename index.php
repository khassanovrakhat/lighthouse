<?php
    $A = [[16,5,7,36,9,8,4,2,3,6], [7,9,3,6,15,16,8,20,2,3]];
    $B = [1,2,3,4,5,6,7,8,9,10];
    

    $mask = "|%5.5s |%-65.65s |\n";

    printf($mask, 'Key', 'Value');
    for($i = 0; $i < count($A); $i++){
        // for($j = 0; $j < count($A[$i]); $j++){
            printf($mask, $i, implode(",", $A[$i]));
        // }
    }
    echo "\n";

    $merge = array_merge($A[0],$A[1]);
    $result = array_intersect($merge, $B); 
    print_r(implode(",", $result));

    echo "\n";

    printf($mask, 'Key', 'Value');
    printf($mask, 0, implode(",",$B));
    
    echo "\n";

    for($j = 0; $j < count($merge); $j++){
        if(in_array($merge[$j], $B)){
            $array[] = $merge[$j];
        }else{
            $array[] = 'нет';
        }
    }
    printf($mask, 0, implode(",",$array));
    echo "\n";
?>