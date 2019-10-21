<div class="container">
    <?php if ($this->session->flashdata('flash-data')) { ?>
        <div class="alert alert-success mt-3">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?= $this->session->flashdata('flash-data'); ?>
        </div>
    <?php } ?>
    <div class="centering-row mt-3">
        <form action="" method="post" class="form-inline my-10 my-lg-2">
            <div class="input-group">
                <input class="form-control mr-sm-2" type="text" placeholder="Cari Barang" id="nama" name="key">
            </div>
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <a class="ml-sm-2" href="<?= base_url(); ?>admin/tambah">
            <button class="btn btn-primary">Tambah Barang</button>
        </a>
    </div>
    <div class="text-center">
        <div class="list">
            <ul>
                <?php foreach ($barang as $brg) {?>
                    <li class="box border" >
                        <h5 class="card-title"><?php echo $brg->nama_barang ?></h5>
                        <a href="<?= base_url(); ?>admin/hapus/<?= $brg->id_barang; ?>" 
                        class="badge badge-danger text-center"
                        onclick="return confirm('Yakin ingin menghapus data ini');">Hapus</a>

                        <a href="<?= base_url(); ?>admin/detail/<?= $brg->id_barang; ?>" 
                        class="badge badge-primary text-center">Detail</a>

                        <a href="<?= base_url(); ?>admin/edit/<?= $brg->id_barang; ?>" 
                        class="badge badge-success text-center">Edit</a>
                    </li>
                <?php }?>
            </ul>
        </div>    
    </div>
    
</div>