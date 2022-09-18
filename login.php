
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
        </style>

        <title>Login Sistem</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale">
            <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">

        <script src="bootstrap4/js/bootstrap.js"></script>
        <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="w-25 mx-auto text-center mt-5">
                <div class="card bg-dark text-light">
                    <div class="card-body">
                    <h2 class="card-title">LOGIN</h2>
                    <form method="post" action="">
                       
                                <div class="form-group">
                                    <label for="username">Nama user</label>
                                    <input class="form-control" type="text" name="username" id="username" autofocus>
                                </div>
                         
                                <div class="form-group">
                                    <label for="password" >Password</label>
                                    <input class="form-control" type="password" name="password" id="password">
                                </div>
                            
                                <div>
                                   <button class="btn btn-info" type="submit" name="fmasuk">Login</button>
                                </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

    <?php
        if (isset($_POST['fmasuk'])){
            require "fungsi.php";
            $username=$_POST['username'];
            $password=$_POST['password'];
            $qry = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'
            AND password = md5 ('$password')");
            $cek = mysqli_num_rows($qry);

            if (mysqli_affected_rows($koneksi)>0){
                $_SESSION['username']=$username;
                header("location:homeAdmin.php");
            }else{
                echo "<div class='alert-danger w-25 mx-auto text-center mt1 alert-dismissible'>
                <button type='button' class='close' datadismiss='alert'>&times;</button>
                Maaf, login gagal. Ulangi login.
                </div>";
            }
        }
    ?>
</body>
</html>
