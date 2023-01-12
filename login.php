<?php
session_start();
include('koneksi.php');
if(isset($_POST["login"])){
    $uname = $_POST["username"];
    $pwd = $_POST["pwd"];
    $user = mysqli_query($conn,"SELECT * FROM tb_users WHERE username='$uname' AND password=MD5('$pwd')");
    if (mysqli_num_rows($user) > 0) {
        $_SESSION["superadmin"] = true;
        header("Location: admin/dashboard.php");
    }else{
        $alert = '<div class="alert alert-danger" role="alert">Username/Password salah!</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB TRACER STMIK</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .form-group {
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
        <div class="container w-100">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand" href="#">Web Tracer STMIK</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="wrapper p-4">
            <h3>Login</h3>
            <?=@$alert?>
            <form method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pwd" id="" class="form-control">
                </div>

                <div class="form-group">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" name="login" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>