<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'web_artikel');

function datetime()
{
    date_default_timezone_set('Asia/Jakarta');
    $hari = date('D');
    $nama_hari = [
        'Sun' => 'Minggu',
        'Mon' => 'Senin',
        'Tue' => 'Selasa',
        'Wed' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Sat' => 'Sabtu'
    ];

    $bulan = date('m');
    $nama_bulan = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'Aprul',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'Novembe',
        '12' => 'Desember',
    ];

    return $nama_hari[$hari] . ', ' . date('d ') . $nama_bulan[$bulan] . date(' Y, H:i:s') . ' WIB';
}


function findAll($table)
{
    $conn = $GLOBALS['conn'];
    return mysqli_query($conn, "SELECT * FROM $table");
}

function find($table, $key, $value)
{
    $conn = $GLOBALS['conn'];
    return mysqli_query($conn, "SELECT * FROM $table WHERE $key = $value")->fetch_object();
}

function isLogin()
{
    if (!isset($_SESSION['login'])) {
        header("Location: logout.php");
        exit;
    }
}

function user()
{
    global $conn;
    $id = $_SESSION['login']->id;
    return mysqli_query($conn, "SELECT * FROM users WHERE id = $id")->fetch_object();
}
