<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah transaksi</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">

        <form action="<?=base_url('transaksi/upload_foto') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group" >
            <label>tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required="">
         
        </div>
        <div class="form-group">
            <label >id</label>
            <input type="text" class="form-control" id="id" name="id"required="">
        </div>
        <div class="form-group">
            <label >nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required="">
        </div>
        <div class="form-group">
            <label >pegawai</label>
            <input type="text" class="form-control" id="pegawai" name="pegawai" required="">
        </div>
        <div class="form-group">
            <label >jenis materai</label>
            <input type="text" class="form-control" id="jenis_materai" name="jenis_materai" required="">
        </div>
        <div class="form-group">
            <label >banyaknya</label>
            <input type="text" class="form-control" id="banyaknya" name="banyaknya" required="" >
        </div>
        <div class="form-group">
            <label >jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" required="" >
        </div>
        <div class="form-group">
            <label >foto</label>
        <input type="file" name="foto" id="foto" accept="image/jpg,image/jpeg,image/png" size="20" required="" />
        </div>
        
        <button type="submit" class="fab fa-telegram-plane btn btn-info float-right">simpan</button>
        </form>
                  </div>
               </div>
            </div>
        </div>
    </div>
 </div>
</body>
</html>