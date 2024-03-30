<?php 
    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>90,'uas'=>95,'tugas'=>98];
    $ns2 = ['id'=>2,'nim'=>'01101','uts'=>80,'uas'=>85,'tugas'=>88];
    $ns3 = ['id'=>3,'nim'=>'01101','uts'=>70,'uas'=>75,'tugas'=>78];
    $ns4 = ['id'=>4,'nim'=>'01101','uts'=>60,'uas'=>65,'tugas'=>68];

    $ar_nilai = [$ns1,$ns2,$ns3,$ns4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Daftar Nilai Siswa</title>
</head>
<body>

<div class="container mt-3">
    <h3 class="text-center">Daftar Nilai Siswa</h3>
    <table class="table mx-auto">
        <thead class="table table-bordered table-primary">
            <tr>
                <th>No</th><th>NIM</th><th>UTS</th>
                <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody class="table table-bordered table-secondary">
            <?php 
            $nomor = 1;
            foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
