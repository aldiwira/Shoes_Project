<div class="centering">
    <div class="">
        Tambah user
    </div>
    <div class="card-body">
    <?php if (validation_errors()): ?>
        <div class="alert alert-warning" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="username">
            </div>
            <div class="form-group">
                <label for="Harga">Harga Barang</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="Stok">Stok Barang</label>
                <input type="text" class="form-control" id="jam" name="jam">
            </div>
            <button type="submit" name="submit" class="btn btn-primary" float="none">Submit</button>
        </form>
    </div>
</div>