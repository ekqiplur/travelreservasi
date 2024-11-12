<?php 

if (isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

if ($action == 'dashboard' || $action == '') {
    include 'content/admin/dashboard.php';
} elseif ($action == 'bus') {
    include 'content/admin/bus.php';
} elseif ($action == 'users') {
    include 'content/admin/users.php';
} elseif ($action == 'supir') {
    include 'content/admin/supir.php';
} elseif ($action == 'kursi') {
    include 'content/admin/kursi.php';
} elseif ($action == 'jadwal') {
    include 'content/admin/jadwal.php';
} elseif ($action == 'transaksi') {
    include 'content/admin/transaksi.php';
} elseif ($action == 'konfirmasi') {
    include 'content/admin/konfirmasi.php';
} elseif ($action == 'laporan') {
    include 'content/admin/laporan.php';
} elseif ($action == 'rekening') {
    include 'content/admin/rekening.php';
}

?>