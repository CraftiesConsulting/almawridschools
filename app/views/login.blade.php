<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href=" {{ asset('css/bootstrap.min.css') }} " rel="stylesheet">
<title>Almawrid &diamond; Login</title>
</head>
<body style="padding-top: 60px;">

<div class="container">
    <div class="row">
        <div class="col-offset-4 col-sm-4 col-lg-4 col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
          </div>
          <div class="panel-body">
              <form class="form-horizontal" action="{{ url('login')}}" method="post">
                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="password">Username</label>
                        <div class="col-lg-8">
                            <input name="username" class="form-control" id="username" placeholder="username" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 control-label" for="password">Password</label>
                        <div class="col-lg-8">
                            <input class="form-control" id="password" placeholder="password" type="password" name="password" required>
                        </div>
                    </div>
                    <input type="submit" value="Login" name="submit" class="btn btn-info btn-block">
                </form>
          </div>
        </div>

        </div>
    </div>
</div>

</body>
</html>