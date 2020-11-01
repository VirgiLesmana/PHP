<h3>insert user</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50" >
            <label for="">nama user</label>
            <input type="text" name="user"required placeholder="isi user" class="form-control" >
        </div>
            <div class="form-group w-50" >
                <label for="">Email</label>
                <input type="email" name="email"required placeholder="email" class="form-control" >
            </div>
            <div class="form-group w-50" >
                <label for="">Password</label>
                <input type="password" name="password"required placeholder="password" class="form-control" >
            </div>
            <div class="form-group w-50" >
                <label for="">konfrimasi Password</label>
                <input type="password" name="konfrimasi"required placeholder="password" class="form-control" >
            </div>
            <div class="form-group w-50" >
                <label for="">Level</label><br>
                <select name="level" id="">
                    <option value="admin">admin</option>
                    <option value="chef">chef</option>
                    <option value="kasir">kasir</option>
                </select>
            </div>
        <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email=$_POST['email'];
        $password=hash('sha256', $_POST['password']);
        $konfrimasi=hash('sha256', $_POST['konfrimasi']);
        $level=$_POST['level'];
        if ($password === $konfrimasi) {
            $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
            $db->runSQL($sql);
            header("location:?f=user&m=select");
        }else {
            echo"<h2>PASSWORD TIDAK SAMA DENGAN KONFRIMASI</h2>";
        }
    }

?>