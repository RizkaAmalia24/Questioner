<?php

include('koneksi.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB TRACER STMIK</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .form-group {
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
        <a class="navbar-brand" href="#">Web Tracer STMIK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
    </nav>
    <div class="container">
        <div class="wrapper p-4">
            <h3>Form Tracer Study</h3>
            <form method="post" enctype="multipart/form-data" action="form.php">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="number" name="umur" id="" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1"
                            value="laki-laki">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2"
                            value="perempuan">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Status Nikah</label>
                    <select name="status_nikah" id="" class="form-select">
                        <option value="belum_menikah">Belum Menikah</option>
                        <option value="menikah">Menikah</option>
                        <option value="janda/duda">Janda/Duda</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Pendidikan Lanjutan</label>
                    <input type="text" id="" name="pendidikan" class="form-control">
                </div>


                <div class="form-group">
                    <label for="">Tahun Angkatan</label>
                    <input type="number" name="tahun_angkatan" id="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="">Tanggal Lulus</label>
                    <input type="date" name="tanggal_lulus" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Apakah Anda sudah bekerja sebelum lulus?</label>
                    <div class="form-check">
                        <input name="kerja_sebelum_lulus[]" class="form-check-input" type="checkbox"
                            value="Ya, di lembaga formal dan sesuai dengan bidang yang ditekuni" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ya, di lembaga formal dan sesuai dengan bidang yang ditekuni
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="kerja_sebelum_lulus[]" class="form-check-input" type="checkbox"
                            value="Ya, di lembaga informal dan sesuai dengan bidang yang ditekuni"
                            id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Ya, di lembaga informal dan sesuai dengan bidang yang ditekuni
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="kerja_sebelum_lulus[]" class="form-check-input" type="checkbox"
                            value="Ya, di lembaga formal dan tidak sesuai dengan bidang yang ditekuni"
                            id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Ya, di lembaga formal dan tidak sesuai dengan bidang yang ditekuni
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="kerja_sebelum_lulus[]" class="form-check-input" type="checkbox"
                            value="Ya, di lembaga informal dan tidak sesuai dengan bidang yang ditekuni"
                            id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Ya, di lembaga informal dan tidak sesuai dengan bidang yang ditekuni
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="kerja_sebelum_lulus[]" class="form-check-input" type="checkbox" value="Tidak"
                            id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Tidak
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Pengalaman Akademik</label>
                    <div class="form-check">
                        <input name="pengalaman_akademik[]" class="form-check-input" type="checkbox"
                            value="Asisten Kuliah" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Asisten Kuliah
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pengalaman_akademik[]" class="form-check-input" type="checkbox"
                            value="Asisten Praktikum" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Asisten Praktikum
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pengalaman_akademik[]" class="form-check-input" type="checkbox"
                            value="Membantu Penelitian Dosen" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Membantu Penelitian Dosen
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pengalaman_akademik[]" class="form-check-input" type="checkbox"
                            value="Penelitian Mandiri" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Penelitian Mandiri
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pengalaman_akademik[]" class="form-check-input" type="checkbox" value="Tidak"
                            id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Tidak
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Kapan anda mulai mencari pekerjaan?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mulai_cari_kerja" id="flexRadioDefault1"
                            value="Sebelum Lulus">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sebelum Lulus
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mulai_cari_kerja" id="flexRadioDefault2"
                            value="Setelah Lulus">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Setelah Lulus
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Jenis Pekerjaan Saat ini</label>
                    <select name="jenis_pekerjaan_saat_ini" id="" class="form-select">
                        <option value="Sesuai Bidang">Sesuai Bidang</option>
                        <option value="Tidak Sesuai Bidang">Tidak Sesuai Bidang</option>
                        <option value="PNS">PNS</option>
                        <option value="Wirausahawan">Wirausahawan</option>
                        <option value="Kontraktor">Kontraktor</option>
                        <option value="Konsultan">Konsultan</option>
                        <option value="Pekerjaan Swasta">Pekerjaan Swasta</option>
                        <option value="Politik">Politik</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Foto Saat Ini</label>
                    <input type="file" name="foto" id="" class="form-control">
                </div>



                <div class="form-group">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>