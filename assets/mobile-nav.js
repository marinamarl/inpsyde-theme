jQuery(document).ready(function($) {
  let menu = "#mobile-menu"
  let  nav = '#mobile-nav'
 $(menu).on("click", function() {
   if($(nav).hasClass('active')){
     $(nav).animate({ bottom: -250 }, 'slow', function() {
     })
     $(menu).html('MENU')
     $(nav).toggleClass('active')
   }else{
     $(nav).toggleClass('active')
     $(menu).html('X')
     $(nav).animate({ bottom: 0 }, 'slow', function() {
     })
   }
  })
})
