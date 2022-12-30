<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php if(isset($validation)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $validation->listErrors() ?>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('post/create') ?>" method="POST">
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan Title">
                        </div>
                        <div class="form-group">
                            <label>KONTEN</label>
                            <textarea class="form-control" name="content" rows="4" placeholder="Masukkan Konten"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra-js') ?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<?= $this->endSection() ?>