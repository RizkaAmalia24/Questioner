<?php


// membawa file koneksi
include('koneksi.php');

if (empty($_FILES['foto']))
  throw new Exception('Image file is missing');

// format file yang diperbolehkan hanya format gambar
$allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
$image = $_FILES['foto'];

$namaFoto = $image['name'];
$namaSementara = $image['tmp_name'];

// cek apakah file yang diupload merupakan gambar
$imageData = getimagesize($image['tmp_name']);
    if (!$imageData) 
    throw new Exception('Invalid image');
     
$mimeType = $imageData['mime'];
$imageFileType = strtolower(pathinfo($namaFoto,PATHINFO_EXTENSION));

$dir = "images/";

//cek apakah file yang diupload formatnya sesuai dengan format yang diperbolehkan
if (!in_array($mimeType, $allowedMimeTypes)) 
    throw new Exception('Only JPEG, PNG and GIFs are allowed');
    
// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dir.$namaFoto);

// cek jika file sudah terupload
if ($terupload) {

    // tangkap data inputan user
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status_nikah = $_POST['status_nikah'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $tahun_angkatan = $_POST['tahun_angkatan'];
    $tanggal_lulus = $_POST['tanggal_lulus'];
    $kerja_sebelum_lulus = implode(',', $_POST['kerja_sebelum_lulus']);
    $pengalaman_akademik = implode(',', $_POST['pengalaman_akademik']);
    $mulai_cari_kerja = $_POST['mulai_cari_kerja'];
    $jenis_pekerjaan_saat_ini = $_POST['jenis_pekerjaan_saat_ini'];
    $foto = $namaFoto;

    // query untuk insert ke mysql
    $query = "insert into tb_tracer(nama,umur,jenis_kelamin,status_nikah,alamat,pendidikan,tahun_angkatan,tanggal_lulus, kerja_sebelum_lulus, pengalaman_akademik, mulai_cari_kerja, jenis_pekerjaan_saat_ini, foto) values('$nama', '$umur', '$jenis_kelamin', '$status_nikah', '$alamat', '$pendidikan', '$tahun_angkatan', '$tanggal_lulus', '$kerja_sebelum_lulus', '$pengalaman_akademik', '$mulai_cari_kerja', '$jenis_pekerjaan_saat_ini', '$foto' ) ";


    // jalankan query
    $exec = mysqli_query($conn, $query);

    // cek apakah insert berhasil
    if($exec){
        echo "Submit Berhasil";
    }
    

}
// kondisi jika upload foto gagal
else {
    echo "Upload Foto Gagal!";
}


?>