<div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Form Mahasiswa</h5>
                <form action="simpan_pdo.php" method="post" enctype="multipart/form-data">
                <div class="position-relative row form-group">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input name="nama" id="nama" placeholder="Nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input name="nim" id="nim" placeholder="NIM" type="text" class="form-control">
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input name="ttl" id="ttl" placeholder="Tempat, Tanggal Lahir" type="text" class="form-control">
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input name="alamat" id="alamat" placeholder="Alamat" type="text" class="form-control">
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <input name="semester" id="semester" placeholder="Semester" type="text" class="form-control">
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <!-- <input name="prodi" id="prodi" placeholder="Prodi" type="text" class="form-control"> -->
                        <select name="prodi" id="prodi" class="form-control">
                            <option value>Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Akuntansi">Akuntansi</option>
                        </select>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="foto" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input name="foto" id="foto" type="file" class="form-control-file">
                        <small class="form-text text-muted">Upload foto sesuai format</small>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>