<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo '<i>A. Array Fungsi</i><br/>';
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
}

echo '</ol>';

echo '<hr/>';

echo '<i>1. Fungsi Sort</i><br/>';
sort($ar_buah);

echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';
?> 

</body>
</html>