/* 
 * Little thang to activate Magnific Popup
 */

jQuery(document).ready(function(){
    jQuery('.open-subscribe-popup').magnificPopup({
            type:'inline',
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
          });
});