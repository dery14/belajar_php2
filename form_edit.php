<?php
require 'connection.php';
$_GET['action'] = 'edit';
require 'function.php';

$id_person = $_GET['id'];
//var_dump$data_alamat = 
$data_alamat = myquery("SELECT * FORM tb_person WHERE id = $id_person");



if(isset($_POST['submit_update']));
//kondisi  cek return true atau false
    if(update($_POST) > 0 ){
        echo "<script>alert'(Data berhasil diubah');
        domcument.location.href = 'index.php';
        </script>";
    }else{echo "script> alert('Data gagal diubah');
    </script>";
    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="mt-4 mb-3">Form</h3>
                <a href="./index.php" class="d-block mb-4">Back</a>

                <?php if (isset($err)): ?>
                    <p><?=$err; ?></p>
                <?php endif; ?>

            <div class="card">
                <div class="card-body">
                <form action=""
                    <input type="hidden" value="<?= $id_person ?>" name="id_person" ?/>

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type=" text" name="txt_nama" class="form-control" placeholder="input nama warga " autocomplete="off" value="<?= $data_person[0]['name']; ?>/>
                    </div>

                    <div class="mb-3">
                        <label>KTP</label>
                        <input type=" text" name="txt_ktp" class="form-control" placeholder="input nomor ktp warga  " autocomplete="off" value="value="<?= $data_person[0]['card_iden']; ?>/>
                    </div>

                    <div class="mb-3">
                    <label>Pilih Alamat</label>
                    <select class="form-select" name="Select Alamat">
                        <?php foreach($data_alamat as $option):?>
                        <option value="<?= option['id']?>"><?php echo($data_person[0]['alamat'] === $option['id'] ? 'selected': ''); ?>>
                            <?= $option['nomor_rumah']?>
                        </option>
                        <?php endforeach; ?>
                        </select>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="submit_insert_warga">Simpan</button>
                        </div>
                    </div>
                </form>
                </div>

                </div>  

            </div>

            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>