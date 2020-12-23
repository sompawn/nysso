<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <?php
$NUM =1;
$NUM1 =1;
$NUM2 =1;
$NUM3 =1;
$NUM4 =1;
//1. เชื่อมต่อ database: 
include('include/conn.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง: 
$query = "SELECT u.*,d.dname FROM uploadfile u 
left outer join depart d on d.did = u.dep
where u.dgroup = '001'
ORDER BY u.fdate DESC" or die("Error:" . mysqli_error()); 
$query1 = "SELECT u.*,d.dname FROM uploadfile u 
left outer join depart d on d.did = u.dep
where u.dgroup = '002'
ORDER BY u.fdate DESC" or die("Error:" . mysqli_error()); 
$query2 = "SELECT u.*,d.dname FROM uploadfile u 
left outer join depart d on d.did = u.dep
where u.dgroup = '003'
ORDER BY u.fdate DESC" or die("Error:" . mysqli_error()); 
$query3 = "SELECT u.*,d.dname FROM uploadfile u 
left outer join depart d on d.did = u.dep
where u.dgroup = '004'
ORDER BY u.fdate DESC" or die("Error:" . mysqli_error()); 
$query4 = "SELECT u.*,d.dname FROM uploadfile u 
left outer join depart d on d.did = u.dep
where u.dgroup = '005'
ORDER BY u.fdate DESC" or die("Error:" . mysqli_error()); 
$query5 = "SELECT (SELECT COUNT(fileID) FROM uploadfile where dgroup = '001' LIMIT 1) as '001',
(SELECT COUNT(fileID) FROM uploadfile where dgroup = '002' LIMIT 1) as '002',
(SELECT COUNT(fileID) FROM uploadfile where dgroup = '003' LIMIT 1) as '003',
(SELECT COUNT(fileID) FROM uploadfile where dgroup = '004' LIMIT 1) as '004',
(SELECT COUNT(fileID) FROM uploadfile where dgroup = '005' LIMIT 1) as '005'
FROM uploadfile u 
left outer join depart d on d.did = u.dep
ORDER BY u.fdate DESC
LIMIT 1" or die("Error:" . mysqli_error()); 


//3. execute the query. 
$result = mysqli_query($con, $query); 
$result1 = mysqli_query($con, $query1); 
$result2 = mysqli_query($con, $query2); 
$result3 = mysqli_query($con, $query3); 
$result4 = mysqli_query($con, $query4); 
$result5 = mysqli_query($con, $query5);

$file_pdf ="../upload/".$row['fileupload'];
$file_pdf1 ="../upload/".$row1['fileupload'];
$file_pdf2 ="../upload/".$row2['fileupload'];
$file_pdf3 ="../upload/".$row3['fileupload'];
$file_pdf4 ="../upload/".$row4['fileupload'];
?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">ข่าวสาร</h2>
            </div>
            <div class="title-link">
              <a href="login.php">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
         
      </div>
<div class="col-md-12">
  <?php while($row5 = mysqli_fetch_array($result5)) { ?>
       <ul class="navbar-default nav  justify-content-center navbar-lg " id="myTab" role="tablist">
            <li class="nav-item ">
             <a class="nav-link active " id="pills-plans-tab" data-toggle="pill" href="#pills-01" role="tab"
                aria-controls="01" aria-selected="true">ข่าว-ประชาสัมพันธ์ <span class="badge badge-danger badge-pill"><?php echo$row5["001"]?></span></a>
              </li>
            <li class="nav-item ">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-02" role="tab" aria-controls="pills-plans"
                aria-selected="false">จัดซื้อ-จัดจ้างครุภัณฑ์ <span class="badge badge-danger badge-pill"><?php echo$row5["002"]?></span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-03" role="tab" aria-controls="pills-plans"
                aria-selected="false">จัดซื้อ-ยาและเวชภัณฑ์ <span class="badge badge-danger badge-pill"><?php echo$row5["003"]?></span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-04" role="tab" aria-controls="pills-plans"
                aria-selected="false">จัดซื้อ-จัดจ้างวัสดุวิทยาศาสตร์การแพทย์ <span class="badge badge-danger badge-pill"><?php echo$row5["004"]?></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-05" role="tab" aria-controls="pills-plans"
                aria-selected="false">งานยุทธศาสตร์ ฯ <span class="badge badge-danger badge-pill"><?php echo$row5["005"]?></span></a>
            </li>
            <?php } ?>
          </ul>
  <div  id="myTabContent " class="tab-content">
  <div class="tab-pane fade show active " id="pills-01" role="tabpanel" aria-labelledby="pills-plans">
  <!--for demo wrap-->
  <div class="tbl-header">
    <table  cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
           <th style="text-align:center;width: 10px;">ลำดับ</th>
           <th style="text-align:center;width: 800px;">เรื่อง</th>
           <th style="text-align:center;width: 180px;">วันที่</th>
           <th style="text-align:center;width: 90px;">กลุ่มงาน</th>
           <th style="text-align:center;width: 90px;">มุมมอง</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
   <table id="tbl" class="table table-striped " cellpadding="0" cellspacing="0" border="0">
    <tbody>
      <tr>  
      <?php while($row = mysqli_fetch_array($result)) { ?>
      <td style="text-align:center;"><?php echo $NUM++?></td>
      <td ><?php echo$row["fname"]?></td>
      <td style="text-align:center;"  ><?php echo$row["fdate"]?></td>
      <td style="text-align:center;" ><?php echo$row["dname"]?></td>
      <td style="text-align:center;" ><a href="<?=$file_pdf.$row["fileupload"]?>" target="_blank"><i class="far fa-eye" ></i></a></td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
</div>

  <div class="tab-pane fade " id="pills-02" role="tabpanel" aria-labelledby="pills-plans">
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
         <th style="text-align:center;width: 10px;">ลำดับ</th>
           <th style="text-align:center;width: 600px;">เรื่อง</th>
           <th style="text-align:center;width: 120px;">วันที่</th>
           <th style="text-align:center;width: 110px;">กลุ่มงาน</th>
           <th style="text-align:center;width: 100px;">มุมมอง</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
   <table id="tbl" class="table table-striped " cellpadding="0" cellspacing="0" border="0">
      <tbody>
            <tr>  
        <?php while($row1 = mysqli_fetch_array($result1)) { ?>
      <td style="text-align:center;"><?php echo $NUM1++?></td>
      <td ><?php echo$row1["fname"]?></td>
      <td style="text-align:center;"  ><?php echo$row1["fdate"]?></td>
      <td style="text-align:center;" ><?php echo$row1["dname"]?></td>
      <td style="text-align:center;" ><a href="<?=$file_pdf1.$row1["fileupload"]?>" target="_blank"><i class="far fa-eye" ></i></a></td>
      </tr>
    <?php } ?>
      </tbody>
    </table>
</div>
</div>

<div class="tab-pane fade " id="pills-03" role="tabpanel" aria-labelledby="pills-plans">
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
            <th style="text-align:center;width: 10px;">ลำดับ</th>
           <th style="text-align:center;width: 700px;">เรื่อง</th>
           <th style="text-align:center;width: 120px;">วันที่</th>
           <th style="text-align:center;width: 110px;">กลุ่มงาน</th>
           <th style="text-align:center;width: 100px;">มุมมอง</th>
      </thead>
    </table>
  </div>
<div class="tbl-content">
   <table id="tbl" class="table table-striped " cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>  
        <?php while($row2 = mysqli_fetch_array($result2)) { ?>
      <td style="text-align:center;"><?php echo $NUM2++?></td>
      <td ><?php echo$row2["fname"]?></td>
      <td style="text-align:center;"  ><?php echo$row2["fdate"]?></td>
      <td style="text-align:center;" ><?php echo$row2["dname"]?></td>
      <td style="text-align:center;" ><a href="<?=$file_pdf2.$row2["fileupload"]?>" target="_blank"><i class="far fa-eye" ></i></a></td>
      </tr>
    <?php } ?>
      </tbody>
    </table>
</div>
</div>

<div class="tab-pane fade " id="pills-04" role="tabpanel" aria-labelledby="pills-plans">
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th style="text-align:center;width: 10px;">ลำดับ</th>
           <th style="text-align:center;width: 600px;">เรื่อง</th>
           <th style="text-align:center;width: 140px;">วันที่</th>
           <th style="text-align:center;width: 150px;">กลุ่มงาน</th>
           <th style="text-align:center;width: 80px;">มุมมอง</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
   <table id="tbl" class="table table-striped " cellpadding="0" cellspacing="0" border="0">
      <tbody>
         <tr>  
        <?php while($row3 = mysqli_fetch_array($result3)) { ?>
      <td style="text-align:center;"><?php echo $NUM3++?></td>
      <td ><?php echo$row3["fname"]?></td>
      <td style="text-align:center;"  ><?php echo$row3["fdate"]?></td>
      <td style="text-align:center;" ><?php echo$row3["dname"]?></td>
      <td style="text-align:center;" ><a href="<?=$file_pdf3.$row3["fileupload"]?>" target="_blank"><i class="far fa-eye" ></i></a></td>
      </tr>
    <?php } ?>
                                        
      </tbody>
    </table>
</div>
</div>

<div class="tab-pane fade " id="pills-05" role="tabpanel" aria-labelledby="pills-plans">
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
         <th style="text-align:center;width: 10px;">ลำดับ</th>
           <th style="text-align:center;width: 600px;">เรื่อง</th>
           <th style="text-align:center;width: 200px;">วันที่</th>
           <th style="text-align:center;width: 200px;">กลุ่มงาน</th>
           <th style="text-align:center;width: 90px;">มุมมอง</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
   <table id="tbl" class="table table-striped " cellpadding="0" cellspacing="0" border="0">
      <tbody>
          <tr>  
        <?php while($row4 = mysqli_fetch_array($result4)) { ?>
      <td style="text-align:center;"><?php echo $NUM4++?></td>
      <td ><?php echo$row4["fname"]?></td>
      <td style="text-align:center;"  ><?php echo$row4["fdate"]?></td>
      <td style="text-align:center;" ><?php echo$row4["dname"]?></td>
      <td style="text-align:center;" ><a href="<?=$file_pdf3.$row3["fileupload"]?>" target="_blank"><i class="far fa-eye" ></i></a></td>
      </tr>
    <?php } ?>                       
      </tbody>
    </table>
</div>
</div>
</div>
</div>
</body>
</html>