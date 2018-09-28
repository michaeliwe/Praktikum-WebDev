<?php

    $namaMatkul = array(
        "Algoritma Pemograman",
        "Matematika Diskrit",
        "Aljabar Linear",
        "Basis Data",
        "Struktur Data",
        "Pemograman Web"
    );

    $namaMatkulEn = array(
        "Programming Algorithm",
        "Discrete Mathematics",
        "Linear Algebra",
        "Database Management",
        "Data Structure",
        "Web Aplication"
    );

    $sks = array(4,3,4,3,3,4);

    $nilaiAkhir = array(90,75,69,61,56,5);

    $warna = array();
    $indeks = array();
    $poin = array();
    $sksPoin = 0;

    for ($i=0; $i < count($namaMatkul); $i++) { 
        if (80 < $nilaiAkhir[$i]) {
            array_push($poin, 4);
            array_push($indeks, "A");
            array_push($warna, "#8CC529");
            $sksPoin += $poin[$i] * $sks[$i];
        }
            
        elseif (70 < $nilaiAkhir[$i] && $nilaiAkhir[$i] <= 80) {
            array_push($poin, 3.5);
            array_push($indeks, "AB");
            array_push($warna, "#8AF932");
            $sksPoin += $poin[$i] * $sks[$i];
        }
        elseif (65 < $nilaiAkhir[$i] && $nilaiAkhir[$i] <= 70) {
            array_push($poin, 3);
            array_push($indeks, "B");
            array_push($warna, "#DBF932");
            $sksPoin += $poin[$i] * $sks[$i];
        }
        elseif (60 < $nilaiAkhir[$i] && $nilaiAkhir[$i] <= 65) {
            array_push($poin, 2.5);
            array_push($indeks, "BC");
            array_push($warna, "#F9E132");
            $sksPoin += $poin[$i] * $sks[$i];
        }
        elseif (50 < $nilaiAkhir[$i] && $nilaiAkhir[$i] <= 60) {
            array_push($poin, 2);
            array_push($indeks, "C");
            array_push($warna, "#F9C332");
            $sksPoin += $poin[$i] * $sks[$i];
        }
        elseif (40 < $nilaiAkhir[$i] && $nilaiAkhir[$i] <= 50) {
            array_push($poin, 1);
            array_push($indeks, "D");
            array_push($warna, "#F99032");
            $sksPoin += $poin[$i] * $sks[$i];
        }
        else {
            array_push($poin, 0);
            array_push($indeks, "E");
            array_push($warna, "#F93232");
            $sksPoin += $poin[$i] * $sks[$i];
        }
    }

    $sksPoin /= array_sum($sks);

    function format($nilai){
        return number_format($nilai, 2, ',', ' ');
    }
?>