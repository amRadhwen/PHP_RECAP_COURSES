<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <script type="text/javascript" src="./index.js"></script>
    <link rel="stylesheet" href="./index.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-5 text-center header">MyLoginApp</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Signin</h5>
                    <form action="/login.php" method="post">
                        <div class="mb-3 row">
                            <label for="username" class="col-md-4 col-form-label">Username</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="username" name="username"/>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-md-4 col-form-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="reset" class="btn btn-secondary col-md-4" value="Reset" />
                            <input type="submit" class="btn btn-primary col-md-4" value="Submit" />
                        </div>
                    </form>
                    <?php
                        if(isset($_GET["err_msg"])) {
                            ?>
                            <div class="alert alert-danger" role="alert"><?php echo $_GET["err_msg"] ?></div>
                            <?php
                        }
                        if(isset($_GET["succ_msg"])) {
                            ?>
                            <div class="alert alert-success" role="alert"><?php echo $_GET["succ_msg"] ?></div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>