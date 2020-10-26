<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


        <?php
        require 'koneksi.php';
        $kode = $_GET['kode'];
        $query = "SELECT * from tabel_ganjil WHERE Id_009='$kode'";
        $result = mysqli_query($link, $query);
        while($data = mysqli_fetch_assoc($result)){
         ?>
       

         <div>
           <h4> FORM UBAH DATA </h4>
        </div><hr>

        <form action="Update.php" method="POST">
            <div class="form-group">
                <label for="NIM_009">NIM</label>
                <input type="hidden" name="txtid" value="<?php echo $data['Id_009']; ?>">
                <input type="text" name="txtnim" value="<?php echo $data['NIM_009']; ?>"class="form-control" >
            </div>
            <div>
                <label for="Nama_009">Nama</label>
                <input type="text" name="txtnama" value="<?php echo $data['Nama_009']; ?>"class="form-control">
            </div>
            <div class="mt-3">
                <label for="Alamat_009">Alamat</label>
                <textarea name="txtalamat" cols="100" rows="3" class="form-control"required><?php echo $data['Alamat_009']; ?></textarea>
            </div>
            <input type="submit" value="simpan" name="btnsimpan" class="btn btn-warning mt-1">
        </form>


        <?php
    }
    ?>
</div>
</body>
</html>