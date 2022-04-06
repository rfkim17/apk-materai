<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah pegawai</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">

        <form action="<?=base_url('Pegawai/simpan_pegawai') ?>" method="post">
        <div class="form-group" >
            <label>username</label>
            <input type="text" class="form-control" id="username" name="username">
         
        </div>
        <div class="form-group" >
            <label>nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
         
        </div>
        <div class="form-group">
            <label >no hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp">
        </div>
        <div class="form-group">
            <label >password</label>
            <input type="text" class="form-control" id="password" name="password" >
        </div>
        
        <button type="submit" class="fab fa-telegram-plane btn btn-info  float-right">simpan</button>
        </form>
</div>
                  </div>
            </div>
        </div>
    </div>
 </div>
</body>
</html>