<?php
include '../dbconnect.php';


$month = isset($_GET['month']) ? $_GET['month'] : date('m');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

$barangMasukData = [];

$result = mysqli_query($conn, "SELECT sbrg_masuk.tgl, sbrg_masuk.jumlah, sstock_brg.nama FROM sbrg_masuk INNER JOIN sstock_brg ON sbrg_masuk.idx = sstock_brg.idx");
while ($row = mysqli_fetch_assoc($result)) {
    $barangMasukData[] = $row;
}

header('Content-Type: application/json');
echo json_encode($barangMasukData);
?>
