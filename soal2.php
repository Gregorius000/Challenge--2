<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
    <style>
        body {
            background-image: url(https://th.bing.com/th/id/OIP.cI1C4rf1BrZzr6NrYg1iYwHaD3?w=294&h=180&c=7&r=0&o=5&pid=1.7);
            background-size: cover;
            background-repeat: no-repeat;
            color: #f8f8ff;
        }
    </style>
</head>

<body>
    
</body>
</html>
<?php
// Definisi kelas Orang
class Orang {
    public $nama;
    public $berat;
    public $tinggi;

    public function __construct($nama, $berat, $tinggi) {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
}

// Definisi kelas Hasil
class Hasil {
    public $orang1;
    public $orang2;

    public function __construct($orang1, $orang2) {
        $this->orang1 = $orang1;
        $this->orang2 = $orang2;
    }

    public function HTML() {
        // Hitung BMI (Body Mass Index)
        $bmiOrang1 = $this->orang1->berat / ($this->orang1->tinggi * $this->orang1->tinggi);
        $bmiOrang2 = $this->orang2->berat / ($this->orang2->tinggi * $this->orang2->tinggi);

        echo "<p>BMI {$this->orang1->nama}: $bmiOrang1</p>";
        echo "<p>BMI {$this->orang2->nama}: $bmiOrang2</p>";

        if ($bmiOrang1 > $bmiOrang2) {
            echo "<p>{$this->orang1->nama} memiliki BMI lebih tinggi.</p>";
        } elseif ($bmiOrang1 < $bmiOrang2) {
            echo "<p>{$this->orang2->nama} memiliki BMI lebih tinggi.</p>";
        } else {
            echo "<p>BMI kedua orang sama.</p>";
        }
    }
}

// Data 1
echo "<h2>Data 1</h2>";
$mark = new Orang("Mark", 78, 1.69);
$john = new Orang("John", 92, 1.95);
$hasil = new Hasil($mark, $john);
$hasil->HTML();

// Data 2
echo "<h2>Data 2</h2>";
$mark = new Orang("Mark", 95, 1.88);
$john = new Orang("John", 85, 1.76);
$hasil = new Hasil($mark, $john);
$hasil->HTML();
?>
