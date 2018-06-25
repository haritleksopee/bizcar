    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/vendor/chatbox.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



	<script>
	  $( function() {
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 0,
	      max: 500,
	      values: [ 75, 300 ],
	      slide: function( event, ui ) {
	        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	      }
	    });
	    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	  } );


	  //////////////////////////////////////////////////////////
	  function myFunction(x) {
          x.classList.toggle("home-star");
          x.classList.toggle("star-yellow");
      }
// SHOW-PRODUCT


   $( '.stand-frame' ).on('click' , function () {
      var expandImg = $(this).attr("src");
      $(".showcase").attr('src', expandImg);
      var id = $(this).attr("id");;
      $('.showcase').attr('name', id);
    });

      window.onload = function(){

          $( '.mySlides' ).each( function () {
             var iw = $(this).width();
             var ih = $(this).height();
             if(iw > ih){
               $(this).css({'width':'auto'});
               $(this).css({'height':100+'%'});
             }
             else if(ih > iw){
               $(this).css({'width':100+'%'});
               $(this).css({'height':'auto'});
             }
             else if(ih == iw){
               $(this).css({'width':100+'%'});
               $(this).css({'height':'auto'});
             }
          });

          $('.gallery-right').each( function (){
            if(window.matchMedia("(max-width: 768px)").matches){
              var iw = $(this).width();
              iw = iw * 0.7;
              iw3 = iw / 4;
              $(this).css({'height':iw+'px'});
              $('.gallery-left').css({'height':iw3+'px'});
              $('.gallery-col').css({'height':iw+'px'});
              iw2 = iw / 4;
              $('.gallery-left-col').css({'height':iw2+'px'});
              $('.gallery-left-col').css({'margin-bottom':0 +'px'});
            }
            else{
              var iw = $(this).width();
              iw = iw * 0.7;
              $(this).css({'height':iw+'px'});
              $('.gallery-left').css({'height':iw+'px'});
              $('.gallery-col').css({'height':iw+'px'});
              iw2 = iw / 4.2;
              iw3 = iw / 65;
              $('.gallery-left-col').css({'height':iw2+'px'});
              $('.gallery-left-col').css({'margin-bottom':iw3+'px'});
            }

          });

          $( '.next' ).on('click' , function () {

            if( $('.showcase').attr('name') == $('.stand-frame').last().attr('id')){
              var slide = $('.stand-frame').first().attr('id');
              $('.showcase').attr('name' , slide);
              slide = '#' + slide;
              var img = $(slide).attr('src');
              $(".showcase").attr('src', img);
            }
            else{
              var slide = $('.showcase').attr('name');
              slide = slide.substr(6,);
              slide = Number(slide);
              slide = slide + 1;
              slide = 'slide-' + slide;
              $('.showcase').attr('name' , slide);
              slide = '#' + slide;
              var img = $(slide).attr('src');
              $(".showcase").attr('src', img);
            }

          });

          $( '.previous' ).on('click' , function () {
            if( $('.showcase').attr('name') == $('.stand-frame').first().attr('id')){
              var slide = $('.stand-frame').last().attr('id');
              $('.showcase').attr('name' , slide);
              slide = '#' + slide;
              var img = $(slide).attr('src');
              $(".showcase").attr('src', img);
            }
            else{
              var slide = $('.showcase').attr('name');
              slide = slide.substr(6,);
              slide = Number(slide);
              slide = slide - 1;
              slide = 'slide-' + slide;
              $('.showcase').attr('name' , slide);
              slide = '#' + slide;
              var img = $(slide).attr('src');
              $(".showcase").attr('src', img);
            }
          });

          $( '.visited-product' ).each( function () {
             var iw = $(this).width();
             var ih = $(this).height();
             if(iw > ih){
               $(this).css({'width':'auto'});
               $(this).css({'height':100+'%'});
             }
             else if(ih > iw){
               $(this).css({'width':100+'%'});
               $(this).css({'height':'auto'});
             }
             else if(ih == iw){
               $(this).css({'width':100+'%'});
               $(this).css({'height':'auto'});
             }
          });
          $('.visited-frame').each( function (){
            if(window.matchMedia("(max-width: 320px)").matches){
              var iw = $(this).width();
              iw = iw * 0.7;
              $(this).css({'height':iw+'px'});
              $('.visited-col').css({'height':iw+'px'});
              iw2 = iw / 1.8;
              $('.visited-details').css({'height':iw2+'px'});
              iw3 = iw / 3;
              $('.visited-details-320').css({'height':iw3+'px'});
            }
            else{
              var iw = $(this).width();
              iw = iw * 0.7;
              $(this).css({'height':iw+'px'});
              $('.visited-col').css({'height':iw+'px'});
              iw2 = iw / 1.9;
              $('.visited-details').css({'height':iw2+'px'});
            }
          });


      }



	  </script>