<?php

$randomElements=[];
echo rand(0,100);
for($i=0;$i<10;$i++){
    array_push($randomElements,rand(0,100));
}
print_r($randomElements);
