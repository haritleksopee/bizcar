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
        <div class="container addcar-p-b">

            <div class="row pt-4">
                <div class="col-12">
                    <div><h3>รายละเอียดรถ</h3></div>  
                    <div><hr class="border-hr"></div>
                </div>
            </div>   

            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6 col-12 mt-2">
                    <input type="text" name="" class="addcar-form" placeholder="หัวข้อที่ต้องการประกาศ">
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6 mt-2">
                    <input type="text" name="" class="addcar-form" placeholder="ราคาที่ี่ต้องการขาย">
                </div>
            </div>

            <div class="row pt-4">
               <div class=" col-12">
                 <textarea class="addcar-comment" placeholder="กรอกข้อความโฆษณารถของคุณ"></textarea>
               </div>
            </div>

            <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">ยี่ห้อ</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">รุ่น</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
            </div>

            <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">ปีที่ผลิต</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">ระบบเกียร์</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
            </div>

            <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">ความจุเครื่อง (CC)</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">โฉมรถยนต์</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
            </div>

            <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">รายละเอียดรุ่น</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">อุปกรณ์เสริม</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
            </div>

            <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">เลขไมล์</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                      <select class="selected-class">
                        <option value="volvo">ปีที่จดทะเบียน</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
            </div>

            <div class="row pt-4">
              <div class="col-12">
                  <div class="">สี</div>
                     <form>
                        <div class="d-flex flex-lg-row flex-row flex-wrap">
                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark1"></span>  
                              </label><br>
                              <div class="addcar-p-1 addcar-font">สีขาว</div>
                            </div>

                            <div class="addcar-w-h">
                               <label class="addcar-select radio-inline">
                                     <input type="radio" name="radio">
                                     <span class="checkmark2"></span>
                                </label><br>
                                 <div class="addcar-p-2 addcar-font">สีครีม</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark3"></span>  
                              </label><br>
                              <div class="addcar-p-3 addcar-font">สีเงิน</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark4"></span>  
                              </label><br>
                              <div class="addcar-p-4 addcar-font">สีเทา</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark5"></span>  
                              </label><br>
                              <div class="addcar-p-5 addcar-font">สีฟ้า</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark6"></span>  
                              </label><br>
                              <div class="addcar-p-6 addcar-font">สีน้ำเงิน</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark7"></span>  
                              </label><br>
                              <div class="addcar-p-7 addcar-font">สีเขียว</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark8"></span>  
                              </label><br>
                              <div class="addcar-p-8 addcar-font">สีทอง</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark9"></span>  
                              </label><br>
                              <div class="addcar-p-9 addcar-font">สีเหลือง</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark10"></span>  
                              </label><br>
                              <div class="addcar-p-10 addcar-font">สีส้ม</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark11"></span>  
                              </label><br>
                              <div class="addcar-p-11 addcar-font">สีแดง</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark12"></span>  
                              </label><br>
                              <div class="addcar-p-12 addcar-font">สีชมพู</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark13"></span>  
                              </label><br>
                              <div class="addcar-p-13 addcar-font">สีม่วง</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark14"></span>  
                              </label><br>
                              <div class="addcar-p-14 addcar-font">สีน้ำตาล</div>
                            </div>

                            <div class="addcar-w-h">
                              <label class="addcar-select radio-inline">
                                   <input type="radio" name="radio">
                                   <span class="checkmark15"></span>  
                              </label><br>
                              <div class="addcar-p-15 addcar-font">สีอื่นๆ</div>
                            </div>
                       </div>
                    </form>
                </div>
            </div>

            <div class="row addcar-p-t">
                <div class="col-12">
                    <div><h3>รูปรถ</h3></div>  
                    <div><hr class="border-hr"></div>
                </div>
            </div>   

            <div class="row pt-4">
                <div class="col-12">
                    นามสกุลไฟล์รูปภาพที่รองรับคือ JPG และ JPEG เท่านั้น โดยแต่ละไฟล์รูปภาพจะต้องมีขนาดระหว่าง 10 KB แต่ไม่เกิน 12 MB    
                </div>
            </div>  

            <div class="row pt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body addcar-padding">
                            <div class="row"> 
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top2">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top2">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top2">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                            </div>
                            <div class="row pb-3">
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top2">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top2">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                               <div class="col-xl-4 col-lg-4 col-md-4 col-12 addcar-padding-top2">
                                  <span class="btn addcar-upload upload-file">
                                      <input type="file">
                                  </span>
                               </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row pt-5">
                  <div class="col-12">
                      <div><h3>ข้อมูลผู้ขาย</h3></div>  
                      <div><hr class="border-hr"></div>
                  </div>
              </div> 

              <div class="row">
                  <div class="col-xl-4 col-md-6 col-lg-4 col-12 mt-4">
                    <form>
                      <div class="btn-group w-100">
                          <button type="button" class="btn btn-facebook-addcar">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-facebook-addcar w-100">Sign in with Facebook</button>
                      </div>
                    </form>
                  </div>
                  <div class="col-xl-4 col-md-6 col-lg-4 col-12 mt-4">
                      <div class="btn-group w-100">
                          <button type="button" class="btn btn-gmail-addcar">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-gmail-addcar w-100">Sign in with Google+</button>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 pt-4">
                      <input type="text" name="" class="addcar-form" placeholder="ชื่อ-นามสกุล">
                  </div>
                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 pt-4">
                      <input type="text" name="" class="addcar-form" placeholder="อีเมล์">
                  </div>
              </div>

              <div class="row">
                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 pt-4">
                      <input type="text" name="" class="addcar-form" placeholder="หมายเลขโทรศัพท์">
                  </div>
                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 pt-4">
                      <input type="text" name="" class="addcar-form" placeholder="หมายเลขบัตรประชาชน">
                  </div>
              </div>

             <div class="row pt-5">
                 <div class="col-xl-2 col-lg-3 col-md-3 col-12">
                      <a href="#" class="btn-yellow-addcar skip w-100">
                      <span class="hover-bg reset">
                        <span class="hover-text reset"><b class="text-btn-yellow-addcar">ยืนยัน</b></span>
                      </span>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
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
