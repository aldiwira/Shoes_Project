<div class="centering">
    <div class="font-weight-bold mt-3">
        <h2>Edit <?= $barang['nama_barang'] ?></h2>
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
                <input type="text" class="form-control" value="<?= $barang['nama_barang'] ?>" id="nama_barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="jenis_barang">Jenis sepatu</label>
                <select name="jenis_barang" id="jenis_barang" class="form-control">
                    <?php foreach ($jenis_sepatu as $key):
                        if ($key == $barang['jenis_barang']) {
                            ?>
                            <option value="<?=$key ?>" selected="<?=$key ?>"><?=$key ?></option>
                            <?php
                        } else {
                            ?>
                            <option value="<?=$key ?>"><?=$key ?></option>
                            <?php
                        }
                        ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="text" class="form-control" value="<?= $barang['harga'] ?>" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="text" class="form-control" value="<?= $barang['stok'] ?>" id="stok" name="stok">
            </div>
            <button type="submit" name="submit" class="btn btn-primary" float="none">Submit</button>
        </form>
    </div>
</div>