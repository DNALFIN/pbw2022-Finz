<!DOCTYPE html>
<html>

<head>
    <title>Formulir PPDB Jalur Zonasi Tahun 20222</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2 align="center">Formulir PPDB Jalur Zonasi Tahun 20222</h2>


    <div class="container">
        <form method="post" action="kirim.php">
            <section class="batas">
                <legend><span class="number">1</span> Info Pendaftaran</legend>
            </section>
            <div class="row">
                <div class="col-50">
                    <label for="nisn">NISN</label>
                    <input type="number" id="nisn" name="nisn" placeholder="Masukan NISN Anda">
                </div>
                <div class="col-50">
                    <label for="asl_sklh">Asal Sekolah</label>
                    <input type="text" id="asl_sklh" name="asl_sklh" placeholder="Asal Sekolah Anda">
                </div>

            </div>
            <div class="row">
                <div class="col-50">
                    <label for="th_lulus">Tahun Lulus</label>
                    <select id="th_lulus" name="th_lulus">
                        <option>-Tahun Lulus-</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="col-50">
                    <label>Lampirkan Foto Ijazah</label>
                    <input type="file" id="file_ijazah" name="file_ijazah">
                </div>

            </div>
            <section class="batas" style="margin-top: 30px;">
                <legend><span class="number">2</span>Data Calon Peserta</legend>
            </section>
            <div class="row">
                <div class="col-50">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda">
                </div>
                <div class="col-50">
                    <label for="nik">NIK</label>
                    <input type="number" id="nik" name="nik" placeholder="Nomor Induk Kependudukan">
                </div>

            </div>
            <div class="row">
                <div class="col-50">
                    <div class="col-50">
                        <label for="tmpt_lhr">Tempat Lahir</label>
                        <input type="text" id="tmpt_lhr" name="tmpt_lhr" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-50">
                        <label for="tgl_lhr">Tanggal Lahir</label>
                        <input type="date" id="tgl_lhr" name="tgl_lhr" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="col-50">
                    <label for="umur">Umur</label>
                    <input type="number" id="umur" name="Masukan Umur">
                </div>

            </div>
            <div class="row">
                <div class="col-50">
                    <label>Lampirkan Foto Akta Kelahiran</label>
                    <input type="file" id="file_akta" name="file_akta">
                </div>
                <div class="col-50">
                    <label>Jenis Kelamin</label>
                    <div>
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" style="width: 5%;">
                        <label for="laki-laki">Laki - Laki</label>

                        <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" style="width: 5%;">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukan Alamat">
                </div>
                <div class="col-50">
                    <div class="col-50">
                        <label for="desa">Desa / Kelurahan</label>
                        <input type="text" id="desa" name="desa" placeholder="Masukan Desa / Kelurahan">
                    </div>
                    <div class="col-50">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <div class="col-50">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="text" id="kabupaten" name="kabupaten" placeholder="Masukan Kabupaten">
                    </div>
                    <div class="col-50">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" id="provinsi" name="provinsi" placeholder="Masukan Provinsi">
                    </div>

                </div>
                <div class="col-50">
                    <label for="email">Email Aktif</label>
                    <input type="email" id="email" name="email" placeholder="Email Aktif">
                </div>
            </div>
            <section class="batas" style="margin-top: 30px;">
                <legend><span class="number">3</span>Data Orang Tua</legend>
            </section>
            <div class="row">
                <div class="col-50">
                    <label>Lampirkan Foto Kartu Keluarga</label>
                    <input type="file" id="file_kk" name="file_kk">
                </div>
                <div class="col-50">
                    <label for="no_kk">Nomer Kartu Keluarga</label>
                    <input type="number" id="no_kk" name="no_kk" placeholder="Nomer Kartu Keluarga">
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label for="nama_ayah">Nama Ayah Kandung</label>
                    <input type="text" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah Kandung">
                </div>
                <div class="col-50">
                    <div class="col-50">
                        <label for="agama_ayah">Agama Ayah</label>
                        <select id="agama_ayah" name="agama_ayah">
                            <option>-Agama Ayah-</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="col-50">
                        <label for="kerja_ayah">Pekerjaan Ayah</label>
                        <input type="text" id="kerja_ayah" name="kerja_ayah" placeholder="Pekerjaan Ayah">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label for="nama_ibu">Nama Ibu Kandung</label>
                    <input type="text" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu Kandung">
                </div>
                <div class="col-50">
                    <div class="col-50">
                        <label for="agama_ibu">Agama Ibu</label>
                        <select id="agama_ibu" name="agama_ibu">
                            <option>-Agama Ibu-</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="col-50">
                        <label for="kerja_ibu">Pekerjaan Ibu</label>
                        <input type="text" id="kerja_ibu" name="kerja_ibu" placeholder="Pekerjaan Ibu">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label for="alamat_ortu">Alamat</label>
                    <input type="text" id="alamat_ortu" name="alamat_ortu" placeholder="Alamat">
                </div>
                <div class="col-50">
                    <label for="desa_ortu">Desa / Kelurahan</label>
                    <input type="text" id="desa_ortu" name="desa_ortu" placeholder="Desa">
                </div>
            </div>
            <div class="row">
                <div class="col-33">
                    <label for="kecamatan_ortu">Kecamatan</label>
                    <input type="text" id="kecamatan_ortu" name="kecamatan_ortu" placeholder="Kecamatan">
                </div>
                <div class="col-33">
                    <label for="kabupaten_ortu">Kabupaten</label>
                    <input type="text" id="kabupaten_ortu" name="kabupaten_ortu" placeholder="Kabupaten">
                </div>
                <div class="col-33">
                    <label for="provinsi_ortu">Provinsi</label>
                    <input type="text" id="provinsi_ortu" name="provinsi_ortu" placeholder="Provinsi">
                </div>
            </div>
            <input style="margin-top: 30px; margin-bottom:30px;width: 100%;" type="submit" value="Kirim Data">
        </form>

    </div>
</body>

</html>