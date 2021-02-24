<?php

echo '<h4>Pirma uzduotis</h4>';

function tekst($a) { // $a argumentas
    return "<h1 style = 'color:red'>$a</h1>";
}
echo tekst('Labas');

echo '<h4>Antra uzduotis</h4>';

function tekst2($a, $b) {
    return "<h$b style = 'color:red'>$a</h$b>";
}
echo tekst2('Labas', rand(1, 6));

echo '<h4>Trecia uzduotis</h4>';

$kodas = md5(time());

_d($kodas);

function h1($text) {
    if(is_array($text)) {
        $text = $text[0];
    }
    return '<h1 style = "display:inline;">'.$text.'</h1>';
}

 $pakeistasKodas = preg_replace_callback('/\d+/', function($match){
    _d($match);
    return h1($match[0]);
}, $kodas);

echo $pakeistasKodas;

echo '<h4>Ketvirta uzduotis</h4>';

function dalintuvas($number) {
    $div = 0;
    if(!is_int($number)) {
       // echo 'blogai';
    } else {
        for($i = 2; $i < $number; $i++) {
            if($number % $i == 0) {
                $div++;
            }
        }
        return $div;
    }
}
echo dalintuvas(4);

echo '<h4>Penkta uzduotis</h4>';

$array = [];
foreach(range(1, 10) as $index1) {
        $array[] = rand(33, 77);
}
usort($array, function($a, $b) {
    return dalintuvas($b) <=> dalintuvas($a);
});

echo '<pre>';
print_r ($array);
echo '</pre>';

echo '<h4>Sesta uzduotis</h4>';

$array1 = [];
foreach(range(1, 25) as $index) {
    $array1[] = rand(333, 777);
}
echo '<pre>';
print_r ($array1);
echo '</pre>';

$ilgis = count($array1);

for ($i=0; $i < $ilgis; $i++) { 
    if(dalintuvas($array1[$i]) == 0) {
        unset($array1[$i]);
    }
}
echo '<pre>';
print_r ($array1);
echo '</pre>';

echo '<h4>Septinta uzduotis</h4>';

$rand = rand(10,30);
function generate($rand) {
    $num = rand(10,20);
    for ($i=0; $i < $num; $i++) { 
        if($i < $num - 1) {
            $array7[$i] = rand(10,20);
        } else {
            if($rand > 0) {
                $array7[$i] = generate($rand - 1);
            } else {
                $array7[$i] = 0;
            }
        }
    }
    return $array7;
}
echo '<pre>';
print_r (generate($rand));
echo '</pre>';

echo '<h4>Astunta uzduotis</h4>';

// function susumuoti($array) {
//     $sum8 = 0;
//     foreach ($array as $ele) {
//         if (is_numeric($ele)) {
//             $sum8 += $ele;
//             } else if (is_array($ele)) {
//                 $sum8 += susumuoti($ele);
//             }
//         }
//     return $sum8;
// }
// _dc(susumuoti($array7));

echo '<h4>Devinta uzduotis</h4>';

function isPrime($number) {
    if (0 == $number || 1 == $number) return false;
    if (2 == $number) return true;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}
for ($i = 0; $i < 3; $i++) {
    $array3[$i] = rand(1, 33);
}
echo '<pre>';
print_r($array3);
echo '</pre>';
while (isPrime($array3[count($array3) - 1]) || isPrime($array3[count($array3) - 2]) || isPrime($array3[count($array3) - 3])) {
    $array3[] = rand(1, 33);
}
echo '<pre>';
print_r($array3);
echo '</pre>';