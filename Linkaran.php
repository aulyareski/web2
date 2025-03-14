<?php
class Lingkaran {
    public $jariJari;
    const PHI = 3.14;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return self::PHI * $this->jariJari * $this->jariJari;
    }

    public function hitungKeliling() {
        return 2 * self::PHI * $this->jariJari;
    }
}
?>
