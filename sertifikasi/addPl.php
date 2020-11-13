<?php include('templates/header.php') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-lg p-3 bg-success rounded" id="form-register">
            <h3>📄 Form Input Pelanggan</h3>
            <form action="add.php" method="POST" onsubmit="return validate()">
                <input type="text" name="command" id="command" value="pl" hidden>
                <div class="form-group">
                    <input type="text" name="nomer" id="nomer" class="form-control" placeholder="Masukkan nomer Pelanggan">
                </div>
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Pelanggan 🕺">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="Masukkan alamat tempat tinggal Pelanggan"></textarea>
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

<?php include('templates/footer.php') ?>