<?php
include '../dbconnect.php';

$month = isset($_GET['month']) ? $_GET['month'] : date('m');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

$barangKeluarData = [];

$result = mysqli_query($conn, "SELECT sbrg_keluar.tgl, sbrg_keluar.jumlah, sstock_brg.nama FROM sbrg_keluar INNER JOIN sstock_brg ON sbrg_keluar.idx = sstock_brg.idx WHERE MONTH(sbrg_keluar.tgl) = '$month' AND YEAR(sbrg_keluar.tgl) = '$year'");
while ($row = mysqli_fetch_assoc($result)) {
    $barangKeluarData[] = $row;
}

header('Content-Type: application/json');
echo json_encode($barangKeluarData);
?>
