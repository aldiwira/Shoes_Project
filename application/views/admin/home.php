<div class="container">
    <?php if ($this->session->flashdata('flash-data')) { ?>
        <div class="alert alert-success mt-3">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?= $this->session->flashdata('flash-data'); ?>
        </div>
    <?php } ?>


    <div class="centering-row">
        <form action="" method="post" class="form-inline my-10 my-lg-2">
            <div class="input-group">
                <input class="form-control mr-sm-2" type="text" placeholder="Cari data user" id="nama" name="key">
            </div>
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <a class="ml-sm-2" href="<?= base_url(); ?>admin/tambah">
            <button class="btn btn-primary">Tambah User</button>
        </a>
    </div>
    <div class="text-center">
        <div class="list">
            <ul>
                <?php foreach ($barang as $brg) {?>
                    <li class="box border" >
                        <h5 class="card-title"><?php echo $brg->nama_barang ?></h5>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $brg->id_barang; ?>" 
                        class="badge badge-danger text-center"
                        onclick="return confirm('Yakin ingin menghapus data ini');">Hapus</a>

                        <a href="<?= base_url(); ?>mahasiswa/edit/<?= $brg->id_barang; ?>" 
                        class="badge badge-success text-center">Edit</a>
                        
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $brg->id_barang; ?>" 
                        class="badge badge-primary text-center">Detail</a>
                    </li>
                <?php }?>
            </ul>
        </div>    
    </div>
    
</div>