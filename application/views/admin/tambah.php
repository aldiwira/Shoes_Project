<div class="centering">
    <div class="font-weight-bold mt-3">
        <h2>Tambah user</h2>
    </div>
    <div class="card-body">
    <?php if (validation_errors()): ?>
        <div class="alert alert-warning" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="jenis_barang">Jenis Sepatu</label>
                <select name="jenis_barang" id="jenis_barang" class="form-control">
                    <option value="#" >Pilih jenis sepatu</option>
                    <?php foreach ($jenis_sepatu as $key) {
                        ?>
                            <option value="<?=$key ?>" ><?=$key ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="text" class="form-control" id="stok" name="stok">
            </div>
            <button type="submit" name="submit" class="btn btn-primary" float="none">Submit</button>
        </form>
    </div>
</div>