<!doctype html>
<html lang="en">
  <head>
  	<!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
	<!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END NAVBAR -->
    <div class="wrapper">
       <div class="container pb-5">
          <div class="row pt-5">
              <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                   <img src="/bizcar/assets/images/profile.png" class="profile-img">
              </div>
              <div class="col-xl-9 col-lg-8 col-md-8 col-12 profile-m-t text-md-left text-center">
                   <div class="profile-font1">Mr.Usedcar</div>
                   <div class="profile-font2 mt-2">usedcarl@gmail.com</div>
                   <div class="mt-2">
                       <span class="btn pay-btn btn-file">
                          <input type="file"><u>เปลี่ยนรูปโปรไฟล์</u>
                       </span>
                   </div>
              </div>
          </div>


          <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-12 pt-5">
                  <div class="row">
                      <div class="profile-font4 profile-border-bottom1">ข้อมูลส่วนตัว</div>
                  </div>
                  <div class="profile-m-t-3">
                      <div class="profile-font4" style="display:inline;">ชื่อ-นามสกุล</div>
                      <div style="display:inline;">
                         <img src="/bizcar/assets/images/pencil.png" class="profile-w-h">
                      </div>
                      <div class="pt-2">
                         <input type="text" name="" class="profile-form" placeholder="ชื่อ-นามสกุล">
                      </div>
                  </div>
                  <div class="profile-m-t-2">
                      <div class="profile-font4" style="display:inline;">ชื่อผู้ใช้</div>
                      <div style="display:inline;">
                         <img src="/bizcar/assets/images/pencil.png" class="profile-w-h">
                      </div>
                      <div class="pt-2">
                         <input type="text" name="" class="profile-form" placeholder="ชื่อผู้ใช้">
                      </div>
                  </div>
                  <div class="profile-m-t-2">
                      <div class="profile-font4" style="display:inline;">วันเกิด</div>
                      <div style="display:inline;">
                         <img src="/bizcar/assets/images/pencil.png" class="profile-w-h">
                      </div>
                      <div class="pt-2">
                         <input type="text" name="" class="profile-form" placeholder="วันเกิด">
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-12 pt-5">
                  <div class="row">
                      <div class="profile-font4 profile-border-bottom2">ช่องทางการติดต่อ</div>
                  </div>
                  <div class="profile-m-t-3">
                      <div class="profile-font4" style="display:inline;">เบอร์โทรศัพท์</div>
                      <div style="display:inline;">
                         <img src="/bizcar/assets/images/pencil.png" class="profile-w-h">
                      </div>
                      <div class="pt-2">
                         <input type="text" name="" class="profile-form" placeholder="เบอร์โทรศัพท์">
                      </div>
                  </div>      
                  <div class="profile-m-t-2">
                      <div class="profile-font4" style="display:inline;">ที่อยู่</div>
                      <div style="display:inline;">
                         <img src="/bizcar/assets/images/pencil.png" class="profile-w-h">
                      </div>
                      <div class="pt-2">
                         <textarea class="profile-comment" 
                          placeholder="ที่อยู่"></textarea>
                      </div>
                  </div>
              </div>
          </div>

       </div>


    <?php include_once('inc/chat-box.php'); ?>      
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
