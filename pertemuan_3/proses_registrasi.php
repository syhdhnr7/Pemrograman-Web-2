<?php
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    function skor_skill($skills){
        $ar_skills = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 30,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;
        foreach($skills as $skill){
            $result = $result + $ar_skills[$skill];
        }
        return $result;
    }

    function kategori_skill(){
    }
    
    echo "NIM : $nim";
    echo "<br> Nama : $nama";
    echo "<br> Jenis Kelamin : $gender";
    echo "<br> Prodi : $prodi";
    echo "<br> Skill Programming : ";
    foreach($skills as $skill){
        echo $skill . ", ";
    }
    echo "<br> Tempat Domisili : $domisili";
    echo "<br> Email : $email";
    echo "<br> Skor Skill : " . skor_skill($skills);
    echo "<br> Kategori Skill : ";
    if(skor_skill($skills) == 0){
        echo "Tidak Memadai";
    } elseif(skor_skill($skills) >= 1 && skor_skill($skills) <= 40){
        echo "Kurang";
    } elseif(skor_skill($skills) >= 41 && skor_skill($skills) <= 60){
        echo "Cukup";
    } elseif(skor_skill($skills) >= 61 && skor_skill($skills) <= 100){
        echo "Baik";
    } elseif(skor_skill($skills) >= 101 && skor_skill($skills) <= 180){
        echo "Sangat Baik";
    } else{
        echo "Tidak Ada Data Yang Cocok";
    }
}

?>