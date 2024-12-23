<?php
function tetapkanCookie($nama, $nilai, $durasi = 3600) {
    $waktuKadaluwarsa = time() + $durasi;
    setcookie($nama, $nilai, $waktuKadaluwarsa, "/");
}

function dapatkanCookie($nama) {
    return isset($_COOKIE[$nama]) ? $_COOKIE[$nama] : null;
}

function hapusCookie($nama) {
    setcookie($nama, "", time() - 3600, "/");
}
?>
