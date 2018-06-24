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
<!-- CAROUSEL --> 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="home-carousel-img">
            <img class="d-block w-100 home-carousel-auto" src="assets/images/slider_1_3-1.png" alt="First slide">
          </div>
        </div>
        <div class="carousel-item">
          <div class="home-carousel-img">
            <img class="d-block w-100 home-carousel-auto" src="assets/images/slider_1_3-1.png" alt="Second slide">
          </div>
        </div>
        <div class="carousel-item">
          <div class="home-carousel-img">
            <img class="d-block w-100 home-carousel-auto" src="assets/images/panter.jpg" alt="Third slide">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!-- END CAROUSEL -->



    <div class="container">
      <div class="col-12">
        <div class="card home-card-top mb-5">
          <div class="card-header home-card-black">
            ค้นหารถยนต์
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <form>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control input-search" placeholder="พิมพ์ค้นหารถ">
                    <div class="input-group-append">
                      <button class="btn btn-search" type="button">
                          <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <select class="selected-class">
                    <option value="0">จังหวัด</option>
                    <option value="1">กรุงเทพมหานคร</option>
                    <option value="2">สิงห์บุรี</option>
                  </select>                
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <select class="selected-class">
                    <option value="0">ยี่ห่อ</option>
                    <option value="1">โตโยต้า</option>
                    <option value="2">ฮอนด้า</option>
                  </select>                
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <select class="selected-class">
                    <option value="0">รุ่น</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>                
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <select class="selected-class">
                    <option value="0">ประเภทผู้ชาย</option>
                    <option value="1">ประเภทผู้หญิง</option>
                  </select>                
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="text-center font-18">
                  <p>ราคา เริ่มต้น <span class="text-purple">20,000</span> ถึง <span class="text-purple">300,000</span> </p>
                </div>
              </div>
              <div class="col-12">
                <div id="slider-range"></div>              
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-lg-6">
                <a href="#" class="btn-purple skip w-100 home-padding-320">
                  <span class="hover-bg reset home-width-responsive">
                    <span class="hover-text reset">
                      <span class="text-btn-purple home-ml--60"><i class="flaticon-percentage font-25"></i> <span>รถราคาพิเศษ</span></span>
                    </span>
                  </span>
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-lg-6">
                <a href="#" class="btn-yellow skip w-100">
                  <span class="hover-bg reset">
                    <span class="hover-text reset">
                      <span class="text-btn-yellow"><i class="fa fa-search font-25" aria-hidden="true"></i> <span>ยืนยัน</span></span>
                    </span>
                  </span>
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-footer card-footer-all">
            <div class="font-18 text-center">
              <a href="#" class="text-purple"><u>ค้นหารถยนต์โดยละเอียด</u></a>
            </div> 
          </div>
        </div>
      </div>


      
      <div class="col-12">
        <div class="card mb-5 bg-purple" style="border-radius: 0px;">
        <div class="card-body home-head-product">
          <div class="text-center text-white">
            <div class="font-18">
              <span>ซื้อรถยนต์</span>
            </div>
          </div>
        </div>
        </div>
      </div>
      

      <div class="row mb-5">
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/Ford-Edge-Sport-2016.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>     
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/45_crvjpg.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/c23afbda3cb7df88c914574fe68ce1d2.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/i1-4580.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>     
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/Ford-Edge-Sport-2016.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/c23afbda3cb7df88c914574fe68ce1d2.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" href="#" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>


      <div class="row mb-5">
        <div class="col-12">
          <div class="text-right">
            <a href="#" class="btn-yellow skip home-btn-yollow">
              <span class="hover-bg reset home-btn-reset">
                <span class="hover-text reset home-hover-text">
                  <span class="text-btn-yellow"><span>ดูทั้งหมด</span></span>
                </span>
              </span>
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card mb-5 bg-purple" style="border-radius: 0px;">
        <div class="card-body home-head-product">
          <div class="text-center text-white">
            <div class="font-18">
              <span>รถมือสองใหม่</span>
            </div>
          </div>
        </div>
        </div>
      </div>
      

      <div class="row mb-5">
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/gallardo-0638.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>     
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/45_crvjpg.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/c23afbda3cb7df88c914574fe68ce1d2.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/i1-4580.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>     
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/gallardo-0638.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointer">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-lg-4 col-md-6 col-12 my-3">
          <div class="card card-all">
            <div class="home-porduct-img">
              <a href="#">
                  <img class="card-img-top border-radius-none home-img-porduct" src="assets/images/car/c23afbda3cb7df88c914574fe68ce1d2.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body px-0 py-0">
              <div class="card-head-content">
                <h5 class="card-title">2017 HONDA CIVIC</h5>
              </div>
              <div class="card-content">
                <p class="card-text"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
              </div>
            </div>
            <div class="card-footer card-footer-all px-0 text-purple py-0">
              <div class="row">
                <div class="col-lg-9 px-0">
                  <div class="text-left">
                    <span>279,000 บาท</span>
                  </div>
                </div>
                <div class="col-lg-3 px-0">
                  <div class="text-right cursor-pointers">
                    <span><i onclick="myFunction(this)" class="fa fa-star-o text-gray" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>


      <div class="row mb-5">
        <div class="col-12">
          <div class="text-right">
            <a href="#" class="btn-yellow skip home-btn-yollow">
              <span class="hover-bg reset home-btn-reset">
                <span class="hover-text reset home-hover-text">
                  <span class="text-btn-yellow"><span>ดูทั้งหมด</span></span>
                </span>
              </span>
              <i  class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

    </div> <!-- CONTAINER -->




      <!-- END INPUT BOTTOM BORDER -->
      
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>



