<?php 
    echo '<i>1. Variabel User</i><br/>';
    // Define Variable
    $nama = 'Abror Pratama';
    $umur = 19;
    $berat = 50;

    echo '<br/>Nama : ' . $nama;
    echo '<br/>Umur : ' .$umur.' Tahun';
    echo '<br/>Berat : ' .$berat.' Kg';

    echo "<br/>Hello $nama Apakabar";
?>

<hr>

<?php 
    echo '<i>A. Variabel System</i><br/>';
    // define system
    echo '<br/>Dokument Root '.$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
?>

<hr>

<?php 
     echo '<i>B. Variabel Konstan</i><br/>';
    //  define konstan
     define('PHI',3.14);
     define('DBNAME','inventori');
     define('DBSERVER','localhost');

     $jari = 8;
     $luas = PHI * $jari * $jari;
     $kll = 2 *PHI * $jari;

     echo '<br/>Luas Lingkaran dengan jari ' .$jari.' : '.$luas;
     echo '<br/>Kelilingnya : '.DBNAME;
?>
<?php 
    echo '<br/>Nama databasenya : '.DBNAME;
    echo '<br/>Lokasi databasenya ada di '.DBSERVER;
?>

<hr>

<?php 
    echo '<i>2. Data Array</i><br/><br/>';

    $ar_buah = ["Jambu", "Mangga","Pisang","Pepaya"];
    // cetak buah ke index 2
    echo $ar_buah[2];
    // cetak jumlah buah
    echo '<br/>Jumlah Buah ' .count($ar_buah);
    // cetak seluruh buah
    echo '</ol>';
    // tambah buah
    $ar_buah[]="Durian";
    // hpus buah index ke 1
    unset($ar_buah[1]);
    // ubah buah index ke 2 menjadi manggis
    $ar_buah[2]="Manggis";
    // cek selruh buah dngn indexnya
    echo '</ul>';
    foreach($ar_buah as $k => $v) {
            echo '<li> buah index - ' .$k .'adalah ' .$v .'</li>'; 
    }
    echo '</ul>';
?>

<hr>

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

<hr>

<?php 
    echo '<i>2. Fungsi Array Pop</i></br><br/>';
    $tims = ["Abror","Budi","Ali","Muh"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'</br>';
    }
?>

<hr>

<?php 
    echo '<i>3. Fungsi Array Push</i></br><br/>';
    $tims = ["Abror","Budi","Ali","Muh"];
    array_push($tims,"heru");
    foreach($tims as $person){
        echo $person.'</br>';
    }
?>

<hr>

<?php 
    echo '<i>4. Fungsi Array Shift</i></br><br/>';
    $tims = ["Abror","Budi","Ali","Muh"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person.'</br>';
    }
?>

<hr>

<?php 
    echo '<i>5. Fungsi Array Unshift<i/><br/><br/>';
    $tims = ["Abror","Budi","Ali","Muh"];
    array_unshift($tims,"joko","herman");
    foreach($tims as $person){
        echo $person.'</br>';
    }
?>