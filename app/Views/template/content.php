<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<style>
    .responsive-img {
      max-width: 100%; /* Maksimum lebar gambar adalah 100% dari kontainer */
      height: auto; /* Tinggi gambar akan disesuaikan agar tidak terdistorsi */
      position: relative;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <?php echo $title_card; ?>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php echo  $selamat_datang; ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <img class="responsive-img" src="/assets/dist/img/1.png" alt="Ibrahimy">
    <?php
echo $this->endSection();