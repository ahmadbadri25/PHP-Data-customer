<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Baca data customer yang dikirim dari JavaScript
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);

    // Konversi data ke format JSON
    $dataJson = json_encode($data);

    // Simpan data ke file JSON eksternal
    file_put_contents('data_customer.json', $dataJson);

    // Beri respons sukses ke JavaScript
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success']);
}
?>
