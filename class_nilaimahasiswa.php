<?php
class NilaiMahasiswa {
    public $nama;
    public $nim;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;

    private static $persentase_uts = 0.3;
    private static $persentase_uas = 0.4;
    private static $persentase_tugas = 0.3;

    public function __construct($nama, $nim, $nilai_uts, $nilai_uas, $nilai_tugas) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
        $this->nilai_tugas = $nilai_tugas;
    }

    public static function aturPersentase($uts, $uas, $tugas) {
        self::$persentase_uts = $uts;
        self::$persentase_uas = $uas;
        self::$persentase_tugas = $tugas;
    }

    public function hitungRataRata() {
        return ($this->nilai_uts * self::$persentase_uts) + 
               ($this->nilai_uas * self::$persentase_uas) + 
               ($this->nilai_tugas * self::$persentase_tugas);
    }

    public function getPredikat() {
        $rata2 = $this->hitungRataRata();
        if ($rata2 >= 85) return "A (Sangat Baik)";
        elseif ($rata2 >= 75) return "B (Baik)";
        elseif ($rata2 >= 65) return "C (Cukup)";
        elseif ($rata2 >= 50) return "D (Kurang)";
        else return "E (Gagal)";
    }
}
?>
