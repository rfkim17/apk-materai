<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit transaksi</title>
</head>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4>ubah data transaksi</h4>
                            <br>
                            <?php
                                foreach($edittransaksi as $et):
                                    $id = $et->id;
                                endforeach;
                            ?>

        <form action="<?=base_url('transaksi/simpan_edit_transaksi') ?>" method="post">
        <input type="hidden" name="id" value="<?=$id ?>">
        <div class="form-group" >
            <label>tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?=$et->tanggal ?>">
         
        </div>
        <div class="form-group">
            <label >id</label>
            <input type="number" class="form-control" id="id" name="id"value="<?=$et->id ?>">
        </div>
        <div class="form-group">
            <label >nama</label>
            <input type="text" class="form-control" id="nama" name="nama"value="<?=$et->nama ?>" >
        </div>
        <div class="form-group">
            <label >pegawai</label>
            <input type="text" class="form-control" id="pegawai" name="pegawai"value="<?=$et->pegawai ?>" >
        </div>
        <div class="form-group">
            <label >jenis materai</label>
            <input type="text" class="form-control" id="jenis_materai" name="jenis_materai"value="<?=$et->jenis_materai ?>" >
        </div>
        <div class="form-group">
            <label >banyaknya</label>
            <input type="text" class="form-control" id="banyaknya" name="banyaknya"value="<?=$et->banyaknya ?>" >
        </div>
        <div class="form-group">
            <label >jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah"value="<?=$et->jumlah ?>" >
        </div>
        <div class="form-group">
            <label >foto</label>
            <input type="text" class="form-control" id="foto" name="foto"value="<?=$et->foto ?>" >
        </div>
        
        <button type="submit"  class="fab fa-telegram-plane btn btn-info float-right">simpan</button>
        </form>
                  </div>
               </div>
            </div>
        </div>
    </div>
 </div>

</body>
</html>