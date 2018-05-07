<?php
// 4x1 3x2 2x3 3x4
// size = 5 - (number of ships)

$array = [];

for ($size=1;$size<5;$size++){
    $number = 5 - $size;
    for ($ship=0;$ship<$number;$ship++){
        
        $ok = false;
        
        while(!$ok){
            
            $temparray = $array;
        
            $direction = rand(0,1);
            $nx = rand(0,10-$size);
            $ny = rand(0,9);
            $ok = true;
            
            for($x=$nx-1;$x<$nx+$size+1;$x++){
                
                if($direction==0){
                if( (isset($array[$x][$ny])) or (isset($array[$x][$ny+1])) or (isset($array[$x][$ny-1]))) $ok = false;}
                else if(isset($array[$ny][$x]) or isset($array[$ny+1][$x]) or isset($array[$ny-1][$x])) $ok = false;
            }
        
        }
    
        for($x=$nx;$x<$nx+$size;$x++){
            if($direction==0)
            $array[$x][$ny] = 1;
            else $array[$ny][$x] = 1;
        }
    }
}

    $c = 0;

for($x=0;$x<10;$x++){
    for($y=0;$y<10;$y++){
        if(isset($array[$x][$y])) {
            echo '1';  
        }
        else echo '0';
    }
    echo "\n";
}
