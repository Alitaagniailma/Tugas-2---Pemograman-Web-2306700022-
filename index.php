<?php
class SivitasAkademik {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends SivitasAkademik {
    public $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }
}

class Mahasiswa extends SivitasAkademik {
    public $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
}

$d1 = new Dosen("Pak Andi", "001122");
$m1 = new Mahasiswa("Alita", "2306700022");

echo "Dosen:<br>";
echo "Nama: " . $d1->getNama() . "<br>";
echo "NIDN: " . $d1->nidn . "<br><br>";

echo "Mahasiswa:<br>";
echo "Nama: " . $m1->getNama() . "<br>";
echo "NIM: " . $m1->nim;
?>