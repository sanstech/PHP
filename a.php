<?php

$nama = array(
"Abdul Hafis", "Ahmad Latief","Andika", "Ari Mudik", "Arief",
"Arya","Bismi","Burhanul","Dony","Fauzan",
"Hadi Pranata","Ikhsan","Ihsan","Tama","Arie Alridho",
"Yusuf","Wira","Yasir","Abdurrahman","Prayudha Trisuandar",
"Wahyuda","Alvin Ginda","Mulkan","Sumardi");

$judul = array("Manusia, Agama dan Islam","Konsep Ketuhanan Dalam Islam",
"Hakekat Manusia Dalam Islam","Etika, Moral, dan Akhlak",
"Hukum, Hak Asasi Manusia, dan Demokrasi dalam Islam", "IPTEK dan Seni Dalam Islam",
"Kerukunan Antar Umat Beragama", "Masyarakat Madani dan Kerukunan Ummat",
"Kebudayaan dalam Islam","Sistem Ekonomi Dalam Islam",
"Sistem Politik dalam Islam","Doa Harian dan Sholat");

foreach($nama as $namas)
{
echo "\nNama : ".$namas;
}

echo "\n\nAnggota Kelompok : \n";

$randomjudul = array_rand($judul);
$randomnama = array_rand($nama, 2);
 
echo $nama[$randomnama[0]];
echo "\n";

echo $nama[$randomnama[1]];
echo "\n\nDengan Judul : ".$judul[$randomjudul];

?>
