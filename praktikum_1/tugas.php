<?php
$mahasiswa1 = [
    'id' =>1,
    'nim'=>101000374,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];
$mahasiswa2 = [
    'id' =>4,
    'nim'=>101440331,
    'uts'=>95,
    'uas'=>85,
    'tugas'=>90,
];
$mahasiswa3 = [
    'id' =>2,
    'nim'=>10560365,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>85,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2>DAFTAR NILAI MAHASISWA</h2>
        <table class="table table-stripped">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>UAS</th>
                <th>UTS</th>
                <th>TUGAS</th>
            </tr>
           <?php foreach($ar_nilai as $nilai){?>
            <tr>
                <td><?php echo $nilai ['id'];?></td>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['nim'];?></td>
                <td><?= $nilai['uts'];?></td>
                <td><?= $nilai['uas'];?></td>
                <td><?= $nilai['tugas'];?></td>
                
            </tr>
       <?php  } ?>
        </table>
    </div>
    
</body>
</html>








?>