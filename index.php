<html>
<head>
	<title>LOGIN </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style_login.css">
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Program Aplikasi Penilaian Kinerja</h1>
            <div class="account-wall">
                
               
                 
                <form class="form-signin" method="POST" action="con_login.php" enctype="multipart/form-data">
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <br>
                <input type="password" class="form-control" placeholder="Password" name="password" required autofocus>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Login</button>
                
                </form>
            </div>
             
        </div>
    </div>
</div>




</body>
</html>