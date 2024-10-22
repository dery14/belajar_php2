<?php
require 'connection.php';
//var_dump$data_alamat = 
$data_alamat = myquery("SELECT * FORM tb_person");

if(isset($_POST['submit_insert_warga]'])){
    $nama= $_POST['text_nama'];
    $ktp= $_POST['text_ktp'];
    $alamat= $_POST['text_alamat'];
    $tanggal= $_POST['text_tanggal'];

    // memformat tanggal
    $tanggal_baru = new DateTime($tanggal);
    $format_tanggal = $tanggal_baru->format('Y.m.d');

    $query_insert = "INSERT INTO tb_person
    VALUE (null,'$nama, $ktp,$alamat, $tanggal')";
    $res = mysqli_query($connection,$query_insert);

    if($res){
        header("Location: index.php");
        exit();
    }else{
        $err ="Data gagal di input";

    }
    
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

            <div class="card">
                <div class="card-body">
                <form action=""

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type=" text" name="txt_nama" class="form-control" placeholder="input nama warga " autocomplete="off"/>
                    </div>

                    <div class="mb-3">
                        <label>KTP</label>
                        <input type=" text" name="txt_ktp" class="form-control" placeholder="input nomor ktp warga  " autocomplete="off"/>
                    </div>

                    <div class="mb-3">
                    <label>Pilih Alamat</label>
                    <select class="form-select" name="Select Alamat">
                        <?php foreach($data_alamat as $option):?>
                        <option value="<?= option['id']?>">
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