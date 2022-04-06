<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah materai</title>
</head>
<body>
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">

        <form action="<?=base_url('materai/upload_foto') ?>" method="post" enctype="multipart/form-data">
         
        </div>
        <div class="form-group">
            <label >id</label>
            <input type="text" class="form-control" id="id" name="id"required="">
        </div>
        <div class="form-group">
            <label >nilai</label>
            <input type="text" class="form-control" id="nilai" name="nilai"required="">
        </div>

        <div class="form-group">
            <label >harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required="" >
        </div>
        <div class="form-group">
            <label >stok</label>
            <input type="text" class="form-control" id="stok" name="stok" required="" >
        </div>
        <div class="form-group">
            <label >foto</label>
        <input type="file" name="foto" id="foto" accept="image/jpg,image/jpeg,image/png" size="20" required="" />
        </div>
        
        <button type="submit" class="fab fa-telegram-plane btn btn-info  float-right">simpan</button>
        </form>
                  </div>
</div>
               </div>
            </div>
        </div>
    </div>
 </div>
</body>
</html>