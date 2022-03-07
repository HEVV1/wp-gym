(jQuery)(function(){
  (jQuery)('.menu-button', '.block-menu').on('click', function(){
    (jQuery)('.menu-hidden', '.block-menu').animate({
      height: 'toggle'
    }, 200)
  });
});