<?php
include 'db.php';

//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query  = $db->query("SELECT * FROM buku WHERE judul_buku LIKE '%$searchTerm%' LIMIT 10");
$result = $query->fetch_all(MYSQLI_ASSOC);

// Format bentuk data untuk autocomplete.
foreach ($result as $data) {
    $arr_result[] = array(
        'label' => $data['buku_id'] . ' | ' . $data['judul_buku'],
        'description'    => $data['buku_id'] . '|' . $data['judul_buku'],
        'id'    => $data['buku_id'],
    );
}

if (!empty($arr_result)) {
    // Encode ke format JSON.
    echo json_encode($arr_result);
}
