<?php 

$row=$db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");

?>

<h3>insert Menu</h3>
<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group w-50" >
        <label for="">Kategori</label><br>
        <select name="idkategori" id="">
            <?php foreach($row as $r): ?>
            <option value="<?php echo $r['idkategori'] ?>"> <?php echo $r['kategori'] ?></option>
            <?php endforeach ?>
        </select>
    </div>

        <div class="form-group w-50" >
            <label for="">Nama Menu</label>
            <input type="text" name="Menu"required placeholder="isi Menu" class="form-control" >
        </div>

            <div class="form-group w-50" >
                <label for="">Harga</label>
                <input type="text" name="Harga" number required placeholder="isi Harga" class="form-control" >
            </div> 

            <div class="form-group w-50" >
                <label for="">Gambar</label><br>
                <input type="file" name="Gambar">
            </div>     
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $idkategori = $_POST['idkategori'];
        $Menu = $_POST['Menu'];
        $harga = $_POST['Harga'];
        $gambar = $_FILES['Gambar']['name'];
        $temp = $_FILES['Gambar']['tmp_name'];

        if (empty($gambar)) {
            echo"<h2> GAMBAR KOSONG! </h2>";
        }else {
            $sql = "INSERT INTO tblmenu VALUES ('',$idkategori,'$Menu','$gambar',$harga)";
            move_uploaded_file($temp,'../upload/'.$gambar);
            $db->runSQL($sql);
            header("location:?f=Menu&m=select");
        }
    }

?>