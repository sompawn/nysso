<?php session_start();?>
<?php if (!$_SESSION["UserID"]){  //check session

	  Header("Location: c_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>
<!doctype html>
<html>
<head>
<link href="../css/adminstyle.css" rel="stylesheet">
	<?php include("include/include.php"); ?>
	<?php $NUM =1;
include('include/conn.php');
$sql = "select * from depart " or die("Error:" . mysqli_error());
$result = mysqli_query($con, $sql);
$sql2 = "select * from dgroup " or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $sql2); ?>
<meta charset="UTF-8">
<title>Admin page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="  navbar navbar-default  navbar-expand-lg fixed-top app-nav">
   <div class="container">
            <div class="topbar-divider d-none d-sm-block"><a class="navbar-brand text-brand " href="../page/index.php">Uploads<span class="color-b">  เอกสารขึ้น Web</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
      </button></div>

          <ul class="navbar-nav  ">

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">สวัสดีคุณ <?php print_r($_SESSION["User"]);?></span>
                <img class="img-profile rounded-circle" src="../img/face4.jpg">
              </a>

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
               <a class="dropdown-item"href="logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
        </div>
        </nav>
        <!-- End of Topbar -->
</head>
 <body>
<section class="intro-single">
    <div class="container">
      <div class="row">
 <button class="btn btn-info" data-toggle="modal" data-backdrop="static" data-target="#mo">Uploads</button>
  <div id="mo" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <div class="h2">อัพโหลดไฟล์</div>
        </div>
        <div class="modal-body">
        <div  class="row ">
          <div class="col">
           <form action="include/c_upload.php" method="post" enctype="multipart/form-data">
            <legend>เลือกไฟล์:</legend>
            <div class="form-group">
                <input type="file" name="fileupload" id="fileupload"  required="required"/>
            </div>
          ชื่อเรื่อง: <input type="text" class="form-control"name="filename"><br>
          วันที่อัพเดท:<input type="date" class="form-control" name="fdate"><br>
          กลุ่มงาน:<select class=" form-control" name="lmName1">
            <option>----เลือก-----</option>
            <?php foreach($result as $results){?>
    <option value="<?php echo $results["did"];?>"><?php echo $results["dname"];?></option><?php } ?>
          </select><br>
            หมวดหมู่:<select class=" form-control" name="lmName2">
            <option>----เลือก-----</option>
            <?php foreach($result2 as $results2){?>
    <option value="<?php echo $results2["idgroup"];?>"><?php echo $results2["gname"];?></option><?php } ?>
          </select><br>
          <input type="submit" name="submit" value="Upload" class="btn btn-info"/><br><br>
          </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button class="btn bnt-lg btn-dark " data-dismiss="modal">ปิด</button>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</section>


</body>
<!--  <h1>You are Administrator</h1>
    <p><strong>hi</strong> :&nbsp;<?php /*print_r*/($_SESSION);?> //show detail login
      <?php //session_destroy();?>
    </p>
    <p>&nbsp;</p>
    <p><a href="logout.php">Log out</strong></a></p>
    <p>&nbsp;</p> -->
</html>
<?php }?>
