<?php

function getapi($file=''){

    // echo <script></script>
    $url = 'http://127.1.1.1:3030/api';

     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec ($ch);
     $err = curl_error($ch);  //if you need
     curl_close ($ch);
     return $response;
}

function namauser(){
    $user = Auth::user();
    return $user->name;
}

function aksesnya($role){
    if ($role == 1) {
        return 'Admin';
    }
    return 'Pengunjung';
}
function hakakses(){
    $user = Auth::user();
    $akses = "Pengunjung";
    if ($user->role_as==1) { $akses = "Admin"; }
    return $akses;
}
function selectsama($ich, $nii){
    if ($ich == $nii) {
        return 'selected';
    }
}
function namanya($table, $id)
{
    $nid = 'id_' . substr($table, 0, -1);

    if($table == "users"){
        $nid = 'id';
    }
    $comm = DB::table($table)
        ->where($nid, $id) // Getting the Authenticated user id
        ->get()->toArray();
        // 
    switch ($table) {
        case 'jeniss':
            return $comm[0]->nama_jenis;
            break;
        case 'merks':
            return $comm[0]->nama_merk;
            break;
        case 'users':
            return $comm[0]->name;
            break;
    }

}
function isActive($path)
{
    return request()->is($path) ? 'active' : '';
}

function rupiah($angka)
{
    $rupiah = number_format($angka, 0, ',', '.');
    return "Rp " . $rupiah;
}
function bilanganbulat($teks)
{
    $teks = preg_replace("/[^0-9]/", "", $teks);
    return $teks;
}
function tgl_indo($date)
{
    $BulanIndo = array("Januari", "Februari", "Maret",
        "April", "Mei", "Juni",
        "Juli", "Agustus", "September",
        "Oktober", "November", "Desember");
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl = substr($date, 8, 2);
    $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    // $result = '0';
    return ($result);
}

function bulan_indo($date)
{
    $BulanIndo = array("Januari", "Februari", "Maret",
        "April", "Mei", "Juni",
        "Juli", "Agustus", "September",
        "Oktober", "November", "Desember");
    $bulan = $date;
    $result = $BulanIndo[(int) $bulan - 1];
    return ($result);
}

function penyebut($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
    }
    return $temp;
}

function terbilang($nilai)
{
    if ($nilai < 0) {
        $hasil = "minus " . trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }
    return ucfirst($hasil) . " Rupiah";
}