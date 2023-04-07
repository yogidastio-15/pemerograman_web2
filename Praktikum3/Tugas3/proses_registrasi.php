<?php 
$domisili = ["Jakarta","Bogor","Depok","Tanggerang","Bekasi","Kalimantan"];

$program_studi =[
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>"Bisnis Digital"

];

$skill_user = [
    "HTML"=>10,
    "CSS"=>10,
    "JavaScript"=>20,
    "RWD Boostrap"=>20,
    "PHP"=>30,
    "Python"=>30,
    "Java"=>50,
];

function cekRange($skor) {
    if ($skor ==0){
        return "Tidak Mengisi";
    }
    if ($skor ==0){
        return "Kurang";
    }
    if ($skor ==0){
        return "Cukup";
    }
    if ($skor ==0){
        return "Bagus";
    }
    if ($skor ==0){
        return "Sangat Bagus";
    }  
};  



?>