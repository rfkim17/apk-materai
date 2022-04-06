</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit materai</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4>ubah data materai</h4>
                            <br>
                            <?php
                                foreach($editmaterai as $em):
                                    $id = $em->id;
                                endforeach;
                            ?>

        <form action="<?=base_url('materai/simpan_edit_materai') ?>" method="post">
        <input type="hidden" name="id" value="<?=$id ?>">
        <div class="form-group" >
            <label>nilai</label>
            <input type="text" class="form-control" id="nilai" name="nilai" value="<?=$em->nilai ?>">
         
        </div>
        <div class="form-group" >
            <label>harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?=$em->harga ?>">
         
        </div>
        <div class="form-group">
            <label >stok</label>
            <input type="text" class="form-control" id="stok" name="stok"value="<?=$em->stok ?>">
        </div>
        <div class="form-group">
            <label >foto</label>
            <input type="text" class="form-control" id="foto" name="foto"value="<?=$em->foto ?>" >
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