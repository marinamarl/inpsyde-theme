jQuery(document).ready(function($) {
  var menu = "#mobile-menu",
      nav = '#mobile-nav'
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

!function(i){wp.customize("blogname",function(t){t.bind(function(t){i(".site-title a").text(t)})}),wp.customize("blogdescription",function(t){t.bind(function(t){i(".site-description").text(t)})}),wp.customize("header_textcolor",function(t){t.bind(function(t){"blank"===t?i(".site-title, .site-description").css({clip:"rect(1px, 1px, 1px, 1px)",position:"absolute"}):(i(".site-title, .site-description").css({clip:"auto",position:"relative"}),i(".site-title a, .site-description").css({color:t}))})})}(jQuery);
!function(){var n,e,a,t,s,i;if((n=document.getElementById("site-navigation"))&&void 0!==(e=n.getElementsByTagName("button")[0]))if(void 0!==(a=n.getElementsByTagName("ul")[0])){for(a.setAttribute("aria-expanded","false"),-1===a.className.indexOf("nav-menu")&&(a.className+=" nav-menu"),e.onclick=function(){-1!==n.className.indexOf("toggled")?(n.className=n.className.replace(" toggled",""),e.setAttribute("aria-expanded","false"),a.setAttribute("aria-expanded","false")):(n.className+=" toggled",e.setAttribute("aria-expanded","true"),a.setAttribute("aria-expanded","true"))},s=0,i=(t=a.getElementsByTagName("a")).length;s<i;s++)t[s].addEventListener("focus",l,!0),t[s].addEventListener("blur",l,!0);!function(e){var a,t,s=n.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");if("ontouchstart"in window)for(a=function(e){var a,t=this.parentNode;if(t.classList.contains("focus"))t.classList.remove("focus");else{for(e.preventDefault(),a=0;a<t.parentNode.children.length;++a)t!==t.parentNode.children[a]&&t.parentNode.children[a].classList.remove("focus");t.classList.add("focus")}},t=0;t<s.length;++t)s[t].addEventListener("touchstart",a,!1)}()}else e.style.display="none";function l(){for(var e=this;-1===e.className.indexOf("nav-menu");)"li"===e.tagName.toLowerCase()&&(-1!==e.className.indexOf("focus")?e.className=e.className.replace(" focus",""):e.className+=" focus"),e=e.parentElement}}();
/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
