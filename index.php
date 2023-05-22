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
        // Evaluasi ekspresi matematika dengan menggunakan fungsi matematika yang aman
        return $this->evaluateMathExpression($ekspresi);
    }

    private function evaluateMathExpression($ekspresi)
{
    $result = null;
    set_error_handler(function () use (&$result) {
        // Tangani kesalahan yang terjadi saat eval()
        $result = null;
    });

    if ($this->isExpressionSafe($ekspresi)) {
        $result = eval("return $ekspresi;");
    } else {
        // Ekspresi tidak aman, mengembalikan null
        $result = null;
    }

    restore_error_handler();
    return $result;
}

private function isExpressionSafe($ekspresi)
{
    // Periksa apakah terdapat karakter khusus yang tidak diizinkan
    $forbiddenChars = ['`', '"', '\'', '$'];

    foreach ($forbiddenChars as $char) {
        if (strpos($ekspresi, $char) !== false) {
            return false; // Karakter khusus yang tidak diizinkan ditemukan
        }
    }

    return true; // Ekspresi aman
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

class HitungJarak
{
    public function hitungJarakAntarTitik($x1, $y1, $x2, $y2)
    {
        $jarak = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
        return $jarak;
    }

    public function hitungJarakTempuh($kecepatan, $waktu)
    {
        $jarak = $kecepatan * $waktu;
        return $jarak;
    }

    public function hitungJarakSudut($sudut, $jariJari)
    {
        $jarak = $sudut * $jariJari;
        return $jarak;
    }

    public function hitungJarakAntaraGaris($A, $B, $C, $x, $y)
    {
        $jarak = abs($A * $x + $B * $y + $C) / sqrt(pow($A, 2) + pow($B, 2));
        return $jarak;
    }

    public function hitungJarakManhattan($x1, $y1, $x2, $y2)
    {
        $jarak = abs($x2 - $x1) + abs($y2 - $y1);
        return $jarak;
    }

    public function hitungJarakHaversine($lat1, $lon1, $lat2, $lon2)
    {
        $r = 6371; // Jari-jari rata-rata Bumi dalam kilometer
        $dlat = deg2rad($lat2 - $lat1);
        $dlon = deg2rad($lon2 - $lon1);
        $a = sin($dlat / 2) * sin($dlat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $jarak = $r * $c;
        return $jarak;
    }
}

class HitungBerat
{
    public function hitungBeratBenda($massa, $gravitasi)
    {
        $berat = $massa * $gravitasi;
        return $berat;
    }

    public function hitungBeratJenis($massaJenis, $gravitasi)
    {
        $beratJenis = $massaJenis * $gravitasi;
        return $beratJenis;
    }

    public function hitungBeratMolekul($massaAtom1, $jumlahAtom1, $massaAtom2, $jumlahAtom2)
    {
        $beratMolekul = ($massaAtom1 * $jumlahAtom1) + ($massaAtom2 * $jumlahAtom2);
        return $beratMolekul;
    }

    public function hitungBeratIsotop($persentaseIsotop1, $massaIsotop1, $persentaseIsotop2, $massaIsotop2)
    {
        $beratIsotop = ($persentaseIsotop1 * $massaIsotop1) + ($persentaseIsotop2 * $massaIsotop2);
        return $beratIsotop;
    }

    public function hitungBeratMolekulRelatif($massaAtom1, $jumlahAtom1, $massaAtom2, $jumlahAtom2)
    {
        $beratMolekulRelatif = ($massaAtom1 * $jumlahAtom1) + ($massaAtom2 * $jumlahAtom2);
        return $beratMolekulRelatif;
    }

    public function hitungBeratBadanIdeal($berat, $tinggi)
    {
        $beratBadanIdeal = $berat / ($tinggi * $tinggi);
        return $beratBadanIdeal;
    }
}

class HitungFrekuensi
{
    public function hitungFrekuensiGelombang($periode)
    {
        $frekuensi = 1 / $periode;
        return $frekuensi;
    }

    public function hitungFrekuensiSudut($frekuensi)
    {
        $frekuensiSudut = 2 * pi() * $frekuensi;
        return $frekuensiSudut;
    }

    public function hitungFrekuensiMusik($oktaf, $frekuensiDasar)
    {
        $frekuensi = $oktaf * $frekuensiDasar;
        return $frekuensi;
    }

    public function hitungFrekuensiGelombangElektromagnetik($panjangGelombang)
    {
        $frekuensi = 3 * pow(10, 8) / $panjangGelombang;
        return $frekuensi;
    }

    public function hitungFrekuensiRotasi($jumlahPutaran, $waktu)
    {
        $frekuensi = $jumlahPutaran / $waktu;
        return $frekuensi;
    }

    public function hitungFrekuensiDataStatistik($jumlahDataTertentu, $jumlahTotalData)
    {
        $frekuensi = $jumlahDataTertentu / $jumlahTotalData;
        return $frekuensi;
    }
}

class HitungGetaran
{
    public function hitungFrekuensi($periode)
    {
        $frekuensi = 1 / $periode;
        return $frekuensi;
    }

    public function hitungPeriode($frekuensi)
    {
        $periode = 1 / $frekuensi;
        return $periode;
    }

    public function hitungSudutKecepatan($frekuensi)
    {
        $sudutKecepatan = 2 * pi() * $frekuensi;
        return $sudutKecepatan;
    }

    public function hitungKecepatanAmplitudoMaksimum($sudutKecepatan, $amplitudo)
    {
        $kecepatanAmplitudoMaksimum = $sudutKecepatan * $amplitudo;
        return $kecepatanAmplitudoMaksimum;
    }

    public function hitungPercepatanAmplitudoMaksimum($sudutKecepatan, $amplitudo)
    {
        $percepatanAmplitudoMaksimum = pow($sudutKecepatan, 2) * $amplitudo;
        return $percepatanAmplitudoMaksimum;
    }

    public function hitungPercepatanSentripetal($sudutKecepatan, $radius)
    {
        $percepatanSentripetal = pow($sudutKecepatan, 2) * $radius;
        return $percepatanSentripetal;
    }

    public function hitungEnergiKinetikGetaran($massa, $sudutKecepatan, $amplitudo)
    {
        $energiKinetikGetaran = 0.5 * $massa * pow($sudutKecepatan, 2) * pow($amplitudo, 2);
        return $energiKinetikGetaran;
    }
}

class HitungKemiringan
{
    public function hitungKemiringanGaris($x1, $y1, $x2, $y2)
    {
        $kemiringan = ($y2 - $y1) / ($x2 - $x1);
        return $kemiringan;
    }

    public function hitungKemiringanTangen($kemiringan)
    {
        $kemiringanTangen = atan($kemiringan);
        return $kemiringanTangen;
    }

    public function hitungKemiringanSudut($kemiringan)
    {
        $kemiringanSudut = asin($kemiringan / sqrt(1 + pow($kemiringan, 2)));
        return $kemiringanSudut;
    }

    public function hitungKemiringanPermukaan($dy, $dx)
    {
        $kemiringanPermukaan = atan($dy / $dx);
        return $kemiringanPermukaan;
    }

    public function hitungKemiringanPersamaanLinear($a, $b)
    {
        $kemiringanPersamaanLinear = -$a / $b;
        return $kemiringanPersamaanLinear;
    }
}

class HitungGelombang
{
    public function hitungPanjangGelombang($v, $f)
    {
        $panjangGelombang = $v / $f;
        return $panjangGelombang;
    }

    public function hitungKecepatanGelombang($lambda, $f)
    {
        $kecepatanGelombang = $lambda * $f;
        return $kecepatanGelombang;
    }

    public function hitungFrekuensiGelombang($v, $lambda)
    {
        $frekuensiGelombang = $v / $lambda;
        return $frekuensiGelombang;
    }

    public function hitungPeriodeGelombang($f)
    {
        $periodeGelombang = 1 / $f;
        return $periodeGelombang;
    }

    public function hitungKecepatanGrup($dLambda, $dt)
    {
        $kecepatanGrup = $dLambda / $dt;
        return $kecepatanGrup;
    }

    public function hitungAmplitudoGelombang($y)
    {
        $amplitudoGelombang = max($y) - min($y);
        return $amplitudoGelombang;
    }

    public function hitungPersamaanGelombang($A, $k, $x, $omega, $t)
    {
        $persamaanGelombang = $A * sin($k * $x - $omega * $t);
        return $persamaanGelombang;
    }
}

class HitungFrekuensiSuhu
{
    // Konversi antara skala suhu
    public function konversiCelciusToFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }

    public function konversiCelciusToKelvin($celsius)
    {
        return $celsius + 273.15;
    }

    public function konversiFahrenheitToCelcius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }

    public function konversiFahrenheitToKelvin($fahrenheit)
    {
        return ($fahrenheit + 459.67) * 5 / 9;
    }

    public function konversiKelvinToCelcius($kelvin)
    {
        return $kelvin - 273.15;
    }

    public function konversiKelvinToFahrenheit($kelvin)
    {
        return ($kelvin * 9 / 5) - 459.67;
    }

    // Konversi suhu dalam termometer
    public function konversiReamurToCelcius($reamur)
    {
        return $reamur * 5 / 4;
    }

    public function konversiRankineToCelcius($rankine)
    {
        return ($rankine - 491.67) * 5 / 9;
    }

    public function konversiDelisleToCelcius($delisle)
    {
        return 100 - ($delisle * 2 / 3);
    }

    public function konversiNewtonToCelcius($newton)
    {
        return $newton * 100 / 33;
    }

    // Perubahan suhu
    public function perubahanCelcius($celcius1, $celcius2)
    {
        return $celcius2 - $celcius1;
    }

    public function perubahanFahrenheit($fahrenheit1, $fahrenheit2)
    {
        return $fahrenheit2 - $fahrenheit1;
    }

    public function perubahanKelvin($kelvin1, $kelvin2)
    {
        return $kelvin2 - $kelvin1;
    }

    // Persamaan suhu
    public function persamaanIdealGas($pressure, $volume, $n, $R, $temperature)
    {
        return $pressure * $volume / ($n * $R * $temperature);
    }

    // Konduksi Panas
    public function konduksiHukumFourier($k, $area, $temperatureDifference, $thickness)
    {
        return $k * $area * $temperatureDifference / $thickness;
    }

    // Kapasitas Panas
    public function kapasitasPanasKhusus($heat, $mass, $temperatureDifference)
    {
        return $heat / ($mass * $temperatureDifference);
    }
}

class HitungKetinggian
{
    // Rumus Jarak Jatuh Bebas (Jatuh Gravitasi)
    public function jarakJatuhBebas($g, $t)
    {
        $h = 0.5 * $g * $t * $t;
        return $h;
    }

    // Rumus Ketinggian pada Gerak Vertikal (Vertikal Up atau Vertikal Down)
    public function ketinggianVertikal($v0, $t, $g)
    {
        $h = $v0 * $t - 0.5 * $g * $t * $t;
        return $h;
    }

    // Rumus Ketinggian dalam Gerak Parabola
    public function ketinggianParabola($v0y, $t, $g)
    {
        $h = $v0y * $t - 0.5 * $g * $t * $t;
        return $h;
    }

    // Rumus Ketinggian pada Gerak Vertikal dengan Kecepatan Akhir Nol
    public function ketinggianVertikalAkhirNol($v0y, $t, $g)
    {
        $h = $v0y * $t + 0.5 * $g * $t * $t;
        return $h;
    }

    // Rumus Ketinggian pada Gerak Proyektil
    public function ketinggianProyektil($v0y, $T, $g)
    {
        $h = $v0y * $T - 0.5 * $g * $T * $T;
        return $h;
    }
}

class HitungTeganganListrik
{
    public function rumusTeganganListrik($I, $R)
    {
        return $I * $R;
    }

    public function rumusHukumOhm($I, $R)
    {
        return $I * $R;
    }

    public function rumusTeganganSeri($voltages)
    {
        $totalVoltage = 0;
        foreach ($voltages as $voltage) {
            $totalVoltage += $voltage;
        }
        return $totalVoltage;
    }

    public function rumusTeganganParalel($voltages)
    {
        $inverseTotalVoltage = 0;
        foreach ($voltages as $voltage) {
            $inverseTotalVoltage += 1 / $voltage;
        }
        return 1 / $inverseTotalVoltage;
    }

    public function rumusTeganganKapasitor($Q, $C)
    {
        return $Q / $C;
    }

    public function rumusTeganganInduktor($L, $di_dt)
    {
        return $L * $di_dt;
    }

    public function rumusTeganganTransformator($V1, $N1, $N2)
    {
        return ($V1 * $N2) / $N1;
    }
}

class HitungGravitasi
{

    // Hukum Gravitasi Newton
    public static function hukumGravitasiNewton($m1, $m2, $r)
    {
        $G = 6.67430e-11; // Konstanta Gravitasi
        $F = $G * (($m1 * $m2) / pow($r, 2)); // Rumus Hukum Gravitasi Newton
        return $F;
    }

    // Rumus Kecepatan Melingkar di Orbit
    public static function rumusKecepatanMelingkar($M, $r)
    {
        $G = 6.67430e-11; // Konstanta Gravitasi
        $v = sqrt(($G * $M) / $r); // Rumus Kecepatan Melingkar di Orbit
        return $v;
    }

    // Hukum Kepler
    public static function hukumKepler($T, $a)
    {
        $G = 6.67430e-11; // Konstanta Gravitasi
        $M = (4 * pow(pi(), 2) * pow($a, 3)) / pow($T, 2); // Rumus Hukum Kepler
        return $M;
    }

    // Rumus Energi Potensial Gravitasi
    public static function energiPotensialGravitasi($m1, $m2, $r)
    {
        $G = 6.67430e-11; // Konstanta Gravitasi
        $U = - (($G * ($m1 * $m2)) / $r); // Rumus Energi Potensial Gravitasi
        return $U;
    }

    // Rumus Percepatan Gravitasi
    public static function rumusPercepatanGravitasi($M, $r)
    {
        $G = 6.67430e-11; // Konstanta Gravitasi
        $g = ($G * $M) / pow($r, 2); // Rumus Percepatan Gravitasi
        return $g;
    }
}

class HitungTsunami
{
    // Persamaan Gerakan Gelombang Tsunami
    public static function persamaanGerakanTsunami($v, $h, $d)
    {
        // Rumus persamaan gerakan gelombang tsunami
        $y = $v * sqrt($h / $d);
        return $y;
    }

    // Rumus Kecepatan Gelombang Tsunami
    public static function rumusKecepatanTsunami($g, $h)
    {
        // Rumus kecepatan gelombang tsunami
        $v = sqrt($g * $h);
        return $v;
    }

    // Rumus Periode Gelombang Tsunami
    public static function rumusPeriodeTsunami($g, $h)
    {
        // Rumus periode gelombang tsunami
        $T = 2 * pi() * sqrt($h / $g);
        return $T;
    }

    // Persamaan Energi Potensial Gelombang Tsunami
    public static function persamaanEnergiPotensialTsunami($p, $g, $h)
    {
        // Rumus persamaan energi potensial gelombang tsunami
        $E = ($p * $g * pow($h, 2)) / 2;
        return $E;
    }

    // Rumus Skala Tsunami
    public static function rumusSkalaTsunami($m, $d)
    {
        // Rumus skala tsunami
        $h = pow(10, ($m - 7)) * $d;
        return $h;
    }
}

class HitungDebitAir
{

    // Rumus Debit Air: Debit = Luas Penampang × Kecepatan Aliran
    public static function hitungDebitAir($luasPenampang, $kecepatanAliran)
    {
        return $luasPenampang * $kecepatanAliran;
    }

    // Rumus Hukum Kontinuitas: A1 × V1 = A2 × V2
    public static function hitungHukumKontinuitas($luasPenampang1, $kecepatanAliran1, $luasPenampang2)
    {
        $kecepatanAliran2 = ($luasPenampang1 * $kecepatanAliran1) / $luasPenampang2;
        return $kecepatanAliran2;
    }

    // Rumus Persamaan Torricelli: V = √(2 × g × h)
    public static function hitungPersamaanTorricelli($tinggiJatuh)
    {
        $g = 9.8; // Percepatan gravitasi
        $kecepatanAliran = sqrt(2 * $g * $tinggiJatuh);
        return $kecepatanAliran;
    }

    // Rumus Hukum Darcy-Weisbach: Hf = (f × (L / D) × (V^2) / (2 × g))
    public static function hitungHukumDarcyWeisbach($koefisienGesekan, $panjangPipa, $diameterPipa, $kecepatanAliran)
    {
        $g = 9.8; // Percepatan gravitasi
        $kehilanganTekanan = ($koefisienGesekan * ($panjangPipa / $diameterPipa) * pow($kecepatanAliran, 2)) / (2 * $g);
        return $kehilanganTekanan;
    }

    // Rumus Hukum Manning: V = (1 / n) × (R^2/3) × (S^1/2)
    public static function hitungHukumManning($koefisienManning, $jariJariHidrolik, $kemiringan)
    {
        $kecepatanAliran = (1 / $koefisienManning) * pow($jariJariHidrolik, 2 / 3) * sqrt($kemiringan);
        return $kecepatanAliran;
    }

    // Rumus Persamaan Chézy: V = (C × (R^(2/3)) × (S^(1/2)))
    public static function hitungPersamaanChezy($koefisienChezy, $jariJariHidrolik, $kemiringan)
    {
        $kecepatanAliran = $koefisienChezy * pow($jariJariHidrolik, 2 / 3) * sqrt($kemiringan);
        return $kecepatanAliran;
    }

    // Rumus Persamaan Manning-Strickler: V = (k × (R^(2/3)) × (S^(1/2)))
    public static function hitungPersamaanManningStrickler($koefisienStrickler, $jariJariHidrolik, $kemiringan)
    {
        $kecepatanAliran = $koefisienStrickler * pow($jariJariHidrolik, 2 / 3) * sqrt($kemiringan);
        return $kecepatanAliran;
    }
}

class HitungCuaca
{
    // Fungsi untuk menghitung Persamaan Gas Ideal
    public static function hitungPersamaanGasIdeal($tekanan, $volume, $suhu)
    {
        $konstanta = 8.314; // Konstanta gas ideal
        $n = $tekanan * $volume / ($konstanta * $suhu);
        return $n;
    }

    // Fungsi untuk menghitung Persamaan Clausius-Clapeyron
    public static function hitungPersamaanClausiusClapeyron($tekananUap, $suhu)
    {
        $konstanta = 461.5; // Konstanta Clausius-Clapeyron
        $lnP = log($tekananUap);
        $dT = 1 / $suhu;
        $dpdT = $konstanta * $dT;
        $lnPdT = $lnP / $dT;
        $persamaan = $dpdT * $lnPdT;
        return $persamaan;
    }

    // Fungsi untuk menghitung Persamaan Adiabatik
    public static function hitungPersamaanAdiabatik($tekananAwal, $volumeAwal, $tekananAkhir, $volumeAkhir)
    {
        $persamaan = ($tekananAwal * $volumeAwal) / ($tekananAkhir * $volumeAkhir);
        return $persamaan;
    }

    // Fungsi untuk menghitung Persamaan Termal Radiasi
    public static function hitungPersamaanTermalRadiasi($intensitasRadiasi, $luasPermukaan, $emisivitas)
    {
        $persamaan = $intensitasRadiasi * $luasPermukaan * $emisivitas;
        return $persamaan;
    }

    // Fungsi untuk menghitung Persamaan Pemantulan Cahaya
    public static function hitungPersamaanPemantulanCahaya($sudutDatang, $sudutPantul)
    {
        $sudutPemantulan = $sudutDatang; // Hukum pemantulan cahaya
        return $sudutPemantulan;
    }


    // Fungsi untuk menghitung Persamaan Aliran Fluida
    public static function hitungPersamaanAliranFluida($tekanan, $kecepatan, $tinggi)
    {
        $persamaan = ($tekanan / $kecepatan) + $tinggi;
        return $persamaan;
    }

    // Fungsi untuk menghitung Persamaan Laju Evapotranspirasi
    public static function hitungPersamaanLajuEvapotranspirasi($kecepatanPenguapan, $kecepatanTranspirasi)
    {
        $lajuEvapotranspirasi = $kecepatanPenguapan + $kecepatanTranspirasi;
        return $lajuEvapotranspirasi;
    }

    // Fungsi untuk menghitung Persamaan Termodinamika Atmosfer
    public static function hitungPersamaanTermodinamikaAtmosfer($suhu, $tekanan, $kelembaban)
    {
        $persamaan = ($suhu * $tekanan) / $kelembaban;
        return $persamaan;
    }
}

class HitungKecepatanCahaya
{
    public static function hitungKecepatanCahayaDalamMedium($kecepatanCahaya, $indeksBias)
    {
        $kecepatanDalamMedium = $kecepatanCahaya / $indeksBias;
        return $kecepatanDalamMedium;
    }

    public static function hitungWaktuTempuhCahaya($jarak)
    {
        $kecepatanCahaya = 299792458; // kecepatan cahaya dalam vakum (m/s)
        $waktuTempuh = $jarak / $kecepatanCahaya;
        return $waktuTempuh;
    }

    public static function hitungEnergiFoton($frekuensi)
    {
        $konstantaPlanck = 6.62607015 * pow(10, -34); // konstanta Planck (Joule second)
        $energiFoton = $konstantaPlanck * $frekuensi;
        return $energiFoton;
    }

    public static function hitungPanjangGelombangCahaya($frekuensi)
    {
        $kecepatanCahaya = 299792458; // kecepatan cahaya dalam vakum (m/s)
        $panjangGelombang = $kecepatanCahaya / $frekuensi;
        return $panjangGelombang;
    }

    public static function hitungEfekDopplerCahaya($frekuensiSumber, $kecepatanPendekatan, $kecepatanPenerima)
    {
        $kecepatanCahaya = 299792458; // kecepatan cahaya dalam vakum (m/s)
        $frekuensiTeramati = $frekuensiSumber * ($kecepatanCahaya + $kecepatanPenerima) / ($kecepatanCahaya + $kecepatanPendekatan);
        return $frekuensiTeramati;
    }

    public static function hitungInterferensiCahaya($selisihFase)
    {
        $amplitudoInterferensi = 2 * cos($selisihFase / 2);
        return $amplitudoInterferensi;
    }

    public static function hitungPolaritasCahayaTerpolarisasi($sudutPolarisasi, $amplitudoAwal)
    {
        $amplitudoTerpolarisasi = $amplitudoAwal * cos($sudutPolarisasi);
        return $amplitudoTerpolarisasi;
    }

    public static function hitungHukumSnellius($kecepatanCahaya1, $kecepatanCahaya2, $sudutIncident)
    {
        $indeksBias = $kecepatanCahaya1 / $kecepatanCahaya2;
        $sudutBias = asin($indeksBias * sin($sudutIncident));
        return $sudutBias;
    }

    public static function hitungEfekFotoelektrik($energiFoton, $fungsiKerja)
    {
        $energiKinetikElektron = $energiFoton - $fungsiKerja;
        return $energiKinetikElektron;
    }
}

class Kimia
{

    public static function rumusStoikiometri($massaReaktan, $massaProduk)
    {
        // Proses perhitungan rumus stoikiometri
        $hasil = $massaProduk - $massaReaktan;
        return $hasil;
    }

    public static function rumusKonsentrasi($massaZat, $massaTotal)
    {
        // Proses perhitungan rumus konsentrasi
        $hasil = ($massaZat / $massaTotal) * 100;
        return $hasil;
    }

    public static function rumusLajuReaksi($konsentrasiReaktan1, $konsentrasiReaktan2, $x, $y)
    {
        // Proses perhitungan rumus laju reaksi
        $hasil = $konsentrasiReaktan1 ** $x * $konsentrasiReaktan2 ** $y;
        return $hasil;
    }

    public static function rumusTermokimia($perubahanEntalpi1, $perubahanEntalpi2)
    {
        // Proses perhitungan rumus termokimia
        $hasil = $perubahanEntalpi1 + $perubahanEntalpi2;
        return $hasil;
    }

    public static function rumusEquilibriumKimia($konsentrasiProduk, $konsentrasiReaktan)
    {
        // Proses perhitungan rumus equilibrium kimia
        $hasil = $konsentrasiProduk / $konsentrasiReaktan;
        return $hasil;
    }

    public static function rumusPH($konsentrasiHidrogen)
    {
        // Proses perhitungan rumus pH
        $hasil = -log10($konsentrasiHidrogen);
        return $hasil;
    }

    public static function rumusTermodinamika($tekanan, $volume, $jumlahMol, $konstantaGas, $suhu)
    {
        // Proses perhitungan rumus termodinamika
        $hasil = $tekanan * $volume / ($jumlahMol * $konstantaGas * $suhu);
        return $hasil;
    }

    public static function rumusElektrokimia($jumlahMuatan, $massaZatTerlarut)
    {
        // Proses perhitungan rumus elektrokimia
        $hasil = $jumlahMuatan / $massaZatTerlarut;
        return $hasil;
    }
}

class HitungDayaLedakNuklir
{
    public static function rumusEnergiNuklir($massaBom)
    {
        $kecepatanCahaya = 299792458; // kecepatan cahaya dalam vakum (m/s)
        $energi = $massaBom * pow($kecepatanCahaya, 2);
        return $energi;
    }

    public static function rumusEfisiensiFisi($energiFisi, $energiBahanBakar)
    {
        $efisiensi = ($energiFisi / $energiBahanBakar) * 100;
        return $efisiensi;
    }

    public static function rumusLajuPeluruhanRadioaktif($jumlahAtomAwal, $konstantaPeluruhan, $waktu)
    {
        $jumlahAtomTersisa = $jumlahAtomAwal * exp(-$konstantaPeluruhan * $waktu);
        return $jumlahAtomTersisa;
    }

    public static function rumusPemantulanGelombang($sudutDatang)
    {
        $sudutPantul = $sudutDatang;
        return $sudutPantul;
    }
}

class CalculatorHitungWarisanIslami
{

    public static function hitungWarisan($totalHarta, $jumlahAhliWaris)
    {
        $bagianPerSuamiIstri = 1 / 8 * $totalHarta;
        $bagianPerAnakLaki = 2 / 8 * $totalHarta;
        $bagianPerAnakPerempuan = 1 / 8 * $totalHarta;
        $bagianPerOrangTua = 1 / 6 * $totalHarta;
        $bagianPerSaudaraKandungLaki = 1 / 6 * $totalHarta;
        $bagianPerSaudaraKandungPerempuan = 1 / 6 * $totalHarta;

        $warisanPerAhli = ($bagianPerSuamiIstri + $bagianPerAnakLaki + $bagianPerAnakPerempuan + $bagianPerOrangTua + $bagianPerSaudaraKandungLaki + $bagianPerSaudaraKandungPerempuan) / $jumlahAhliWaris;

        return $warisanPerAhli;
    }
}

class CalculatorZakat
{
    public static function hitungZakatEmas($jumlahEmas)
    {
        $nisabEmas = 85; // Nisab emas dalam gram

        if ($jumlahEmas >= $nisabEmas) {
            $zakatEmas = 0.025 * $jumlahEmas;
            return $zakatEmas;
        } else {
            return 0;
        }
    }

    public static function hitungZakatPerak($jumlahPerak)
    {
        $nisabPerak = 595; // Nisab perak dalam gram

        if ($jumlahPerak >= $nisabPerak) {
            $zakatPerak = 0.025 * $jumlahPerak;
            return $zakatPerak;
        } else {
            return 0;
        }
    }

    public static function hitungZakatPertanian($hasilPanen)
    {
        $nisabPertanian = 653; // Nisab pertanian dalam kg

        if ($hasilPanen >= $nisabPertanian) {
            $zakatPertanian = 0.1 * $hasilPanen;
            return $zakatPertanian;
        } else {
            return 0;
        }
    }
}

class CalculatorHisabFalak
{
    public static function hitungWaktuHisab($tanggal, $lokasi)
    {
        // Simulasikan perhitungan waktu hisab berdasarkan tanggal dan lokasi

        // Contoh implementasi untuk menghitung waktu hisab Hijriyah
        $waktuHisabHijriyah = "20:00";

        // Contoh implementasi untuk menghitung waktu hisab Ummul Qura
        $waktuHisabUmmulQura = "19:30";

        // Mengembalikan hasil perhitungan waktu hisab dalam bentuk array
        return [
            "Hijriyah" => $waktuHisabHijriyah,
            "Ummul Qura" => $waktuHisabUmmulQura,
        ];
    }

    public static function hitungWaktuFalak($tanggal, $lokasi)
    {
        // Simulasikan perhitungan waktu falak berdasarkan tanggal dan lokasi

        // Contoh implementasi untuk menghitung waktu falak Matahari terbenam
        $waktuFalakMatahari = "18:30";

        // Contoh implementasi untuk menghitung waktu falak Hilal
        $waktuFalakHilal = "19:00";

        // Mengembalikan hasil perhitungan waktu falak dalam bentuk array
        return [
            "Matahari" => $waktuFalakMatahari,
            "Hilal" => $waktuFalakHilal,
        ];
    }
}

echo " Aplikasi Kalkulator, Fisika, kima dan islami <br>";
echo "<br>";
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

//penggunaan class HitungJarak
$hitungJarak = new HitungJarak();

// Menghitung jarak antar titik koordinat (2, 3) dan (5, 7)
$jarakAntarTitik = $hitungJarak->hitungJarakAntarTitik(2, 3, 5, 7);
echo "Jarak Antar Titik: " . $jarakAntarTitik . "<br>";

// Menghitung jarak tempuh dengan kecepatan 10 m/s dan waktu 5 detik
$jarakTempuh = $hitungJarak->hitungJarakTempuh(10, 5);
echo "Jarak Tempuh: " . $jarakTempuh . "<br>";

// Menghitung jarak sudut dengan sudut 45 derajat dan jari-jari 3
$jarakSudut = $hitungJarak->hitungJarakSudut(45, 3);
echo "Jarak Sudut: " . $jarakSudut . "<br>";

// Menghitung jarak antara garis Ax + By + C = 0 dengan titik (2, 3)
$jarakAntaraGaris = $hitungJarak->hitungJarakAntaraGaris(2, -3, 4, 2, 3);
echo "Jarak Antara Garis: " . $jarakAntaraGaris . "<br>";

// Menghitung jarak Manhattan antara titik koordinat (2, 3) dan (7, 10)
$jarakManhattan = $hitungJarak->hitungJarakManhattan(2, 3, 7, 10);
echo "Jarak Manhattan: " . $jarakManhattan . "<br>";

// Menghitung jarak Haversine antara titik koordinat (40.7128, -74.0060) dan (34.0522, -118.2437)
$jarakHaversine = $hitungJarak->hitungJarakHaversine(40.7128, -74.0060, 34.0522, -118.2437);
echo "Jarak Haversine: " . $jarakHaversine . "<br>";

//penggunaan class HitungBerat
$hitungBerat = new HitungBerat();

// Menghitung berat benda dengan massa 10 kg dan gravitasi 9.8 m/s^2
$beratBenda = $hitungBerat->hitungBeratBenda(10, 9.8);
echo "Berat Benda: " . $beratBenda . "<br>";

// Menghitung berat jenis dengan massa jenis 5 kg/m^3 dan gravitasi 9.8 m/s^2
$beratJenis = $hitungBerat->hitungBeratJenis(5, 9.8);
echo "Berat Jenis: " . $beratJenis . "<br>";

// Menghitung berat molekul dengan massa atom dan jumlah atom yang terlibat
$beratMolekul = $hitungBerat->hitungBeratMolekul(12, 2, 16, 1);
echo "Berat Molekul: " . $beratMolekul . "<br>";

// Menghitung berat isotop dengan persentase isotop dan massa isotop yang terlibat
$beratIsotop = $hitungBerat->hitungBeratIsotop(70, 12, 30, 14);
echo "Berat Isotop: " . $beratIsotop . "<br>";

// Menghitung berat molekul relatif dengan massa atom dan jumlah atom dalam senyawa
$beratMolekulRelatif = $hitungBerat->hitungBeratMolekulRelatif(12, 2, 16, 1);
echo "Berat Molekul Relatif: " . $beratMolekulRelatif . "<br>";

// Menghitung berat badan ideal (BMI) dengan berat dan tinggi
$beratBadanIdeal = $hitungBerat->hitungBeratBadanIdeal(70, 1.75);
echo "Berat Badan Ideal (BMI): " . $beratBadanIdeal . "<br>";

//penggunaan class HitungFrekuensi
$hitungFrekuensi = new HitungFrekuensi();

// Menghitung frekuensi gelombang dengan periode 0.5 detik
$frekuensiGelombang = $hitungFrekuensi->hitungFrekuensiGelombang(0.5);
echo "Frekuensi Gelombang: " . $frekuensiGelombang . " Hz<br>";

// Menghitung frekuensi sudut dengan frekuensi 100 Hz
$frekuensiSudut = $hitungFrekuensi->hitungFrekuensiSudut(100);
echo "Frekuensi Sudut: " . $frekuensiSudut . " rad/s<br>";

// Menghitung frekuensi musik dengan oktaf 3 dan frekuensi dasar 440 Hz
$frekuensiMusik = $hitungFrekuensi->hitungFrekuensiMusik(3, 440);
echo "Frekuensi Musik: " . $frekuensiMusik . " Hz<br>";

// Menghitung frekuensi gelombang elektromagnetik dengan panjang gelombang 2 meter
$frekuensiGelombangElektromagnetik = $hitungFrekuensi->hitungFrekuensiGelombangElektromagnetik(2);
echo "Frekuensi Gelombang Elektromagnetik: " . $frekuensiGelombangElektromagnetik . " Hz<br>";

// Menghitung frekuensi rotasi dengan jumlah putaran 5 dan waktu 2 detik
$frekuensiRotasi = $hitungFrekuensi->hitungFrekuensiRotasi(5, 2);
echo "Frekuensi Rotasi: " . $frekuensiRotasi . " Hz<br>";

// Menghitung frekuensi data dalam statistik dengan jumlah data tertentu 20 dan jumlah total data 100
$frekuensiDataStatistik = $hitungFrekuensi->hitungFrekuensiDataStatistik(20, 100);
echo "Frekuensi Data dalam Statistik: " . $frekuensiDataStatistik . "<br>";

//penggunaan class HitungGetaran
$hitungGetaran = new HitungGetaran();

// Menghitung frekuensi dengan periode 0.5 detik
$frekuensi = $hitungGetaran->hitungFrekuensi(0.5);
echo "Frekuensi: " . $frekuensi . " Hz<br>";

// Menghitung periode dengan frekuensi 100 Hz
$periode = $hitungGetaran->hitungPeriode(100);
echo "Periode: " . $periode . " s<br>";

// Menghitung sudut kecepatan dengan frekuensi 100 Hz
$sudutKecepatan = $hitungGetaran->hitungSudutKecepatan(100);
echo "Sudut Kecepatan: " . $sudutKecepatan . " rad/s<br>";

// Menghitung kecepatan amplitudo maksimum dengan sudut kecepatan 2 rad/s dan amplitudo 0.1 meter
$kecepatanAmplitudoMaksimum = $hitungGetaran->hitungKecepatanAmplitudoMaksimum(2, 0.1);
echo "Kecepatan Amplitudo Maksimum: " . $kecepatanAmplitudoMaksimum . " m/s<br>";

// Menghitung percepatan amplitudo maksimum dengan sudut kecepatan 2 rad/s dan amplitudo 0.1 meter
$percepatanAmplitudoMaksimum = $hitungGetaran->hitungPercepatanAmplitudoMaksimum(2, 0.1);
echo "Percepatan Amplitudo Maksimum: " . $percepatanAmplitudoMaksimum . " m/s²<br>";

// Menghitung percepatan sentripetal dengan sudut kecepatan 2 rad/s dan jari-jari 0.5 meter
$percepatanSentripetal = $hitungGetaran->hitungPercepatanSentripetal(2, 0.5);
echo "Percepatan Sentripetal: " . $percepatanSentripetal . " m/s²<br>";

// Menghitung energi kinetik getaran dengan massa 1 kg, sudut kecepatan 2 rad/s, dan amplitudo 0.1 meter
$energiKinetikGetaran = $hitungGetaran->hitungEnergiKinetikGetaran(1, 2, 0.1);
echo "Energi Kinetik Getaran: " . $energiKinetikGetaran . " J<br>";

//penggunaan class HitungKemiringan
$hitungKemiringan = new HitungKemiringan();

// Menghitung kemiringan garis antara titik (2, 4) dan (6, 10)
$kemiringanGaris = $hitungKemiringan->hitungKemiringanGaris(2, 4, 6, 10);
echo "Kemiringan Garis: " . $kemiringanGaris . "<br>";

// Menghitung kemiringan tangen dari kemiringan garis sebelumnya
$kemiringanTangen = $hitungKemiringan->hitungKemiringanTangen($kemiringanGaris);
echo "Kemiringan Tangen: " . $kemiringanTangen . "<br>";

// Menghitung kemiringan sudut dari kemiringan garis sebelumnya
$kemiringanSudut = $hitungKemiringan->hitungKemiringanSudut($kemiringanGaris);
echo "Kemiringan Sudut: " . $kemiringanSudut . "<br>";

// Menghitung kemiringan permukaan dengan perubahan ketinggian 5 dan perubahan jarak horizontal 3
$kemiringanPermukaan = $hitungKemiringan->hitungKemiringanPermukaan(5, 3);
echo "Kemiringan Permukaan: " . $kemiringanPermukaan . "<br>";

// Menghitung kemiringan dalam persamaan linear dengan koefisien x -2 dan koefisien y 3
$kemiringanPersamaanLinear = $hitungKemiringan->hitungKemiringanPersamaanLinear(-2, 3);
echo "Kemiringan dalam Persamaan Linear: " . $kemiringanPersamaanLinear . "<br>";

//penggunaan class HitungGelombang
$hitungGelombang = new HitungGelombang();

// Menghitung panjang gelombang dengan kecepatan 340 m/s dan frekuensi 440 Hz
$panjangGelombang = $hitungGelombang->hitungPanjangGelombang(340, 440);
echo "Panjang Gelombang: " . $panjangGelombang . " meter<br>";

// Menghitung kecepatan gelombang dengan panjang gelombang 0.8 meter dan frekuensi 220 Hz
$kecepatanGelombang = $hitungGelombang->hitungKecepatanGelombang(0.8, 220);
echo "Kecepatan Gelombang: " . $kecepatanGelombang . " m/s<br>";

// Menghitung frekuensi gelombang dengan kecepatan 300 m/s dan panjang gelombang 0.5 meter
$frekuensiGelombang = $hitungGelombang->hitungFrekuensiGelombang(300, 0.5);
echo "Frekuensi Gelombang: " . $frekuensiGelombang . " Hz<br>";

// Menghitung periode gelombang dengan frekuensi 440 Hz
$periodeGelombang = $hitungGelombang->hitungPeriodeGelombang(440);
echo "Periode Gelombang: " . $periodeGelombang . " detik<br>";

// Menghitung kecepatan grup dengan perubahan panjang gelombang 0.2 meter dan perubahan waktu 0.5 detik
$kecepatanGrup = $hitungGelombang->hitungKecepatanGrup(0.2, 0.5);
echo "Kecepatan Grup: " . $kecepatanGrup . " m/s<br>";

// Menghitung amplitudo gelombang dengan data posisi partikel $y
$y = [0.5, 1.2, 0.8, -0.3, -1.0];
$amplitudoGelombang = $hitungGelombang->hitungAmplitudoGelombang($y);
echo "Amplitudo Gelombang: " . $amplitudoGelombang . "<br>";

// Menghitung persamaan gelombang dengan amplitudo 2, bilangan gelombang 0.6, posisi 0.4, frekuensi sudut 2π, dan waktu 1.5 detik
$persamaanGelombang = $hitungGelombang->hitungPersamaanGelombang(2, 0.6, 0.4, 2 * M_PI, 1.5);
echo "Persamaan Gelombang: " . $persamaanGelombang;

//penggunaan class HitungFrekuensi
$hitungFrekuensi = new HitungFrekuensiSuhu();

// Konversi suhu dari Celcius ke Fahrenheit
$celsius = 25;
$fahrenheit = $hitungFrekuensi->konversiCelciusToFahrenheit($celsius);
echo "Hasil konversi Celcius ke Fahrenheit: " . $fahrenheit . " °F<br>";

// Perubahan suhu dari Celcius ke Fahrenheit
$celsius1 = 20;
$celsius2 = 35;
$perubahanFahrenheit = $hitungFrekuensi->perubahanFahrenheit($hitungFrekuensi->konversiCelciusToFahrenheit($celsius1), $hitungFrekuensi->konversiCelciusToFahrenheit($celsius2));
echo "Perubahan suhu dalam Fahrenheit: " . $perubahanFahrenheit . " °F<br>";

// Hitung persamaan Ideal Gas
$pressure = 1; // tekanan dalam satuan tertentu
$volume = 2; // volume dalam satuan tertentu
$n = 3; // jumlah mol
$R = 0.0821; // konstanta gas
$temperature = 300; // suhu dalam Kelvin
$hasilPersamaanIdealGas = $hitungFrekuensi->persamaanIdealGas($pressure, $volume, $n, $R, $temperature);
echo "Hasil persamaan Ideal Gas: " . $hasilPersamaanIdealGas . "<br>";

// Hitung konduksi panas
$k = 0.1; // konduktivitas termal
$area = 5; // luas permukaan
$temperatureDifference = 50; // perbedaan suhu
$thickness = 2; // ketebalan
$hasilKonduksiHukumFourier = $hitungFrekuensi->konduksiHukumFourier($k, $area, $temperatureDifference, $thickness);
echo "Hasil konduksi panas Hukum Fourier: " . $hasilKonduksiHukumFourier . "<br>";

// Hitung kapasitas panas khusus
$heat = 100; // jumlah panas yang ditransfer
$mass = 10; // massa
$temperatureDifference = 5; // perbedaan suhu
$hasilKapasitasPanasKhusus = $hitungFrekuensi->kapasitasPanasKhusus($heat, $mass, $temperatureDifference);
echo "Hasil kapasitas panas khusus: " . $hasilKapasitasPanasKhusus;

//menggunakan class dan memanggil fungsi-fungsi
$hitungKetinggian = new HitungKetinggian();

$g = 9.8; // percepatan gravitasi dalam m/s^2
$t = 2; // waktu dalam detik
$v0 = 10; // kecepatan awal vertikal dalam m/s
$v0y = 20; // kecepatan awal vertikal dalam m/s
$T = 4; // waktu puncak dalam detik

// Menghitung jarak jatuh bebas
$jarakJatuhBebas = $hitungKetinggian->jarakJatuhBebas($g, $t);
echo "Jarak jatuh bebas: " . $jarakJatuhBebas . " meter<br>";

// Menghitung ketinggian pada gerak vertikal
$ketinggianVertikal = $hitungKetinggian->ketinggianVertikal($v0, $t, $g);
echo "Ketinggian pada gerak vertikal: " . $ketinggianVertikal . " meter<br>";

// Menghitung ketinggian dalam gerak parabola
$ketinggianParabola = $hitungKetinggian->ketinggianParabola($v0y, $t, $g);
echo "Ketinggian dalam gerak parabola: " . $ketinggianParabola . " meter<br>";

// Menghitung ketinggian pada gerak vertikal dengan kecepatan akhir nol
$ketinggianVertikalAkhirNol = $hitungKetinggian->ketinggianVertikalAkhirNol($v0y, $t, $g);
echo "Ketinggian pada gerak vertikal dengan kecepatan akhir nol: " . $ketinggianVertikalAkhirNol . " meter<br>";

// Menghitung ketinggian pada gerak proyektil
$ketinggianProyektil = $hitungKetinggian->ketinggianProyektil($v0y, $T, $g);
echo "Ketinggian pada gerak proyektil: " . $ketinggianProyektil . " meter<br>";

//objek dari class HitungTeganganListrik
$hitungTegangan = new HitungTeganganListrik();

// Mengisi nilai-nilai variabel
$I = 2; // Nilai arus listrik
$R = 10; // Nilai resistansi

$voltages = [12, 10, 8]; // Nilai tegangan dalam rangkaian

$Q = 50; // Nilai muatan kapasitor
$C = 5; // Nilai kapasitansi

$L = 3; // Nilai induktansi
$di_dt = 0.5; // Nilai turunan arus terhadap waktu

$V1 = 100; // Nilai tegangan awal
$N1 = 10; // Nilai jumlah lilitan awal
$N2 = 5; // Nilai jumlah lilitan akhir

// Menghitung tegangan listrik menggunakan rumus tegangan listrik
$tegangan = $hitungTegangan->rumusTeganganListrik($I, $R);
echo "Tegangan listrik: " . $tegangan . " Volt<br>";

// Menghitung tegangan listrik menggunakan rumus hukum Ohm
$tegangan = $hitungTegangan->rumusHukumOhm($I, $R);
echo "Tegangan listrik: " . $tegangan . " Volt<br>";

// Menghitung tegangan dalam rangkaian seri
$teganganSeri = $hitungTegangan->rumusTeganganSeri($voltages);
echo "Tegangan dalam rangkaian seri: " . $teganganSeri . " Volt<br>";

// Menghitung tegangan dalam rangkaian paralel
$teganganParalel = $hitungTegangan->rumusTeganganParalel($voltages);
echo "Tegangan dalam rangkaian paralel: " . $teganganParalel . " Volt<br>";

// Menghitung tegangan pada kapasitor
$teganganKapasitor = $hitungTegangan->rumusTeganganKapasitor($Q, $C);
echo "Tegangan pada kapasitor: " . $teganganKapasitor . " Volt<br>";

// Menghitung tegangan pada induktor
$teganganInduktor = $hitungTegangan->rumusTeganganInduktor($L, $di_dt);
echo "Tegangan pada induktor: " . $teganganInduktor . " Volt<br>";

// Menghitung tegangan pada transformator
$teganganTransformator = $hitungTegangan->rumusTeganganTransformator($V1, $N1, $N2);
echo "Tegangan pada transformator: " . $teganganTransformator . " Volt<br>";

//pemanggilan fungsi:

$m1 = 5; // Massa objek 1
$m2 = 10; // Massa objek 2
$r = 8; // Jarak antara dua objek
$F = HitungGravitasi::hukumGravitasiNewton($m1, $m2, $r);
echo "Gaya Gravitasi: " . $F . " N <br>";

$M = 100; // Massa pusat gravitasi
$r = 15; // Jarak objek dari pusat gravitasi
$v = HitungGravitasi::rumusKecepatanMelingkar($M, $r);
echo "Kecepatan Melingkar: " . $v . " m/s <br>";

$T = 10; // Periode orbit
$a = 5; // Panjang sumbu semi-mayor
$M = HitungGravitasi::hukumKepler($T, $a);
echo "Massa pusat gravitasi: " . $M . " kg <br>";

$m1 = 2; // Massa objek 1
$m2 = 4; // Massa objek 2
$r = 6; // Jarak antara dua objek
$U = HitungGravitasi::energiPotensialGravitasi($m1, $m2, $r);
echo "Energi Potensial Gravitasi: " . $U . " J <br>";

$M = 50; // Massa planet atau benda langit
$r = 10; // Jarak dari pusat planet atau benda langit
$g = HitungGravitasi::rumusPercepatanGravitasi($M, $r);
echo "Percepatan Gravitasi: " . $g . " m/s^2 <br>";

// Hutung contoh  penggunaan rumus tsunami
$v = 20; // Kecepatan gelombang tsunami
$h = 10; // Kedalaman air
$d = 1000; // Jarak tempuh gelombang tsunami
$y = HitungTsunami::persamaanGerakanTsunami($v, $h, $d);
echo "Persamaan Gerakan Gelombang Tsunami: " . $y . " meter\n <br>";

$g = 9.8; // Percepatan gravitasi
$v = HitungTsunami::rumusKecepatanTsunami($g, $h);
echo "Kecepatan Gelombang Tsunami: " . $v . " meter/detik\n <br>";

$T = HitungTsunami::rumusPeriodeTsunami($g, $h);
echo "Periode Gelombang Tsunami: " . $T . " detik\n <br>";

$p = 1000; // Massa jenis air
$E = HitungTsunami::persamaanEnergiPotensialTsunami($p, $g, $h);
echo "Energi Potensial Gelombang Tsunami: " . $E . " Joule\n <br>";

$m = 8.5; // Magnitudo gempa bumi
$d = 100; // Jarak episenter
$h = HitungTsunami::rumusSkalaTsunami($m, $d);
echo "Skala Tsunami: " . $h . " meter\n <br>";

$luasPenampang = 10; // Misalnya, dalam satuan meter persegi
$kecepatanAliran = 5; // Misalnya, dalam satuan meter per detik

// Memanggil fungsi hitungDebitAir
$debit = HitungDebitAir::hitungDebitAir($luasPenampang, $kecepatanAliran);
echo "Debit Air: " . $debit . " m³/s <br>";

// Memanggil fungsi hitungHukumKontinuitas
$luasPenampang1 = 8; // Misalnya, dalam satuan meter persegi
$kecepatanAliran1 = 10; // Misalnya, dalam satuan meter per detik
$luasPenampang2 = 4; // Misalnya, dalam satuan meter persegi

$kecepatanAliran2 = HitungDebitAir::hitungHukumKontinuitas($luasPenampang1, $kecepatanAliran1, $luasPenampang2);
echo "Kecepatan Aliran 2: " . $kecepatanAliran2 . " m/s <br>";

// Memanggil fungsi hitungPersamaanTorricelli
$tinggiJatuh = 9.81; // Misalnya, dalam satuan meter

$kecepatanAliran = HitungDebitAir::hitungPersamaanTorricelli($tinggiJatuh);
echo "Kecepatan Aliran: " . $kecepatanAliran . " m/s <br>";

// Memanggil fungsi hitungHukumDarcyWeisbach
$koefisienGesekan = 0.02; // Misalnya, koefisien gesekan dalam pipa
$panjangPipa = 100; // Misalnya, dalam satuan meter
$diameterPipa = 0.5; // Misalnya, dalam satuan meter

$kehilanganTekanan = HitungDebitAir::hitungHukumDarcyWeisbach($koefisienGesekan, $panjangPipa, $diameterPipa, $kecepatanAliran);
echo "Kehilangan Tekanan: " . $kehilanganTekanan . " m <br>";

// Memanggil fungsi hitungHukumManning
$koefisienManning = 0.035; // Misalnya, koefisien Manning
$jariJariHidrolik = 1.5; // Misalnya, dalam satuan meter
$kemiringan = 0.02; // Misalnya, dalam satuan meter/meter

$kecepatanAliran = HitungDebitAir::hitungHukumManning($koefisienManning, $jariJariHidrolik, $kemiringan);
echo "Kecepatan Aliran: " . $kecepatanAliran . " m/s <br>";

// Memanggil fungsi hitungPersamaanChezy
$koefisienChezy = 60; // Misalnya, koefisien Chezy

$kecepatanAliran = HitungDebitAir::hitungPersamaanChezy($koefisienChezy, $jariJariHidrolik, $kemiringan);
echo "Kecepatan Aliran: " . $kecepatanAliran . " m/s <br>";

// Memanggil fungsi hitungPersamaanManningStrickler
$koefisienStrickler = 65; // Misalnya, koefisien Strickler

$kecepatanAliran = HitungDebitAir::hitungPersamaanManningStrickler($koefisienStrickler, $jariJariHidrolik, $kemiringan);
echo "Kecepatan Aliran: " . $kecepatanAliran . " m/s <br>";

// Memanggil fungsi-fungsi dan menampilkan hasil hitungannya
$tekanan = 2; // Misalnya, tekanan dalam Persamaan Gas Ideal
$volume = 5; // Misalnya, volume dalam Persamaan Gas Ideal
$suhu = 300; // Misalnya, suhu dalam Persamaan Gas Ideal
$hasilGasIdeal = HitungCuaca::hitungPersamaanGasIdeal($tekanan, $volume, $suhu);
echo "Hasil Persamaan Gas Ideal: " . $hasilGasIdeal . "<br>";

$tekananUap = 100; // Misalnya, tekanan uap dalam Persamaan Clausius-Clapeyron
$suhu = 373; // Misalnya, suhu dalam Persamaan Clausius-Clapeyron
$hasilClausiusClapeyron = HitungCuaca::hitungPersamaanClausiusClapeyron($tekananUap, $suhu);
echo "Hasil Persamaan Clausius-Clapeyron: " . $hasilClausiusClapeyron . "<br>";

$tekananAwal = 5; // Misalnya, tekanan awal dalam Persamaan Adiabatik
$volumeAwal = 10; // Misalnya, volume awal dalam Persamaan Adiabatik
$tekananAkhir = 2; // Misalnya, tekanan akhir dalam Persamaan Adiabatik
$volumeAkhir = 8; // Misalnya, volume akhir dalam Persamaan Adiabatik
$hasilAdiabatik = HitungCuaca::hitungPersamaanAdiabatik($tekananAwal, $volumeAwal, $tekananAkhir, $volumeAkhir);
echo "Hasil Persamaan Adiabatik: " . $hasilAdiabatik . "<br>";

$intensitasRadiasi = 10; // Misalnya, intensitas radiasi dalam Persamaan Termal Radiasi
$luasPermukaan = 3; // Misalnya, luas permukaan dalam Persamaan Termal Radiasi
$emisivitas = 0.8; // Misalnya, emisivitas dalam Persamaan Termal Radiasi
$hasilTermalRadiasi = HitungCuaca::hitungPersamaanTermalRadiasi($intensitasRadiasi, $luasPermukaan, $emisivitas);
echo "Hasil Persamaan Termal Radiasi: " . $hasilTermalRadiasi . "<br>";

$sudutDatang = 30; // Misalnya, sudut datang dalam Persamaan Pemantulan Cahaya
$sudutPantul = 0; // Variabel untuk menyimpan hasil persamaan pemantulan cahaya
$hasilPemantulanCahaya = HitungCuaca::hitungPersamaanPemantulanCahaya($sudutDatang, $sudutPantul);
echo "Hasil Persamaan Pemantulan Cahaya: " . $hasilPemantulanCahaya . "<br>";

$tekanan = 3; // Misalnya, tekanan dalam Persamaan Aliran Fluida
$kecepatan = 2; // Misalnya, kecepatan dalam Persamaan Aliran Fluida
$tinggi = 5; // Misalnya, tinggi dalam Persamaan Aliran Fluida
$hasilAliranFluida = HitungCuaca::hitungPersamaanAliranFluida($tekanan, $kecepatan, $tinggi);
echo "Hasil Persamaan Aliran Fluida: " . $hasilAliranFluida . "<br>";

$kecepatanPenguapan = 2; // Misalnya, kecepatan penguapan dalam Persamaan Laju Evapotranspirasi
$kecepatanTranspirasi = 3; // Misalnya, kecepatan transpirasi dalam Persamaan Laju Evapotranspirasi
$hasilLajuEvapotranspirasi = HitungCuaca::hitungPersamaanLajuEvapotranspirasi($kecepatanPenguapan, $kecepatanTranspirasi);
echo "Hasil Persamaan Laju Evapotranspirasi: " . $hasilLajuEvapotranspirasi . "<br>";

$suhu = 25; // Misalnya, suhu dalam Persamaan Termodinamika Atmosfer
$tekanan = 100; // Misalnya, tekanan dalam Persamaan Termodinamika Atmosfer
$kelembaban = 80; // Misalnya, kelembaban dalam Persamaan Termodinamika Atmosfer
$hasilTermodinamikaAtmosfer = HitungCuaca::hitungPersamaanTermodinamikaAtmosfer($suhu, $tekanan, $kelembaban);
echo "Hasil Persamaan Termodinamika Atmosfer: " . $hasilTermodinamikaAtmosfer . "<br>";

//penggunaan
$kecepatanCahayaDalamMedium = HitungKecepatanCahaya::hitungKecepatanCahayaDalamMedium(299792458, 1.5);
echo "Kecepatan Cahaya dalam Medium: " . $kecepatanCahayaDalamMedium . " m/s <br>";

$waktuTempuhCahaya = HitungKecepatanCahaya::hitungWaktuTempuhCahaya(300000000);
echo "Waktu Tempuh Cahaya: " . $waktuTempuhCahaya . " detik <br>";

$energiFoton = HitungKecepatanCahaya::hitungEnergiFoton(6.63 * pow(10, 14));
echo "Energi Foton: " . $energiFoton . " Joule <br>";

$panjangGelombangCahaya = HitungKecepatanCahaya::hitungPanjangGelombangCahaya(500000000);
echo "Panjang Gelombang Cahaya: " . $panjangGelombangCahaya . " meter <br>";

$frekuensiTeramati = HitungKecepatanCahaya::hitungEfekDopplerCahaya(500000000, 100000000, 50000000);
echo "Frekuensi Teramati: " . $frekuensiTeramati . " Hz <br>";

$amplitudoInterferensi = HitungKecepatanCahaya::hitungInterferensiCahaya(0.5);
echo "Amplitudo Interferensi: " . $amplitudoInterferensi . "<br>";

$amplitudoTerpolarisasi = HitungKecepatanCahaya::hitungPolaritasCahayaTerpolarisasi(45, 0.8);
echo "Amplitudo Terpolarisasi: " . $amplitudoTerpolarisasi . "<br>";

$sudutBias = HitungKecepatanCahaya::hitungHukumSnellius(299792458, 225407863, 45);
echo "Sudut Bias: " . $sudutBias . " radian <br>";

$energiKinetikElektron = HitungKecepatanCahaya::hitungEfekFotoelektrik(4.14 * pow(10, -19), 2.07 * pow(10, -19));
echo "Energi Kinetik Elektron: " . $energiKinetikElektron . " Joule <br>";

//penggunaan class Kimia dan pemanggilan fungsi-fungsi
$massaReaktan = 10;
$massaProduk = 15;
$hasilStoikiometri = Kimia::rumusStoikiometri($massaReaktan, $massaProduk);
echo "Hasil Stoikiometri: " . $hasilStoikiometri . "<br>";

$massaZat = 20;
$massaTotal = 100;
$hasilKonsentrasi = Kimia::rumusKonsentrasi($massaZat, $massaTotal);
echo "Hasil Konsentrasi: " . $hasilKonsentrasi . "<br>";

$konsentrasiReaktan1 = 5;
$konsentrasiReaktan2 = 3;
$x = 2;
$y = 1;
$hasilLajuReaksi = Kimia::rumusLajuReaksi($konsentrasiReaktan1, $konsentrasiReaktan2, $x, $y);
echo "Hasil Laju Reaksi: " . $hasilLajuReaksi . "<br>";

$perubahanEntalpi1 = 50;
$perubahanEntalpi2 = 30;
$hasilTermokimia = Kimia::rumusTermokimia($perubahanEntalpi1, $perubahanEntalpi2);
echo "Hasil Termokimia: " . $hasilTermokimia . "<br>";

$konsentrasiProduk = 10;
$konsentrasiReaktan = 5;
$hasilEquilibriumKimia = Kimia::rumusEquilibriumKimia($konsentrasiProduk, $konsentrasiReaktan);
echo "Hasil Equilibrium Kimia: " . $hasilEquilibriumKimia . "<br>";

$konsentrasiHidrogen = 1e-5;
$hasilPH = Kimia::rumusPH($konsentrasiHidrogen);
echo "Hasil pH: " . $hasilPH . "<br>";

$tekanan = 2;
$volume = 5;
$jumlahMol = 10;
$konstantaGas = 8.314;
$suhu = 300;
$hasilTermodinamika = Kimia::rumusTermodinamika($tekanan, $volume, $jumlahMol, $konstantaGas, $suhu);
echo "Hasil Termodinamika: " . $hasilTermodinamika . "<br>";

$jumlahMuatan = 50;
$massaZatTerlarut = 0.1;
$hasilElektrokimia = Kimia::rumusElektrokimia($jumlahMuatan, $massaZatTerlarut);
echo "Hasil Elektrokimia: " . $hasilElektrokimia . "<br>";

// Contoh pemanggilan dan tampilan hasil
$massaBom = 10; // Misalnya, massa bom nuklir dalam kg
$energiNuklir = HitungDayaLedakNuklir::rumusEnergiNuklir($massaBom);
echo "Energi Nuklir: " . $energiNuklir . " Joule<br>";

$energiFisi = 100; // Misalnya, energi yang dihasilkan oleh reaksi fisi dalam Joule
$energiBahanBakar = 200; // Misalnya, energi yang diserap oleh bahan bakar dalam Joule
$efisiensiFisi = HitungDayaLedakNuklir::rumusEfisiensiFisi($energiFisi, $energiBahanBakar);
echo "Efisiensi Fisi: " . $efisiensiFisi . "%<br>";

$jumlahAtomAwal = 1000; // Misalnya, jumlah atom awal
$konstantaPeluruhan = 0.05; // Misalnya, konstanta peluruhan
$waktu = 10; // Misalnya, waktu dalam detik
$jumlahAtomTersisa = HitungDayaLedakNuklir::rumusLajuPeluruhanRadioaktif($jumlahAtomAwal, $konstantaPeluruhan, $waktu);
echo "Jumlah Atom Tersisa: " . $jumlahAtomTersisa . "<br>";

$sudutDatang = 45; // Misalnya, sudut datang dalam derajat
$sudutPantul = HitungDayaLedakNuklir::rumusPemantulanGelombang($sudutDatang);
echo "Sudut Pantul: " . $sudutPantul . " derajat<br>";

//penggunaan hitung warisan:
$totalHarta = 100000000; // Total harta warisan
$jumlahAhliWaris = 4; // Jumlah ahli waris
$warisanPerAhli = CalculatorHitungWarisanIslami::hitungWarisan($totalHarta, $jumlahAhliWaris);
echo "Warisan per Ahli Waris: Rp" . number_format($warisanPerAhli, 2);

$jumlahEmas = 100; // Misalnya, jumlah emas dalam gram
$jumlahPerak = 500; // Misalnya, jumlah perak dalam gram
$hasilPanen = 1000; // Misalnya, hasil panen dalam kg

$zakatEmas = CalculatorZakat::hitungZakatEmas($jumlahEmas);
$zakatPerak = CalculatorZakat::hitungZakatPerak($jumlahPerak);
$zakatPertanian = CalculatorZakat::hitungZakatPertanian($hasilPanen);

echo "Zakat Emas: " . $zakatEmas . " gram <br>";
echo "Zakat Perak: " . $zakatPerak . " gram <br>";
echo "Zakat Pertanian: " . $zakatPertanian . " kg <br>";

$tanggal = "2023-05-18"; // Misalnya, tanggal yang diinginkan
$lokasi = "Mekah"; // Misalnya, nama lokasi yang diinginkan

$waktuHisab = CalculatorHisabFalak::hitungWaktuHisab($tanggal, $lokasi);
$waktuFalak = CalculatorHisabFalak::hitungWaktuFalak($tanggal, $lokasi);

echo "Waktu Hisab:<br>";
echo "Hijriyah: " . $waktuHisab['Hijriyah'] . "<br>";
echo "Ummul Qura: " . $waktuHisab['Ummul Qura'] . "<br>";

echo "<br>Waktu Falak:<br>";
echo "Matahari: " . $waktuFalak['Matahari'] . "<br>";
echo "Hilal: " . $waktuFalak['Hilal'] . "<br>";
