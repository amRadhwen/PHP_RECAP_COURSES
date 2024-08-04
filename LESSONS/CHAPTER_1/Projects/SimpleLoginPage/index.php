<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <script type="text/javascript" src="./index.js"></script> 
    <link rel="stylesheet" href="./index.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="header text-center">MyLoginApp</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="/login.php" class="form-horizontal">
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>