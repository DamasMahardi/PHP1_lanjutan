class KalkulatorFisika {
private $nama;

public function __construct($nama) {
$this->nama = $nama;
}

public function hitungKecepatan($jarak, $waktu) {
$kecepatan = $jarak / $waktu;
return $kecepatan;
}

public function hitungUsaha($gaya, $jarak, $sudut) {
$usaha = $gaya * $jarak * cos(deg2rad($sudut));
return $usaha;
}

public function hitungGayaResultan($gayaHorizontal, $gayaVertikal) {
$gayaResultan = sqrt(pow($gayaHorizontal, 2) + pow($gayaVertikal, 2));
return $gayaResultan;
}

// ...metode lainnya untuk perhitungan fisika...
}

class KalkulatorListrik extends KalkulatorFisika {
public function __construct($nama) {
parent::__construct($nama);
}

public function hitungDayaListrik($tegangan, $arus) {
$daya = $tegangan * $arus;
return $daya;
}

public function hitungHambatanListrik($tegangan, $arus) {
if ($arus != 0) {
$hambatan = $tegangan / $arus;
return $hambatan;
} else {
throw new Exception("Arus tidak boleh nol.");
}
}

// ...metode lainnya untuk perhitungan listrik...
}

// Contoh penggunaan class KalkulatorFisika
$kalkulatorFisika = new KalkulatorFisika("Kalkulator Fisika");
$kecepatan = $kalkulatorFisika->hitungKecepatan(100, 10);
echo "Kecepatan: " . $kecepatan . "\n";

// Contoh penggunaan class KalkulatorListrik
$kalkulatorListrik = new KalkulatorListrik("Kalkulator Listrik");
$dayaListrik = $kalkulatorListrik->hitungDayaListrik(220, 2);
echo "Daya Listrik: " . $dayaListrik . "\n";