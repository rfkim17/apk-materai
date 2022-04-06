<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit pegawai</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4>ubah data pegawai</h4>
                            <br>
                            <?php
                                foreach($editpegawai as $ep):
                                    $id = $ep->id;
                                endforeach;
                            ?>

        <form action="<?=base_url('Pegawai/simpan_edit_pegawai') ?>" method="post">
        <input type="hidden" name="id" value="<?=$id ?>">
        <div class="form-group" >
            <label>username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?=$ep->username ?>">
         
        </div>
        <div class="form-group" >
            <label>nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?=$ep->nama ?>">
         
        </div>
        <div class="form-group">
            <label >no hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp"value="<?=$ep->no_hp ?>">
        </div>
        <div class="form-group">
            <label >password</label>
            <input type="text" class="form-control" id="password" name="password"value="<?=$ep->password ?>" >
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