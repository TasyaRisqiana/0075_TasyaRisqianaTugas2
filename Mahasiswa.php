<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        .mahasiswa {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fafafa;
        }

        .mahasiswa p {
            margin: 10px 0;
            color: #444;
            font-size: 16px;
        }

        .mahasiswa span {
            font-weight: bold;
            color: #2c3e50;
        }

        .program-info {
            background-color: #e8f5e9;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border-left: 4px solid #2ecc71;
        }

        .program-info p {
            margin: 5px 0;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informasi Mahasiswa</h1>

        <?php
        // Definisi Class Mahasiswa
        class Mahasiswa {
            // Properti
            public $nama;
            public $nim;
            public $jurusan;
            public $tahunMasuk;

            // Constructor untuk inisialisasi properti saat objek dibuat
            public function __construct($nama, $nim, $jurusan, $tahunMasuk) {
                $this->nama = $nama;
                $this->nim = $nim;
                $this->jurusan = $jurusan;
                $this->tahunMasuk = $tahunMasuk;
            }

            // Method untuk menampilkan informasi mahasiswa
            public function tampilkanInfo() {
                echo "<div class='mahasiswa'>";
                echo "<p><span>Nama:</span> $this->nama</p>";
                echo "<p><span>NIM:</span> $this->nim</p>";
                echo "<p><span>Jurusan:</span> $this->jurusan</p>";
                echo "<p><span>Tahun Masuk:</span> $this->tahunMasuk</p>";
                echo "</div>";
            }

            // Method untuk menghitung semester
            public function hitungSemester() {
                $tahunSekarang = date("Y");
                $semester = ($tahunSekarang - $this->tahunMasuk) * 2;
                return $semester;
            }

            // Method untuk menampilkan semester saat ini
            public function tampilkanSemester() {
                $semester = $this->hitungSemester();
                echo "<p><span>Semester saat ini:</span> $semester</p>";
            }
        }

        // Turunan kelas Mahasiswa untuk tahun masuk 2022
        class Mahasiswa2022 extends Mahasiswa {
            public $programBeasiswa;

            // Constructor untuk inisialisasi properti tambahan
            public function __construct($nama, $nim, $jurusan, $programBeasiswa) {
                parent::__construct($nama, $nim, $jurusan, 2022);
                $this->programBeasiswa = $programBeasiswa;
            }

            // Method khusus untuk menampilkan informasi beasiswa
            public function tampilkanInfoBeasiswa() {
                echo "<div class='program-info'>";
                echo "<p><span>Program Beasiswa:</span> $this->programBeasiswa</p>";
                echo "</div>";
            }
        }

        // Turunan kelas Mahasiswa untuk tahun masuk 2023
        class Mahasiswa2023 extends Mahasiswa {
            public $programMagang;

            // Constructor untuk inisialisasi properti tambahan
            public function __construct($nama, $nim, $jurusan, $programMagang) {
                parent::__construct($nama, $nim, $jurusan, 2023);
                $this->programMagang = $programMagang;
            }

            // Method khusus untuk menampilkan informasi magang
            public function tampilkanInfoMagang() {
                echo "<div class='program-info'>";
                echo "<p><span>Program Magang:</span> $this->programMagang</p>";
                echo "</div>";
            }
        }

        // Contoh Penggunaan Mahasiswa Tahun 2022
        $mahasiswa2022 = new Mahasiswa2022("Tasya", "22012345", "Teknik Informatika", "Beasiswa Unggulan");
        $mahasiswa2022->tampilkanInfo();
        $mahasiswa2022->tampilkanSemester();
        $mahasiswa2022->tampilkanInfoBeasiswa();

        echo "<br>";

        // Contoh Penggunaan Mahasiswa Tahun 2023
        $mahasiswa2023 = new Mahasiswa2023("Risqiana", "23054321", "Sistem Informasi", "Magang di Perusahaan XY");
        $mahasiswa2023->tampilkanInfo();
        $mahasiswa2023->tampilkanSemester();
        $mahasiswa2023->tampilkanInfoMagang();
        ?>
    </div>
</body>
</html>
