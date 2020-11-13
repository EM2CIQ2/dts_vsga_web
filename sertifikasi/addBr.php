<?php include('templates/header.php') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-lg p-3 bg-success rounded" id="form-register">
            <h3>📄 Form Input Barang</h3>            
            <form action="add.php" method="POST" onsubmit="return validate()">
                <input type="text" name="command" id="command" value="brg" hidden>
                <div class="form-group">
                  <input type="number" name="kode" id="kode" class="form-control" placeholder="Masukkan Kode Barang">
                </div>
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Barang">
                </div>
                <div class="form-group">
                  <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan Harga Barang 💲">
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