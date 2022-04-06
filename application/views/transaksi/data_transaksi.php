<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>

 </head>
 <body>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- DataTales Example -->
<?php echo $this->session->flashdata('data') ?>
<?php echo $this->session->flashdata('isi') ?>
<?php echo $this->session->flashdata('file') ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-black">Data transaksi
        <a href="<?=base_url('transaksi/tambah_data')?>"class="btn btn-sm
            btn-info float-right">
            <i class="far fa-handshake"></i>
                 Tambah Data 
            </a>
        </h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>tanggal</th>
                        <th>id</th>
                        <th>nama</th>
                        <th>pegawai</th>
                        <th>jenis materai</th>
                        <th>banyaknya</th>
                        <th>jumlah</th>
                        <th>foto</th>
                        <th>aksi</th>

                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    <?php foreach($transaksi as $tr): ?>
                    <tr>
                        <td><?=$tr->tanggal?></td>
                        <td><?=$tr->id?></td>
                        <td><?=$tr->nama?></td>
                        <td><?=$tr->pegawai?></td>
                        <td><?=$tr->jenis_materai?></td>
                        <td><?=$tr->banyaknya?></td>
                        <td><?="RP. ".$tr->jumlah?></td>
                        <td><img src="<?= base_url('foto/').$tr->foto;?>"width="80px"></td>
                        <td> 
                          <a href="<?=base_url("transaksi/hapus_transaksi/".$tr->id)?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          <a href="<?=base_url("transaksi/edit_transaksi/".$tr->id)?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                          <a href="<?=base_url("Transaksi/print_transaksi/".$tr->id)?>" class="btn btn-warning"><i class="fa fa-print"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


</body>
 </html>