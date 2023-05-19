<?php

class Kalkulator
{
    private $hasil;


    public function __construct()
    {
        $this->hasil = 0;
    }

    public function tambah($angka)
    {
        $this->hasil += $angka;
    }

    public function kurang($angka)
    {
        $this->hasil -= $angka;
    }

    public function kali($angka)
    {
        $this->hasil *= $angka;
    }

    public function bagi($angka)
    {
        if ($angka != 0) {
            $this->hasil /= $angka;
        } else {
            echo "Error: Pembagian dengan angka nol tidak diizinkan.";
        }
    }

    public function reset()
    {
        $this->hasil = 0;
    }

    public function getHasil()
    {
        return $this->hasil;
    }

    public function persentase($angka, $persentase)
    {
        $hasilpersentase = ($angka * $persentase) / 100;
        return $hasilpersentase;
    }

    public function akarKuadrat($angka)
    {
        return sqrt($angka);
    }

    public function logaritma($angka, $basis)
    {
        return log($angka, $basis);
    }

    public function radian($derajat)
    {
        return deg2rad($derajat);
    }

    public function sinus($derajat)
    {
        return sin(deg2rad($derajat));
    }

    public function kosinus($derajat)
    {
        return cos(deg2rad($derajat));
    }

    public function tangen($derajat)
    {
        return tan(deg2rad($derajat));
    }

    public function hitungLuasPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    public function hitungLuasLingkaran($jariJari)
    {
        return 3.14 * $jariJari * $jariJari;
    }

    public function hitungLuasSegitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }

    public function hitungPanjangSegitiga($a, $b, $c)
    {
        return $a + $b + $c;
    }

    public function konversiCelciusKeFahrenheit($celcius)
    {
        return ($celcius * 9 / 5) + 32;
    }

    public function konversiFahrenheitKeCelcius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }

    public function hitungVolumeKubus($sisi)
    {
        return $sisi * $sisi * $sisi;
    }

    public function hitungVolumeTabung($jariJari, $tinggi)
    {
        return 3.14 * $jariJari * $jariJari * $tinggi;
    }

    public function hitungMassaJenis($massa, $volume)
    {
        return $massa / $volume;
    }

    public function hitungKecepatan($jarak, $waktu)
    {
        return $jarak / $waktu;
    }

    public function hitungWaktuTempuh($jarak, $kecepatan)
    {
        return $jarak / $kecepatan;
    }

    public function hitungTip($jumlahTagihan, $persentaseTip)
    {
        return ($jumlahTagihan * $persentaseTip) / 100;
    }

    public function hitungRataRata($data)
    {
        $jumlahData = count($data);
        $total = array_sum($data);
        return $total / $jumlahData;
    }

    public function hitungMemori($data)
    {
        return array_sum($data);
    }

    public function hitungDesimal($angka)
    {
        return number_format($angka, 2, ',', '.');
    }

    public function hitungPangkat($angka, $pangkat)
    {
        return pow($angka, $pangkat);
    }

    public function hitungPecahan($angka)
    {
        $pecahan = explode(".", $angka);
        $bagianDepan = floor($angka);
        $bagianBelakang = $pecahan[1];
        return array($bagianDepan, $bagianBelakang);
    }

    public function evaluate($ekspresi)
    {
        return eval("return $ekspresi;");
    }

    public function hitungArctan($nilai)
    {
        // Implementasi perhitungan arctan
        return atan($nilai);
    }

    public function hitungCot($nilai)
    {
        // Implementasi perhitungan cot
        return 1 / tan($nilai);
    }

    public function hitungSec($nilai)
    {
        // Implementasi perhitungan sec
        return 1 / cos($nilai);
    }

    public function hitungCsc($nilai)
    {
        // Implementasi perhitungan csc
        return 1 / sin($nilai);
    }

    public function hitungArccos($nilai)
    {
        // Implementasi perhitungan arccos
        return acos($nilai);
    }

    public function hitungArcsin($nilai)
    {
        // Implementasi perhitungan arcsin
        return asin($nilai);
    }

    public function hitungAnd($a, $b)
    {
        // Implementasi perhitungan operasi AND
        return $a && $b;
    }

    public function hitungOr($a, $b)
    {
        // Implementasi perhitungan operasi OR
        return $a || $b;
    }

    public function hitungNot($a)
    {
        // Implementasi perhitungan operasi NOT
        return !$a;
    }

    public function hitungXor($a, $b)
    {
        // Implementasi perhitungan operasi XOR
        return ($a && !$b) || (!$a && $b);
    }

    public function hitungModulo($a, $b)
    {
        // Implementasi perhitungan modulo
        return $a % $b;
    }



    public function hitungMean($data)
    {
        // Implementasi perhitungan rata-rata (mean)
        $total = array_sum($data);
        $jumlahData = count($data);
        $mean = $total / $jumlahData;
        return $mean;
    }

    public function hitungMedian($data)
    {
        // Implementasi perhitungan median
        sort($data);
        $jumlahData = count($data);
        $tengah = floor($jumlahData / 2);
        if ($jumlahData % 2 == 0) {
            $median = ($data[$tengah - 1] + $data[$tengah]) / 2;
        } else {
            $median = $data[$tengah];
        }
        return $median;
    }

    public function hitungMode($data)
    {
        // Implementasi perhitungan modus
        $frekuensi = array_count_values($data);
        return array_keys($frekuensi, max($frekuensi));
    }

    public function hitungStandarDeviasi($data)
    {
        // Implementasi perhitungan standar deviasi
        $mean = $this->hitungMean($data);
        $selisihKuadrat = array_map(function ($x) use ($mean) {
            return pow($x - $mean, 2);
        }, $data);
        $variansi = $this->hitungMean($selisihKuadrat);
        return sqrt($variansi);
    }

    public function hitungVarian($data)
    {
        // Implementasi perhitungan variansi
        $standarDeviasi = $this->hitungStandarDeviasi($data);
        return pow($standarDeviasi, 2);
    }

    public function hitungModus($data)
    {
        // Menghitung frekuensi kemunculan setiap elemen dalam data
        $frekuensi = array_count_values($data);

        // Mencari elemen dengan frekuensi tertinggi (modus)
        $modus = [];
        $maxFrekuensi = max($frekuensi);
        foreach ($frekuensi as $elemen => $frek) {
            if ($frek == $maxFrekuensi) {
                $modus[] = $elemen;
            }
        }

        // Mengembalikan modus
        return $modus;
    }

    public function hitungGCF($angka1, $angka2)
    {
        // Menggunakan algoritma Euclidean untuk menghitung GCF
        while ($angka2 != 0) {
            $temp = $angka1 % $angka2;
            $angka1 = $angka2;
            $angka2 = $temp;
        }

        // Mengembalikan hasil GCF
        return $angka1;
    }

    public function hitungLCM($angka1, $angka2)
    {
        // Menggunakan rumus LCM = (a * b) / GCF(a, b)
        $gcf = $this->hitungGCF($angka1, $angka2);
        return ($angka1 * $angka2) / $gcf;
    }

    public function hitungFraction($operasi)
    {
        // Membaca operasi pecahan dalam format "a/b + c/d"
        preg_match('#(\d+)/(\d+)\s*([+-/])\s(\d+)/(\d+)#', $operasi, $matches);
        $angka1 = $matches[1];
        $angka2 = $matches[2];
        $operator = $matches[3];
        $angka3 = $matches[4];
        $angka4 = $matches[5];

        // Menghitung hasil operasi pecahan
        switch ($operator) {
            case '+':
                return ($angka1 * $angka4 + $angka2 * $angka3) . '/' . ($angka2 * $angka4);
            case '-':
                return ($angka1 * $angka4 - $angka2 * $angka3) . '/' . ($angka2 * $angka4);
            case '*':
                return ($angka1 * $angka3) . '/' . ($angka2 * $angka4);
            case '/':
                return ($angka1 * $angka4) . '/' . ($angka2 * $angka3);
            default:
                return "Operasi tidak valid.";
        }
    }


    public function hitungMixedFraction($operasi)
    {
        // Membaca operasi pecahan campuran dalam format "a b/c + d e/f"
        // Menyimpan angka-angka dan operator dalam variabel terpisah
        preg_match('/(\d+)\s+(\d+)\/(\d+)\s*([+\-*\/])\s*(\d+)\s+(\d+)\/(\d+)/', $operasi, $matches);
        $angka1 = $matches[1];
        $angka2 = $matches[2];
        $angka3 = $matches[3];
        $operator = $matches[4];
        $angka4 = $matches[5];
        $angka5 = $matches[6];
        $angka6 = $matches[7];

        // Menghitung hasil operasi pecahan campuran
        switch ($operator) {
            case '+':
                return ($angka1 * $angka3 + $angka2) . ' ' . ($angka4 * $angka6) . '/' . ($angka3 * $angka6);
            case '-':
                return ($angka1 * $angka3 - $angka2) . ' ' . ($angka4 * $angka6) . '/' . ($angka3 * $angka6);
            case '*':
                return (($angka1 * $angka3 + $angka2) * ($angka4 * $angka6)) . '/' . ($angka3 * $angka6);
            case '/':
                return (($angka1 * $angka3 + $angka2) * ($angka3 * $angka6)) . '/' . ($angka4 * $angka6);
            default:
                return "Operasi tidak valid.";
        }
    }

    public function hitungPrimeFraction($numerator, $denominator)
    {
        // Mencari faktor terkecil dari pembilang dan penyebut
        $faktorTerkecil = $this->cariFaktorTerkecil($numerator, $denominator);
        $numeratorPrima = $numerator / $faktorTerkecil;
        $denominatorPrima = $denominator / $faktorTerkecil;
        return $numeratorPrima . '/' . $denominatorPrima;
    }

    private function cariFaktorTerkecil($numerator, $denominator)
    {
        // Menentukan bilangan terkecil antara pembilang dan penyebut
        $minValue = min($numerator, $denominator);
        for ($i = 2; $i <= $minValue; $i++) {
            if ($numerator % $i == 0 && $denominator % $i == 0) {
                return $i;
            }
        }
        return 1;
    }

    public function hitungEksponen($base, $exponent)
    {
        // Menghitung nilai eksponen menggunakan fungsi pow()
        return pow($base, $exponent);
    }


    public function hitungCombineLikeTerms($terms)
    {
        // Menginisialisasi array kosong untuk menyimpan hasil
        $hasil = [];

        // Memastikan terms bukan null
        if (!empty($terms)) {
            // Menggabungkan suku-suku sejenis
            foreach ($terms as $term) {
                // Mendapatkan koefisien dan variabel dari suku
                preg_match('/([-+]?\d*)\s*([a-zA-Z]+)/', $term, $matches);
                $koefisien = (int) $matches[1];
                $variabel = $matches[2];

                // Menyimpan suku pada array hasil
                if (array_key_exists($variabel, $hasil)) {
                    $hasil[$variabel] += $koefisien;
                } else {
                    $hasil[$variabel] = $koefisien;
                }
            }
        }

        // Mengembalikan hasil suku-suku yang digabungkan
        return $hasil;
    }

    //Fungsi pecahan dievaluasi
    public function hitungEvaluateFraction($pecahan)
    {
        $pecahanArr = explode('/', $pecahan);
        $pembilang = $pecahanArr[0];
        $penyebut = $pecahanArr[1];
        return $pembilang / $penyebut;
    }


    //Fungsi hitungInequalities
    public function hitungInequalities($inequality)
    {
        $bagian = explode("=", $inequality);
        if (count($bagian) != 2) {
            return "Persamaan tidak valid";
        }
        $sisiKiri = trim($bagian[0]);
        $sisiKanan = trim($bagian[1]);
        $operator = $this->getOperator($inequality);
        $persamaan = $sisiKiri . $operator . $sisiKanan;
        // Menghitung hasil persamaan
        return eval("return $persamaan;");
    }


    //Fungsi getOperator
    private function getOperator($inequality)
    {
        if (strpos($inequality, "<=") !== false) {
            return "<=";
        } elseif (strpos($inequality, ">=") !== false) {
            return ">=";
        } elseif (strpos($inequality, "<") !== false) {
            return "<";
        } elseif (strpos($inequality, ">") !== false) {
            return ">";
        } elseif (strpos($inequality, "=") !== false) {
            return "==";
        } else {
            return "";
        }
    }
}

class BangunRuang
{
    public function hitungVolumeKubus($sisi)
    {
        $volume = pow($sisi, 3);
        return $volume;
    }

    public function hitungLuasPermukaanKubus($sisi)
    {
        $luasPermukaan = 6 * pow($sisi, 2);
        return $luasPermukaan;
    }

    public function hitungVolumeBalok($panjang, $lebar, $tinggi)
    {
        $volume = $panjang * $lebar * $tinggi;
        return $volume;
    }

    public function hitungLuasPermukaanBalok($panjang, $lebar, $tinggi)
    {
        $luasPermukaan = 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);
        return $luasPermukaan;
    }

    public function hitungVolumeSilinder($jariJari, $tinggi)
    {
        $volume = M_PI * pow($jariJari, 2) * $tinggi;
        return $volume;
    }

    public function hitungLuasPermukaanSilinder($jariJari, $tinggi)
    {
        $luasPermukaan = 2 * M_PI * $jariJari * ($jariJari + $tinggi);
        return $luasPermukaan;
    }

    public function  hitungVolumeKerucut($jariJari, $tinggi)
    {
        $volume = (1 / 3) * M_PI * pow($jariJari, 2) * $tinggi;
        return $volume;
    }

    public function hitungLuasPermukaanKerucut($jariJari, $garisPelukis)
    {
        $luasPermukaan = M_PI * $jariJari * ($jariJari + $garisPelukis);
        return $luasPermukaan;
    }

    public function hitungVolumeBola($jariJari)
    {
        $volume = (4 / 3) * M_PI * pow($jariJari, 3);
        return $volume;
    }

    public function hitungLuasPermukaanBola($jariJari)
    {
        $luasPermukaan = 4 * M_PI * pow($jariJari, 2);
        return $luasPermukaan;
    }
}



// penggunaan kalkulator
$kalkulator = new Kalkulator();
$kalkulator->tambah(5);
$kalkulator->kali(3);
$kalkulator->kurang(2);
$kalkulator->bagi(4);

echo "Hasil perhitungan: " . $kalkulator->getHasil() . "<br>";

$angka = 25;
$persentase = 20;
$hasilPersentase = $kalkulator->persentase($angka, $persentase);
echo "Persentase dari $angka% dengan $persentase% adalah: " . $hasilPersentase . "<br>";

$angka = 16;
$hasilAkarKuadrat = $kalkulator->akarKuadrat($angka);
echo "Akar kuadrat dari $angka adalah: " . $hasilAkarKuadrat . "<br>";

$angka = 10;
$basis = 2;
$hasilLogaritma = $kalkulator->logaritma($angka, $basis);
echo "Logaritma basis $basis dari $angka adalah: " . $hasilLogaritma . "<br>";

$derajat = 45;
$hasilRadian = $kalkulator->radian($derajat);
echo "Nilai $derajat derajat dalam radian adalah: " . $hasilRadian . "<br>";

$derajat = 30;
$hasilSinus = $kalkulator->sinus($derajat);
echo "Sinus dari $derajat derajat adalah: " . $hasilSinus . "<br>";

$derajat = 60;
$hasilKosinus = $kalkulator->kosinus($derajat);
echo "Kosinus dari $derajat derajat adalah: " . $hasilKosinus . "<br>";

$derajat = 45;
$hasilTangen = $kalkulator->tangen($derajat);
echo "Tangen dari $derajat derajat adalah: " . $hasilTangen . "<br>";

$panjang = 5;
$lebar = 3;
$luasPersegiPanjang = $kalkulator->hitungLuasPersegiPanjang($panjang, $lebar);
echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: " . $luasPersegiPanjang . "<br>";

$jariJari = 4;
$luasLingkaran = $kalkulator->hitungLuasLingkaran($jariJari);
echo "Luas lingkaran dengan jari-jari $jariJari adalah: " . $luasLingkaran . "<br>";

$alas = 6;
$tinggi = 8;
$luasSegitiga = $kalkulator->hitungLuasSegitiga($alas, $tinggi);
echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: " . $luasSegitiga . "<br>";

$a = 3;
$b = 4;
$c = 5;
$panjangSegitiga = $kalkulator->hitungPanjangSegitiga($a, $b, $c);
echo "Panjang segitiga dengan sisi $a, $b, dan $c adalah: " . $panjangSegitiga . "<br>";

$celcius = 30;
$hasilKonversi = $kalkulator->konversiCelciusKeFahrenheit($celcius);
echo "Konversi suhu $celcius derajat Celcius ke Fahrenheit adalah: " . $hasilKonversi . "<br>";

$fahrenheit = 86;
$hasilKonversi = $kalkulator->konversiFahrenheitKeCelcius($fahrenheit);
echo "Konversi suhu $fahrenheit derajat Fahrenheit ke Celcius adalah: " . $hasilKonversi . "<br>";

$sisi = 5;
$volumeKubus = $kalkulator->hitungVolumeKubus($sisi);
echo "Volume kubus dengan sisi $sisi adalah: " . $volumeKubus . "<br>";

$jariJari = 3;
$tinggi = 8;
$volumeTabung = $kalkulator->hitungVolumeTabung($jariJari, $tinggi);
echo "Volume tabung dengan jari-jari $jariJari dan tinggi $tinggi adalah: " . $volumeTabung . "<br>";

$massa = 120;
$volume = 30;
$massaJenis = $kalkulator->hitungMassaJenis($massa, $volume);
echo "Massa jenis dengan massa $massa kg dan volume $volume m^3 adalah: " . $massaJenis . "<br>";

$jarak = 120;
$waktu = 2;
$kecepatan = $kalkulator->hitungKecepatan($jarak, $waktu);
echo "Kecepatan dengan jarak $jarak km dan waktu $waktu jam adalah: " . $kecepatan . "<br>";

$jarak = 240;
$kecepatan = 60;
$waktuTempuh = $kalkulator->hitungWaktuTempuh($jarak, $kecepatan);
echo "Waktu tempuh dengan jarak $jarak km dan kecepatan $kecepatan km/jam adalah: " . $waktuTempuh . "<br>";

$jumlahTagihan = 100;
$persentaseTip = 10;
$tip = $kalkulator->hitungTip($jumlahTagihan, $persentaseTip);
echo "Tip untuk tagihan sebesar $jumlahTagihan dengan persentase tip $persentaseTip% adalah: " . $tip . "<br>";

$data = array(2, 4, 6, 8, 10);
$rataRata = $kalkulator->hitungRataRata($data);
echo "Rata-rata dari data " . implode(", ", $data) . " adalah: " . $rataRata . "<br>";

$data = array(2, 4, 6, 8, 10);
$memori = $kalkulator->hitungMemori($data);
echo "Total memori dari data " . implode(", ", $data) . " adalah: " . $memori . "<br>";

$angka = 10.5;
$desimal = $kalkulator->hitungDesimal($angka);
echo "Hasil desimal dari angka $angka adalah: " . $desimal . "<br>";

$angka = 3;
$pangkat = 4;
$hasilPangkat = $kalkulator->hitungPangkat($angka, $pangkat);
echo "Hasil dari $angka pangkat $pangkat adalah: " . $hasilPangkat . "<br>";

$angka = 10.5;
$pecahan = $kalkulator->hitungPecahan($angka);
echo "Pecahan dari angka $angka adalah: " . $pecahan[0] . " dan " . $pecahan[1] . "<br>";

$ekspresi = "2 + 3 * 4 - 1";
$hasilEvaluate = $kalkulator->evaluate($ekspresi);
echo "Hasil evaluasi ekspresi $ekspresi adalah: " . $hasilEvaluate . "<br>";

// Hitung arctan
$nilaiArctan = 0.5;
$hasilArctan = $kalkulator->hitungArctan($nilaiArctan);
echo "Hasil perhitungan arctan dari " . $nilaiArctan . " adalah: " . $hasilArctan . "<br>";

// Hitung cot
$nilaiCot = 1;
$hasilCot = $kalkulator->hitungCot($nilaiCot);
echo "Hasil perhitungan cot dari " . $nilaiCot . " adalah: " . $hasilCot . "<br>";

// Hitung sec
$nilaiSec = 0.8;
$hasilSec = $kalkulator->hitungSec($nilaiSec);
echo "Hasil perhitungan sec dari " . $nilaiSec . " adalah: " . $hasilSec . "<br>";

// Hitung csc
$nilaiCsc = 1.2;
$hasilCsc = $kalkulator->hitungCsc($nilaiCsc);
echo "Hasil perhitungan csc dari " . $nilaiCsc . " adalah: " . $hasilCsc . "<br>";

// Hitung arccos
$nilaiArccos = 0.3;
$hasilArccos = $kalkulator->hitungArccos($nilaiArccos);
echo "Hasil perhitungan arccos dari " . $nilaiArccos . " adalah: " . $hasilArccos . "<br>";

// Hitung arcsin
$nilaiArcsin = 0.6;
$hasilArcsin = $kalkulator->hitungArcsin($nilaiArcsin);
echo "Hasil perhitungan arcsin dari " . $nilaiArcsin . " adalah: " . $hasilArcsin . "<br>";

// Hitung operasi AND
$a = true;
$b = false;
$hasilAnd = $kalkulator->hitungAnd($a, $b);
echo "Hasil perhitungan operasi AND dari " . ($a ? 'true' : 'false') . " dan " . ($b ? 'true' : 'false') . " adalah: " . ($hasilAnd ? 'true' : 'false') . "<br>";

// Hitung operasi OR
$a = true;
$b = false;
$hasilOr = $kalkulator->hitungOr($a, $b);
echo "Hasil perhitungan operasi OR dari " . $a . " dan " . $b . " adalah: " . $hasilOr . "<br>";

// Hitung operasi NOT
$a = true;
$hasilNot = $kalkulator->hitungNot($a);
echo "Hasil perhitungan operasi NOT dari " . ($a ? 'true' : 'false') . " adalah: " . ($hasilNot ? 'true' : 'false') . "<br>";

// Hitung operasi XOR
$a = true;
$b = false;
$hasilXor = $kalkulator->hitungXor($a, $b);
echo "Hasil perhitungan operasi XOR dari " . $a . " dan " . $b . " adalah: " . $hasilXor . "<br>";

// Hitung modulo
$a = 13;
$b = 5;
$hasilModulo = $kalkulator->hitungModulo($a, $b);
echo "Hasil perhitungan modulo dari " . $a . " dan " . $b . " adalah: " . $hasilModulo . "<br>";

// Hitung rata-rata (mean)
$data = [10, 20, 30, 40, 50];
$mean = $kalkulator->hitungMean($data);
echo "Rata-rata (mean) dari data " . implode(", ", $data) . " adalah: " . $mean . "<br>";

// Hitung median
$data = [5, 10, 15, 20, 25];
$median = $kalkulator->hitungMedian($data);
echo "Median dari data " . implode(", ", $data) . " adalah: " . $median . "<br>";

// Hitung modus
$data = [5, 10, 15, 10, 20, 25, 10];
$modus = $kalkulator->hitungMode($data);
echo "Modus dari data " . implode(", ", $data) . " adalah: " . implode(", ", $modus) . "<br>";

// Hitung standar deviasi
$data = [10, 20, 30, 40, 50];
$standarDeviasi = $kalkulator->hitungStandarDeviasi($data);
echo "Standar deviasi dari data " . implode(", ", $data) . " adalah: " . $standarDeviasi . "<br>";

// Hitung variansi
$data = [10, 20, 30, 40, 50];
$varian = $kalkulator->hitungVarian($data);
echo "Variansi dari data " . implode(", ", $data) . " adalah: " . $varian . "<br>";

// Hitung modus
$data = [10, 20, 30, 20, 40, 30, 50, 30];
$modus = $kalkulator->hitungModus($data);
echo "Modus dari data " . implode(", ", $data) . " adalah: " . implode(", ", $modus) . "<br>";

// Hitung GCF
$angka1 = 24;
$angka2 = 36;
$gcf = $kalkulator->hitungGCF($angka1, $angka2);
echo "Faktor Persekutuan Terbesar dari $angka1 dan $angka2 adalah: $gcf<br>";

// Hitung LCM
$angka1 = 6;
$angka2 = 8;
$lcm = $kalkulator->hitungLCM($angka1, $angka2);
echo "Kelipatan Persekutuan Terkecil dari $angka1 dan $angka2 adalah: $lcm<br>";

// Operasi pecahan
$operasi = "1/2 + 3/4";
$hasil = $kalkulator->hitungFraction($operasi);
echo "Hasil dari operasi pecahan $operasi adalah: $hasil<br>";

// Operasi pecahan campuran
$operasi = "1 1/2 + 3 3/4";
$hasil = $kalkulator->hitungMixedFraction($operasi);
echo "Hasil dari operasi pecahan campuran $operasi adalah: $hasil<br>";

// Pecahan prima
$numerator = 6;
$denominator = 8;
$hasil = $kalkulator->hitungPrimeFraction($numerator, $denominator);
echo "Pecahan prima dari $numerator/$denominator adalah: $hasil<br>";

// Basis dan eksponen
$base = 2;
$exponent = 3;
$hasil = $kalkulator->hitungEksponen($base, $exponent);
echo "Hasil dari $base pangkat $exponent adalah: $hasil<br>";

// Contoh Hitung suku-suku yang digabungkan
$terms = ['2x', '-3y', '4x', '5y', '-x'];
$hasil = $kalkulator->hitungCombineLikeTerms($terms);
echo "Hasil penggabungan suku-suku sejenis: <br>";
foreach ($hasil as $variabel => $koefisien) {
    echo "$koefisien$variabel<br>";
}

// Pecahan yang akan dievaluasi
$pecahan = "3/4";
$hasil = $kalkulator->hitungEvaluateFraction($pecahan);
echo "Hasil evaluasi pecahan: $hasil<br>";

// Hitung Ketaksamaan
$ketaksamaan = "2x + 5 > 10";
$hasil = $kalkulator->hitungInequalities($ketaksamaan);
echo "Hasil ketaksamaan: $hasil<br>";

//  penggunaan class BangunRuang
$bangunRuang = new BangunRuang();

// Menghitung volume kubus dengan sisi 5
$volumeKubus = $bangunRuang->hitungVolumeKubus(5);
echo "Volume Kubus: " . $volumeKubus . "<br>";

// Menghitung luas permukaan kubus dengan sisi 5
$luasPermukaanKubus = $bangunRuang->hitungLuasPermukaanKubus(5);
echo "Luas Permukaan Kubus: " . $luasPermukaanKubus . "<br>";

// Menghitung volume balok dengan panjang 4, lebar 5, dan tinggi 6
$volumeBalok = $bangunRuang->hitungVolumeBalok(4, 5, 6);
echo "Volume Balok: " . $volumeBalok . "<br>";

// Menghitung luas permukaan balok dengan panjang 4, lebar 5, dan tinggi 6
$luasPermukaanBalok = $bangunRuang->hitungLuasPermukaanBalok(4, 5, 6);
echo "Luas Permukaan Balok: " . $luasPermukaanBalok . "<br>";

// Menghitung volume silinder dengan jari-jari 3 dan tinggi 8
$volumeSilinder = $bangunRuang->hitungVolumeSilinder(3, 8);
echo "Volume Silinder: " . $volumeSilinder . "<br>";

// Menghitung luas permukaan silinder dengan jari-jari 3 dan tinggi 8
$luasPermukaanSilinder = $bangunRuang->hitungLuasPermukaanSilinder(3, 8);
echo "Luas Permukaan Silinder: " . $luasPermukaanSilinder . "<br>";

//Hitung fungsi Permukaan luas silinder
$jariJariSilinder = 3;
$tinggiSilinder = 8;
$luasPermukaanSilinder = $bangunRuang->hitungLuasPermukaanSilinder($jariJariSilinder, $tinggiSilinder);
echo "Luas Permukaan Silinder: " . $luasPermukaanSilinder . "<br>";

//Hitung fungsi Volume kerucut
$jariJariKerucut = 4;
$tinggiKerucut = 6;
$volumeKerucut = $bangunRuang->hitungVolumeKerucut($jariJariKerucut, $tinggiKerucut);
echo "Volume Kerucut: " . $volumeKerucut . "<br>";

//Hitung fungsi Luas permukaan kerucut
$jariJariKerucut = 4;
$garisPelukisKerucut = 7;
$luasPermukaanKerucut = $bangunRuang->hitungLuasPermukaanKerucut($jariJariKerucut, $garisPelukisKerucut);
echo "Luas Permukaan Kerucut: " . $luasPermukaanKerucut . "<br>";

//Hitung fungsi volume bola
$jariJariBola = 5;
$volumeBola = $bangunRuang->hitungVolumeBola($jariJariBola);
echo "Volume Bola: " . $volumeBola . "<br>";

//Hitung fungsi luas permukaan bola
$luasPermukaanBola = $bangunRuang->hitungLuasPermukaanBola($jariJariBola);
echo "Luas Permukaan Bola: " . $luasPermukaanBola . "<br>";
