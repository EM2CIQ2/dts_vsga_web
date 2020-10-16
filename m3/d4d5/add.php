<?php include('template/header.php') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-lg p-3 bg-success rounded" id="form-register">
            <h3>📄 Form Pendaftaran Siswa</h3>            
            <form action="addPr.php" method="POST" onsubmit="return validate()">
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama lengkap 🕺">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="address" id="address" rows="2" placeholder="Masukkan alamat tempat tinggal anda 🏠"></textarea>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki - Laki"> Laki - Laki 🚹
                        <input class="form-check-input ml-3" type="radio" name="gender" id="gender" value="Perempuan"> Perempuan 🚺
                    </label>
                    <button class="btn">
                            <span class="badge badge-danger">Gender not editable!</span>
                    </button>
                </div>
                <div class="form-group mt-2">
                  <label for="">Agama</label>
                  <select class="form-control" name="religion" id="religion">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Khatolik">Katholik</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="school" id="school" class="form-control" placeholder="Masukkan nama Sekolah asal">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-danger btn-block shadow-md">🔄 Reset</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" name="add" class="btn btn-primary btn-block shadow-md">🤜 Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('template/footer.php') ?>