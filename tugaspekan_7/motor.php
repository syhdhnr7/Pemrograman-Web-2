<?php
class Motor {
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;
    
    public function __construct($merk, $bensin, $topSpeed, $cc) {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }
    
    public function jalan($jarak) {
        $bensin_digunakan = $jarak / 30;
        if ($bensin_digunakan <= $this->bensin) {
            $this->bensin -= $bensin_digunakan;
            echo "Motor " . $this->merk . " telah menempuh jarak " . $jarak . " km.\n";
            echo "Sisa bensin: " . $this->bensin . " liter.\n";
        } else {
            echo "Bensin tidak cukup untuk menempuh jarak tersebut.\n";
        }
    }
}

// Membuat objek motor1
$motor1 = new Motor("Honda", 5, 150, 125);
$motor2 = new Motor("Yamaha", 3, 180, 150);

// Memanggil method jalan dengan jarak 90 km
$motor1->jalan(90);
$motor2->jalan(120);

?>