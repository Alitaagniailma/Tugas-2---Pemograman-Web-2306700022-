<?php
// Class induk untuk menyimpan data Sivitas Akademik
class SivitasAkademik {
    protected $nama; // Property nama civitas akademik

    // Constructor untuk inisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen merupakan turunan dari SivitasAkademik
class Dosen extends SivitasAkademik {
    public $nidn; // Property NIDN dosen

    // Constructor untuk inisialisasi nama dan NIDN
    public function __construct($nama, $nidn) {
        parent::__construct($nama); // Panggil constructor parent
        $this->nidn = $nidn;
    }
}

// Class Mahasiswa merupakan turunan dari SivitasAkademik
class Mahasiswa extends SivitasAkademik {
    public $nim; // Property NIM mahasiswa

    // Constructor untuk inisialisasi nama dan NIM
    public function __construct($nama, $nim) {
        parent::__construct($nama); // Panggil constructor parent
        $this->nim = $nim;
    }
}

// Instansiasi object Dosen
$d1 = new Dosen("Ajib Abdul Kholiq, S.Kom.", "012345"); // Ganti Nama sesuai data

// Instansiasi object Mahasiswa
$m1 = new Mahasiswa("Alita Agnia Ilma", "2306700022"); // Ganti NIM sesuai data

// Menampilkan data Dosen
echo "Dosen:<br>";
echo "Nama: " . $d1->getNama() . "<br>";
echo "NIDN: " . $d1->nidn . "<br><br>";

// Menampilkan data Mahasiswa
echo "Mahasiswa:<br>";
echo "Nama: " . $m1->getNama() . "<br>";
echo "NIM: " . $m1->nim; . "<br>";
?>
