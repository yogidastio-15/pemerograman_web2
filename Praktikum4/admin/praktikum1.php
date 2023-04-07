<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";

?>
<?php
// ini sebuah komentar
/* ini juga sebuah komentar */
# komentar pake simbol kres



echo "Hello World <br>";
echo "Hello World <br>";
print_r("Azka Rabbani <br>");
var_dump("STT NURUL FIKRI");
echo "<hr>";


$nama = "Azka Rabbani";
$umur = 18;
$berat = 63;
$mahasiswa = true;

echo "Nama Saya $nama <br>";
echo "umur saya $umur tahun <br>";
echo "berat saya $berat kg <br>";
echo "<hr>";



// Membuat Array
$programs = ["php", "javascript", "html", "css"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}



?>
 <?php require_once "layouts/footer.php"; ?>