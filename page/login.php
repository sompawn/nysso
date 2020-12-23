<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Login</title>
<?php include("include/include.php"); ?>
</head>
<body>
<div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
              <a class=" navbar-brand" href="http://nysso.nyh.moph.go.th"><h1>สสอ.หนองใหญ่<h1></a>
            </div>
          </nav>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 col-xs-12">
          <h1>ระบบจัดการเอกสาร</h1>
         <form class="formlogin" action="include/c_login.php" method="POST" id="login" class="form-horizontal">
            <div class="form-group">
              <label >Username</label>
              <input type="text"  id="Username" placeholder="Enter Username" class="form-control" required name="Username" >
            </div>
            <div class="form-group">
              <label >Password</label>
             <input type="password"  id="Password" placeholder="Password" class="form-control" required name="Password">
            </div>
            <button  type="submit" class="btn btn-success">Login</button>
          </form>
        </div>
      </div>


 </body>
</html>
