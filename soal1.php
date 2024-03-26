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

// Definisi kelas Tim
class Tim {
    public $nama;
    public $data1;
    public $databonus1;
    public $databonus2;

    public function __construct($nama, $data1, $databonus1, $databonus2) {
        $this->nama = $nama;
        $this->data1 = $data1;
        $this->databonus1 = $databonus1;
        $this->databonus2 = $databonus2;
    }

    public function hitungSkor() {
        return $this->data1 + $this->databonus1 + $this->databonus2;
    }
}

// Definisi kelas Hasil
class Hasil {
    public $lumba;
    public $koala;

    public function __construct($lumba, $koala) {
        $this->lumba = $lumba;
        $this->koala = $koala;
    }

    public function HTML() {
        $skorLumba = $this->lumba->hitungSkor();
        $skorKoala = $this->koala->hitungSkor();

        echo "<p>Skor Tim {$this->lumba->nama}: $skorLumba</p>";
        echo "<p>Skor Tim {$this->koala->nama}: $skorKoala</p>";

        if ($skorLumba > $skorKoala) {
            echo "<p>Tim {$this->lumba->nama} unggul.</p>";
        } elseif ($skorKoala > $skorLumba) {
            echo "<p>Tim {$this->koala->nama} unggul.</p>";
        } else {
            echo "<p>Hasil imbang.</p>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data 1
    echo "<h2>Data 1</h2>";
    $lumba = new Tim('Lumba-lumba', 96, 108, 89);
    $koala = new Tim('Koala', 88, 91, 110);
    $hasil = new Hasil($lumba, $koala);
    $hasil->HTML();

    // Data Bonus 1
    echo "<h2>Data Bonus 1</h2>";
    $lumba_bonus1 = new Tim("Lumba-lumba", 97, 112, 101);
    $koala_bonus1 = new Tim("Koala", 109, 95, 123);
    $hasil_bonus1 = new Hasil($lumba_bonus1, $koala_bonus1);
    $hasil_bonus1->HTML();

    // Data Bonus 2
    echo "<h2>Data Bonus 2</h2>";
    $lumba_bonus2 = new Tim("Lumba-lumba", 97, 112, 101);
    $koala_bonus2 = new Tim("Koala", 109, 95, 106);
    $hasil_bonus2 = new Hasil($lumba_bonus2, $koala_bonus2);
    $hasil_bonus2->HTML();
}
?>
