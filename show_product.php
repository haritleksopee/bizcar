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

    <div class="mt-5">
      <div class="heading-title _black text-center">BIZCAR</div>
    </div>

    <div class="container">

    <!-- Start Search -->  
      <div class="full-search">
        <div class="row">

          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">ยี่ห้อ</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">รุ่น</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">รายละเอียดรุ่น</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">ภาค</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">ราคา</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">ปี</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">เลขไมล์ (กม.)</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">ระบบเกียร์</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">ประเภทรถ</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">สี</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">แก๊ส</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>
          <div class="col-12 col-md-4 col-lg-3">
            <form>
              <div class="form-group">
                <select class="selected-class">
                  <option value="0" selected="selected" disabled="disabled">แสดงรถยนต์ด้วย</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>                
              </div>
            </form>          
          </div>

        </div>
      </div>
    <!-- End Search -->

    <div class="mx-15">
      <div class="col-12 my-5">
        <div class="heading-title _purple text-center">ค้นหารถ <font color="#eab40f"> จำนวน 39,245 คัน</font> สำหรับขายในประเทศไทย</div>
      </div>
    </div>

    <!-- Start Show Product -->
  <div class="tabs-product mb-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="allcar-tab" data-toggle="tab" href="#allcar" role="tab" aria-controls="allcar" aria-selected="true">ทั้งหมด</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="rv-tab" data-toggle="tab" href="#rv" role="tab" aria-controls="rv" aria-selected="false">รถบ้าน</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="dealer-tab" data-toggle="tab" href="#dealer" role="tab" aria-controls="dealer" aria-selected="false">รถดีลเลอร์</a>
      </li>
      <li class="sort-product">
        <span class="nav-link px-0">เรียงลำดับตาม : </span>
        <form>
            <div class="form-group">
              <select class="selected-class">
                <option value="0">ค้นหามากที่สุด</option>
                <option value="1">ราคาถูกที่สุด</option>
                <option value="2">รถยอดนิยม</option>
              </select>                
            </div>
          </form>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="allcar" role="tabpanel" aria-labelledby="allcar-tab">
        <div class="row mt-4">
          <!-- vehicle 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="https://www.matichon.co.th/wp-content/uploads/2017/05/89565.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="http://www.thaicarlover.com/wp-content/uploads/2017/04/Baojun-560.jpeg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 4 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="https://www.matichon.co.th/wp-content/uploads/2017/05/89565.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 5 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="https://www.autodeft.com/_files/images/full/2015-06-17/704E2NDR.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 6 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 7 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 8 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="https://www.autodeft.com/_files/images/full/2015-06-17/704E2NDR.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 9 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>                          
        </div>

        <!-- start pagination -->
        <div class="text-center">
          <div class="bc-pagination">
            <a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i> หน้าแรก</a>
            <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> ก่อนหน้า</a>
            <a href="#"><span>1</span></a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">ต่อไป <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#">หน้าสุดท้าย <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <!-- end pagination -->

      </div>

      <div class="tab-pane fade" id="rv" role="tabpanel" aria-labelledby="rv-tab">
        <div class="row mt-4">
          <!-- vehicle 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="https://www.piriyaphoto.com/wp-content/uploads/2016/10/PW9_4417-copy-3.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="https://www.banidea.com/wp-content/uploads/2013/05/Van-House-Travel-1.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>                           
        </div>

        <!-- start pagination -->
        <div class="text-center">
          <div class="bc-pagination">
            <a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i> หน้าแรก</a>
            <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> ก่อนหน้า</a>
            <a href="#"><span>1</span></a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">ต่อไป <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#">หน้าสุดท้าย <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <!-- end pagination -->

      </div>

      <div class="tab-pane fade" id="dealer" role="tabpanel" aria-labelledby="dealer-tab">
        <div class="row mt-4">
          <!-- vehicle 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <!-- vehicle 4 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card card-all mb-2">
                <a href="#"><img class="card-img-top border-radius-none" src="assets/images/gallardo-0638.jpg" alt="Card image cap"></a>
                <div class="card-body px-0">
                  <div class="card-head-content">
                    <h5 class="card-title text-purple">2016 Toyota Hilux Revo 2.4 Prerunner G Pickup</h5>
                  </div>
                  <div class="card-content">
                    <p class="card-text">สภาพยอดเยี่ยม รถไม่เคยชน เช็คสภาพรถตามระยะ สภาพยางดี</p>
                  </div>
                </div>
                <div class="card-footer card-footer-all px-0 d-flex">
                  <div class="text-purple mr-auto">
                    <label>279,000 บาท</label>
                  </div>
                  <div class="checkbox-compare">
                    <label class="check-compare">เปรียบเทียบ
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="wishlist">
                    <div class="wish-position">
                      <label class="star-wish">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-gray p-3">
                  <ul class="show-list-detail">
                    <li class="list-item">
                      <i class="fa flaticon-speedometer" aria-hidden="true"></i>
                      <label class="text-contact">120 - 125k กม.</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-gearbox"></i>
                      <label class="text-contact"> เกียร์อัตโนมัติ</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-map-pin-marked"></i>
                      <label class="text-contact">กรุงเทพมหานคร</label>
                    </li>
                    <li class="list-item">
                      <i class="fa flaticon-manager"></i>
                      <label class="text-contact">รถบ้าน</label>
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-white px-0 d-md-flex flex-md-row">
                  <div>
                     <a href="#" class="btn-purple btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-purple text-medium"><i class="fa fa-phone mr-1" aria-hidden="true"></i>ติดต่อผู้ขาย</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn-yellow btn-small skip">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><label class="text-btn-yellow text-medium">จอง</label></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>                            
        </div>

        <!-- start pagination -->
        <div class="text-center">
          <div class="bc-pagination">
            <a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i> หน้าแรก</a>
            <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> ก่อนหน้า</a>
            <a href="#"><span>1</span></a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">ต่อไป <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#">หน้าสุดท้าย <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <!-- end pagination -->

      </div>

      
    </div>


  </div>

    <!-- End Show Product -->

    </div>
    




      
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
