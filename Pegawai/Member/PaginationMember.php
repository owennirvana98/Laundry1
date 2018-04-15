<?php
require_once '../../Database/Connection.php';
$page = $_GET['page'];

if ($page < 1) $page = 1;
$numberOfPages = 10;
$resultsPerPage = $_GET['data'];
$startResults = ($page - 1) * $resultsPerPage;
$sql = "SELECT member.id_member AS id,member.nama_member AS nama_member, member.nomer_telepon AS nomer_telepon, member.alamat_member AS alamat_member, kabupaten.nama_kabupaten as nama_kabupaten,
 member.create_at AS create_at, member.tgl_lahir AS tgl_lahir, status_member FROM member INNER JOIN kabupaten ON kabupaten.id_kabupaten = member.id_kabupaten";
$sql1 = "SELECT member.id_member AS id,member.nama_member AS nama_member, member.nomer_telepon AS nomer_telepon, member.alamat_member AS alamat_member, kabupaten.nama_kabupaten as nama_kabupaten,
 member.create_at AS create_at, member.tgl_lahir AS tgl_lahir, status_member FROM member INNER JOIN kabupaten ON kabupaten.id_kabupaten = member.id_kabupaten LIMIT $startResults,$resultsPerPage";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

$paginationMember = mysqli_num_rows($result);
$totalPages = ceil($paginationMember / $resultsPerPage);

$halfPages = floor($numberOfPages / 2);
$range = array('start' => 1, 'end' => $totalPages);
$isEven = ($numberOfPages % 2 == 0);
$atRangeEnd = $totalPages - $halfPages;

if ($isEven) $atRangeEnd++;

if ($totalPages > $numberOfPages) {
    if ($page <= $halfPages)
        $range['end'] = $numberOfPages;
    elseif ($page >= $atRangeEnd)
        $range['start'] = $totalPages - $numberOfPages + 1;
    else {
        $range['start'] = $page - $halfPages;
        $range['end'] = $page + $halfPages;
        if ($isEven) $range['end']--;
    }
}
?>