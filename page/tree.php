<!DOCTYPE html>
<html lang="en">

<head>
  <title>สสอ.หนองใหญ่ | ประวัติสำนักงาน ฯ</title>
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
            <h1 class="title-single">ผังองค์กร</h1>
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
                ผังองค์กร
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Single Star /-->

  <div class="container d-flex justify-content-center ">
    <div class="row ">
      <!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
      <div class="tree ">
        <ul>
          <li>
            <div class="card border-success justify-content-center" style="width: 18rem;">
              <div class="card-header bg-success mb-3">
                <h5 class="card-title">นายวิโรจน์ มุมานะจิตต์</h5>
              </div>
              <div class="card-body">
                <span><img src="../img/person01.jpg"><br><br><a href="#"> <br>
                    ตำแหน่งสาธารณสุขอำเภอหนองใหญ่
                    <br>ผอ.สำนักงานสาธารณสุขอำเภอหนองใหญ่ <br> โทร. 089-4654924</a></span>
              </div>

            </div>

            <ul>
              <li>
                <div class="card border-success justify-content-center" style="width: 18rem;">
                  <div class="card-header bg-success mb-3">
                    <h5 class="card-title">นายพีระพงษ์ ฉิมมานิตย์</h5>
                  </div>
                  <span><img src="../img/person02.jpg"><br><br><a href="#"> <br>
                      ตำแหน่งนักวิชาการสาธารณสุขชำนาญการ
                      <br>โทร. 089-5422306</a>
                  </span>
                </div>

              </li>

              <li>
                <div class="card border-success justify-content-center" style="width: 18rem;">
                  <div class="card-header bg-success mb-3">
                    <h5 class="card-title">นายวิศิษฐ์ สุขเจริญพร</h5>
                  </div>
                  <span><img src="../img/person03.jpg"><br><br><a href="#"> <br>
                      ตำแหน่งนักวิชาการสาธารณสุขชำนาญการ
                      <br> โทร. 081-5752228</a>
                  </span>
                </div>

              </li>


              <!--            <li>
              <a href="#">Grand Child</a>

              <ul>

                <li>
                  <a href="#">Great Grand Child</a>
                </li>

                <li>
                  <a href="#">Great Grand Child</a>
                </li>

                <li>
                  <a href="#">Great Grand Child</a>
                </li>
              </ul>

            </li>     -->

              <!--            <li><a href="#">Grand Child</a></li>    -->


            </ul>

          </li>
        </ul>

      </div>
    </div>
  </div>

  <!--/ News Single End /-->

  <?php include("include/footer.php"); ?>
</body>

</html>