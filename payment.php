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
              <div class="row">
                   <div class="col-xl-6 col-lg-6 col-12 pt-5">
                         <div class="payment-font1">วิธีการจองแล้วชำระเงิน</div>
                         <div class="payment-font2">
                           การจองโดยการโอนทางธนาคารผ่าน ATM สามารถทำได้โดยใช้ใบเพย์อินของคุณ
                           และชำระที่เครื่อง ATM ของธนาคารดังต่อไปนี้ ธนาคารไทยพาณิชย์ ธนาคารกรุงไทย
                           และธนาคารกรุงเทพ หลังจากมีการจองแล้วภายในเวลาไม่นาน USEDCARJINGJAI
                           จะส่งอีเมล์ ยืนยันการจองไปให้คุณพร้อมทั้งระบุวันที่ในการจัดส่งสินค้าโดยประมาณ
                           ใบเพล์อินของคุณจะหมดอายุภายใน 3 วันหลังจากการทำการจอง และการจองของคุณ
                           จะถูกยกเลิกโดยอัตโนมัติหากไม่มีการจองภายในกำหนดเวลา โดยคุณสามารถทำการ
                           จองใหม่ได้
                         </div>
                         <div class="payment-font1 pt-4">ชำระเงินผ่านเคาน์เตอร์</div>
                         <div class="payment-font2">
                           การจองของคุณจะหมดอายุภายใน 3 วัน วันหลังจากทำการจอง และการจองของคุณจะถูก
                           ยกเลิกโดยอัตโนมัติหากไม่มีการชำระเงินภายในกำหนดเวลา โดยคุณสามารถทำการ
                           จองใหม่ได้ทุกเมื่อ หลังจากมีการชำระเงินแลวภายในเวลาไม่นาน USEDCARJINGJAI
                           จะส่งอีเมล์ยืนยันการจองไปให้คุรพร้อมทั้งระบุวันที่ในการจัดส่งสินค้าโดยประมาณ
                         </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-12 pt-5">
                       <div class="card payment-w-h payment-p-b payment-padding">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item payment-bg-yellow text-center">
                              <div class="payment-font3 pt-2">รายละเอียดการจอง</div>
                            </li>
                            <li class="list-group-item payment-padding">
                               <div class="row pt-4">
                                 <div class="col-xl-6 col-md-6">
                                    <div class="">ชื่อ-นามสกุล</div>
                                    <div class="pt-2">
                                      <input type="text" name="" class="payment-form">
                                    </div>
                                 </div>
                                 <div class="col-xl-6  col-md-6">
                                    <div class="">เบอร์ติดต่อ</div>
                                    <div class="pt-2">
                                      <input type="text" name="" class="payment-form">
                                    </div>
                                 </div>
                               </div>

                               <div class="row pt-3">
                                 <div class="col-xl-12">
                                    <div class="">อีเมล์</div>
                                    <div class="pt-2">
                                      <input type="text" name="" class="payment-form">
                                    </div>
                                 </div>
                               </div>

                               <div class="row pt-3 pb-3">
                                     <div class="col-xl-12">
                                         <div class="">ธนาคารที่โอน</div>    
                                      </div>                 
                                </div>

                                <div class="row">
                                   <div class="col-xl-12">
                                       <input type="radio" id="test1" name="radio-group" hecked>                              
                                       <label for="test1">
                                            <div class="d-flex flex-xl-row flex-md-row flex-column pay-m-t">
                                               <div class="payment-font2 ml-3">กสิกรไทย</div>
                                               <img class = "pay-m-t-3 pay-m-l-2 pay-img4"
                                               src="/bizcar/assets/images/kbank.jpg" width="35" height="35">
                                               <div class = "payment-font2 pay-m-l-5 pay-m-t-2" >123-4-56789-0</div>
                                               <div class = "payment-font2 pay-m-l-8 pay-m-t-2" >บ.ยูสคาร์จริงใจ</div>
                                            </div>
                                        </label> 
                                    </div>
                                </div>

                                <div class="row pay-m-t-5">
                                   <div class="col-xl-12">
                                       <input type="radio" id="test2" name="radio-group" hecked>                              
                                       <label for="test2">
                                            <div class="d-flex flex-xl-row flex-md-row flex-column pay-m-t">
                                               <div class="payment-font2 ml-3">กรุงเทพฯ</div>
                                               <img class = "pay-img pay-img2 pay-m-t-3 pay-m-l-3" 
                                               src="/bizcar/assets/images/bb.png" width="35" height="35">
                                               <div class = "payment-font2 pay-m-l-6 pay-m-t-2" >123-4-56789-0</div>
                                               <div class = "payment-font2 pay-m-l-9 pay-m-t-2" >บ.ยูสคาร์จริงใจ</div>
                                            </div>
                                        </label> 
                                    </div>
                                </div>

                                <div class="row pay-m-t-4">
                                   <div class="col-xl-12">
                                       <input type="radio" id="test3" name="radio-group" hecked>                              
                                       <label for="test3">
                                            <div class="d-flex flex-xl-row flex-md-row flex-column pay-m-t">
                                               <div class="payment-font2 ml-3">กรุงไทย</div>
                                               <img class = "pay-m-t-3 pay-img3 pay-m-l-4" 
                                               src="/bizcar/assets/images/ktb.png" width="30" height="30">
                                               <div class = "payment-font2 pay-m-l-7 pay-m-t-2" >123-4-56789-0</div>
                                               <div class = "payment-font2 pay-m-l-10 pay-m-t-2" >บ.ยูสคาร์จริงใจ</div>
                                            </div>
                                        </label> 
                                    </div>
                                </div>
                                               
                                            

                               <div class="row">
                                   <div class="col-xl-6  col-md-6 pt-4">
                                      <div class="">วันที่โอน</div>
                                      <div class="pt-2">
                                        <input type="date" name="" class="payment-form2">
                                      </div>
                                   </div>
                                   <div class="col-xl-3 col-md-3 pt-4">
                                      <div class="">เวลา</div>
                                      <div class="pt-2">
                                        <input type="text" name="" class="payment-form2">
                                      </div>
                                   </div>
                                   <div class="col-xl-3 col-md-3  pt-4">
                                      <div class="text-white">ad</div>
                                      <div class="pt-2">
                                        <input type="text" name="" class="payment-form2">
                                      </div>
                                   </div>
                               </div>

                               <div class="row pt-4">
                                   <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                      <div class="">หลักฐานการโอน</div>
                                      <div class="pt-2">
                                        <input type="file" class = "w-100" name="">
                                      </div>
                                   </div>
                               </div>
                               
                               <div class="row pt-4">
                                   <div class="col-12">
                                        <a href="#" class="btn-yellow-pay skip w-100">
                                        <span class="hover-bg reset">
                                          <span class="hover-text reset"><b class="text-btn-yellow-pay">แจ้งชำระเงิน</b></span>
                                        </span>
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                   </div>
                               </div>

                            </li>
                          </ul>
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
