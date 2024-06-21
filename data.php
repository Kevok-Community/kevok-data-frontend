<?php
header('Content-Type: application/json');

// Rastgele katkı verileri oluşturma (365 günlük)
$contributions = array();
for ($i = 0; $i < 365; $i++) {
    $contributions[] = rand(0, 4); // 0'dan 4'e kadar rastgele katkı seviyeleri
}

echo json_encode($contributions);
?>
