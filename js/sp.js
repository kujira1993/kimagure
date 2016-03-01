jQuery(function($) {
  //スライダー処理
  $(document).ready(function(){
    $('.bxslider').bxSlider({
      pagerCustom: '#bx-pager',
      preloadImages: 'visible'
    });
  });
  // $('#img2,#img3').delay(300).css('display','block');

});