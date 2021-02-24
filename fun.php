<?php
function sudeti($vienas, $du)
{
   $rezultatas = $vienas + $du;
   return $rezultatas;
}

//Norint iškviesti šią funkciją, reikia paduoti du parametrus:
echo sudeti(1,5);

echo '<br>';

function foo() {
    static $index = 0; //kreipemasi tik viena karta su static
    $index++;
    echo $index;
}

foo();
foo();
foo();

echo '<br><br>';

function recursive($num){
    echo $num, '<br>';
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive($num + 1);
    }
}
$startNum = 1;
recursive($startNum);

echo '<br><br>';
$f = function($a, $b){
    return $a[0] <=> $b[0];
};
function aaa($a, $b){
    return $a[0] <=> $b[0];
};

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];
usort($masyvas, function ($a, $b){
    return $a[0] <=> $b[0];
});

_dc($masyvas);

echo '<br><br>';

$result = 0;
$one = function()
{ 
    var_dump($result);
 };
 
$two = function() use ($result)
{
     var_dump($result); 
};
 
$three = function() use (&$result)
{ 
    var_dump($result);
 };
 
$result++;
 
$one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
$three();    // int(1)

?>