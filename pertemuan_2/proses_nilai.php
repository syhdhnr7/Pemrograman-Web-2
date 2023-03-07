<?php
if(isset($_GET['submit'])){

$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$praktikum = $_GET['praktikum'];
$average = round(($uts + $uas + $praktikum) / 3, 2);


echo "Nama : $nama <br>";
echo "Mata Kuliah : $matkul <br>";
echo "Nilai UTS : $uts <br>";
echo "Nilai UAS : $uas <br>";
echo "Nilai Praktikum : $praktikum <br>";
echo "Nilai Rata-Rata Nilai : $average <br>";
if($average <= 35){
    echo "Grade : E";
} elseif($average <= 55){
    echo "Grade : D";
} elseif($average <= 69){
    echo "Grade : C";
} elseif($average <= 84){
    echo "Grade : B";
} elseif($average <= 100){
    echo "Grade : A";
} elseif($average > 100){
    echo "Grade : I";
} elseif($average < 0){
    echo "Grade : I";
}

} else{
    echo "Tidak Ada Data!";
}
?>