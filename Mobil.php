
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .mobil-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .mobil-container h2 {
            color: #333;
        }

        .mobil-container p {
            margin: 5px 0;
            color: #555;
        }

        .mobil-sport {
            border-left: 5px solid #ff6b6b;
        }

        .city-car {
            border-left: 5px solid #4ecdc4;
        }
    </style>
</head>
<body>

<?php
// Kelas induk Mobil
class Mobil {
    public $nama;
    public $merk;

    public function __construct($nama, $merk) {
        $this->nama = $nama;
        $this->merk = $merk;
    }

    public function cetakInfo() {
        echo "<p>Nama Mobil: $this->nama</p>";
        echo "<p>Merk: $this->merk</p>";
    }
}

// Kelas turunan MobilSport
class MobilSport extends Mobil {
    public $speed;
    public $turbo;

    public function __construct($nama, $merk, $speed, $turbo) {
        parent::__construct($nama, $merk);
        $this->speed = $speed;
        $this->turbo = $turbo;
    }

    public function cetakInfo() {
        echo "<div class='mobil-container mobil-sport'>";
        echo "<h2>Mobil Sport</h2>";
        parent::cetakInfo();
        echo "<p>Kecepatan: $this->speed km/h</p>";
        echo "<p>Turbo: $this->turbo</p>";
        echo "</div>";
    }
}

// Kelas turunan CityCar
class CityCar extends Mobil {
    public $model;
    public $irit;
    public $sensor;

    public function __construct($nama, $merk, $model, $irit, $sensor) {
        parent::__construct($nama, $merk);
        $this->model = $model;
        $this->irit = $irit;
        $this->sensor = $sensor;
    }

    public function cetakInfo() {
        echo "<div class='mobil-container city-car'>";
        echo "<h2>City Car</h2>";
        parent::cetakInfo();
        echo "<p>Model: $this->model</p>";
        echo "<p>Irit: $this->irit</p>";
        echo "<p>Sensor: $this->sensor</p>";
        echo "</div>";
    }
}

// Contoh penggunaan
$mobilSport = new MobilSport("911 Carrera", "Porsche", 310, "Yes");
$mobilSport->cetakInfo();

$cityCar = new CityCar("Swift","Suzuki", "2021", "Irit", "Blind spot Monitoring");
$cityCar->cetakInfo();
?>

</body>
</html>
