<?php
include '../models/proses.php';

$cek = new Pengecekan();

//memanggil fungsi cekKirim.
// fungsi ini memeriksa apakah
//data dari add.php sudah di submit/kirimkan
$cek->cekKiriman();

//memanggil fungsi cekEdit().
//fungsi ini memeriksa apakah
//data dari edit.php sudah di submit_edit
$cek->cekEdit();

//memanggil fungsi cekHapus().
$cek->cekHapus();
