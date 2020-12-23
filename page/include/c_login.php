<?php 
session_start();
        if(isset($_POST['Username'])){
        //connection
                  include("conn.php");
        //รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
        //query 
                  $sql="SELECT * FROM user Where username='".$Username."' and password='".$Password."' ";

                  $result = mysqli_query($con,$sql);
        
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["ID"];
                      $_SESSION["Username"] = $row["Username"];
                      $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];

                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin.php

                        Header("Location: ../admin.php");

                      }

                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user.php

                        Header("Location: ../user.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: ../login.php"); //user & password incorrect back to login again

        }
?>