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
      
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/slider_1_3-1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/slider_1_3-1.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/slider_1_3-1.png" alt="Third slide">
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




      <div class="container py-5">

        <!-- INPUT BOTTOM BORDER -->
        <div class="col-12 my-5">
          <form>
            <div class="form-group">
              <input type="text" class="form-control input-from-bottom" placeholder="Input Border Bottom">
            </div>
          </form>          
        </div>

        <!-- HR -->
        <div class="col-12 my-5">
          <form>
            <div class="form-group">
              <hr class="border-hr">
            </div>
          </form>          
        </div>

        <!-- textarea -->
        <div class="col-12 my-5">
          <form>
            <div class="form-group">
                <textarea class="form-control area-comment" rows="5" id="comment"></textarea>
            </div>
          </form>          
        </div>


        <div class="col-12 my-5">
          <form>
            <div class="form-group">
              <select class="selected-class">
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
              </select>                
            </div>
          </form>          
        </div>


        <div class="col-12 my-5">
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

        <div class="row">
          <div class="col-lg-6 my-5">
            <form>
              <div class="btn-group w-100">
                <button type="button" class="btn btn-facebook">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-facebook w-100">Sign in with Facebook</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6 my-5">
            <form>
              <div class="btn-group w-100">
                <button type="button" class="btn btn-gmail">
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-gmail w-100">Sign in with Google+</button>
              </div>
            </form>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-6">
            <a href="#" class="btn-yellow skip w-100">
              <span class="hover-bg reset">
                <span class="hover-text reset"><b class="text-btn-yellow">ยืนยัน</b></span>
              </span>
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </div>


          <div class="col-lg-6">
            <a href="#" class="btn-purple skip w-100">
              <span class="hover-bg reset">
                <span class="hover-text reset"><b class="text-btn-purple">ยืนยัน</b></span>
              </span>
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <div class="col-12 my-5">
          <form>
              <button type="button" class="btn bnt-dark-purple">BIZCAR</button>
          </form>
        </div>       




        <div class="row">
          <div class="col-3">
            <div class="card card-all">
              <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
              <div class="card-body px-0">
                <div class="card-head-content">
                  <h5 class="card-title">2017 HONDA CIVIC</h5>
                </div>
                <div class="card-content">
                  <p class="card-text">1.8 S i-Vtec FB Seden | 98,000 km</p>
                </div>
              </div>
              <div class="card-footer card-footer-all px-0 text-purple">
                279,000 บาท
              </div>
            </div>
          </div>


          <div class="col-3">
            <div class="card card-all">
              <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
              <div class="card-body px-0">
                <div class="card-head-content">
                  <h5 class="card-title">2017 HONDA CIVIC</h5>
                </div>
                <div class="card-content">
                  <p class="card-text">1.8 S i-Vtec FB Seden | 98,000 km</p>
                </div>
              </div>
              <div class="card-footer card-footer-all px-0 text-purple">
                279,000 บาท
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="card card-all">
              <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
              <div class="card-body px-0">
                <div class="card-head-content">
                  <h5 class="card-title">2017 HONDA CIVIC</h5>
                </div>
                <div class="card-content">
                  <p class="card-text">1.8 S i-Vtec FB Seden | 98,000 km</p>
                </div>
              </div>
              <div class="card-footer card-footer-all px-0 text-purple">
                279,000 บาท
              </div>
            </div>
          </div> 
          
          <div class="col-3">
            <div class="card card-all">
              <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
              <div class="card-body px-0">
                <div class="card-head-content">
                  <h5 class="card-title">2017 HONDA CIVIC</h5>
                </div>
                <div class="card-content">
                  <p class="card-text">1.8 S i-Vtec FB Seden | 98,000 km</p>
                </div>
              </div>
              <div class="card-footer card-footer-all px-0 text-purple">
                279,000 บาท
              </div>
            </div>
          </div>                             
        </div>


      </div>
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
