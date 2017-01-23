/* 
 * Little thang to activate Magnific Popup
 */

jQuery(document).ready(function(){
    
    setTimeout(function(){
   
        jQuery.magnificPopup.open({
            items: {src: '#subscribe-popup'},type: 'inline'}, 0);
    }, 5000);
});