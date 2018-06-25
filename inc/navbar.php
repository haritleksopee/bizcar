<!-- NAVBAR-HEADER -->


<!-- HEAD NOT LOGIN -->
<nav class="navbar navbar-expand-sm bg-black d-none">
  <div class="container">
    <ul class="navbar-nav navbar-right">
      <li class="nav-item navbar-size-sm">
         <i class="flaticon-user navbar-icon"></i>
      </li>
      <li class="nav-item navbar-size-sm">
        <a class="nav-link text-white" href="#" style="font-weight: 300;"> ลงทะเบียน</a>
      </li>
      <div class="navbar-border-right"></div>
      <li class="nav-item navbar-size-sm">
        <a class="nav-link text-white" href="#" style="font-weight: 300;">เข้าสู่ระบบ</a>
      </li>
    </ul>
  </div>
</nav>


<!-- HEAD LOGIN -->
<nav class="navbar navbar-expand-sm bg-black">
  <div class="container">
    <ul class="navbar-nav navbar-right">

      <?php $link = $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];

      ?>
      <li class="nav-item navbar-size-sm">
         <i class="flaticon-user navbar-icon"></i>
      </li>
      <li class="nav-item navbar-size-sm">
        <a class="nav-link " href="#" style="font-weight: 300;color: #d0a50a;"> ลงทะเบียน</a>
      </li>  
      <li class="nav-item navbar-size-sm">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            คุณเนส
          </button>
          <div class="dropdown-menu dropdown-menu-navbar2 nav_pad" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item navbar-profile-collor" href="profile.php"><i class="fa fa-user-circle text_purple mr-3" aria-hidden="true"></i>ข้อมูลผู้ใช้</a>
            <a class="dropdown-item navbar-profile-collor" href="favorites.php"><i class="fa fa-star text_purple mr-3" aria-hidden="true"></i>รายการโปรด</a>
            <a class="dropdown-item navbar-profile-collor" href="booking-history.php"><i class="fa fa-clock-o text_purple mr-3" aria-hidden="true"></i>ประวัติการจอง</a>
            <a class="dropdown-item navbar-profile-collor" href="index.php"><i class="fa fa-sign-out text_purple mr-3" aria-hidden="true"></i>ออกจากระบบ</a>
          </div>
        </div>
      </li>
    </ul>

  </div>
</nav>
<!-- END NAVBAR-HEADER -->






<nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-purple">
    <div class="container">
      <div class="navbar-logo-frame">
        <a class="navbar-brand" href="home.php">
            <img class="navbar-logo-img" src="assets/images/RODUSEDJINGJAI LOGO.png">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">


        <ul class="navbar-nav">
        <?php $link = $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];

        ?>
          <li class="nav-item navbar-widtd">
            <a class="nav-link navbar-text-link <?php if($link == 'localhost/bizcar/home.php'){echo 'navbar-link-active';} ?>" href="home.php">หน้าหลัก</a>
          </li>
          <li class="nav-item navbar-widtd">
            <a class="nav-link navbar-text-link <?php if($link == 'localhost/bizcar/about_us.php'){echo 'navbar-link-active';} ?>" href="about_us.php">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item navbar-widtd">
            <a class="nav-link dropdown-toggle navbar-text-link <?php if($link == 'localhost/bizcar/show_product.php'){echo 'navbar-link-active';} ?>" href="#" id="navbardrop" data-toggle="dropdown">
              ซื้อรถยนต์
            </a>
            <div class="dropdown-menu navbarmenu-dropdown dropdown2sdf">
              <a class="dropdown-item navbar-text-link navbar-dropdown-position navbar-responsive-dropdown" href="show_product.php">ทั้งหมด</a>
              <div style="border-right: 1px solid #fff;"></div>
              <a class="dropdown-item navbar-text-link navbar-dropdown-position navbar-responsive-dropdown" href="show_product.php">รถบ้าน</a>
              <div style="border-right: 1px solid #fff;"></div>
              <a class="dropdown-item navbar-text-link navbar-dropdown-position navbar-responsive-dropdown" href="show_product.php">รถดีลเลอร์</a>
            </div>
          </li>
          <li class="nav-item navbar-widtd">
            <a class="nav-link dropdown-toggle navbar-text-link <?php if($link == 'localhost/bizcar/addcar.php' || $link == 'localhost/bizcar/selling-leads.php'){echo 'navbar-link-active';} ?>" href="#" id="navbardrop" data-toggle="dropdown">
              ขายรถยนต์
            </a>
            <div class="dropdown-menu navbarmenu-dropdown">
              <a class="dropdown-item navbar-text-link navbar-dropdown-position navbar-responsive-dropdown2 <?php if($link == 'localhost/bizcar/selling-leads.php'){echo 'navbar-link-active';} ?>" href="selling-leads.php">วิธีการขาย</a>
              <div style="border-right: 1px solid #d0a50a;"></div>
              <a class="dropdown-item navbar-text-link navbar-dropdown-position navbar-responsive-dropdown2" href="addcar.php">สร้างประกาศ</a>
            </div>
          </li>
          <li class="nav-item navbar-widtd">
            <a class="nav-link navbar-text-link  <?php if($link == 'localhost/bizcar/contact.php'){echo 'navbar-link-active';} ?>" href="contact.php">ติดต่อเรา</a>
          </li> 
        </ul>
        <form class="form-inline ml-auto">
            <span class="text-white px-lg-3 px-0">Select Language</span>
            <a href="#" class="navbar-language">
              <img src="assets/images/Thailand-icon.png" class="w-100">
            </a>
            <a href="#" class="navbar-language navbar-language-active">
              <img src="assets/images/United-kingdom-icon.png" class="w-100">
            </a>
        </form>
      </div> 
    </div>
</nav>
