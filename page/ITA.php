<!DOCTYPE html>
<html lang="en">

<head>
  <title>สสอ.หนองใหญ่ | ITA</title>
  <?php include("include/include.php"); ?>
</head>

<body>
  <?php include("include/navbar.php"); ?>
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">เอกสารประกอบ ITA</h1>
            <span class="color-text-a"></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">หน้าหลัก</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                ITA
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Single Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <!-- <div class="col-sm-12 text-center">
          <div class="news-img-box">
            <img src="../img/hi.jpg" alt="" class="img-fluid img-thumbnail">
          </div> -->
      </div>

      <?php include("tableITA.php"); ?>

  </section>
  <!--/ News Single End /-->

  <?php include("include/footer.php"); ?>
</body>

</html>