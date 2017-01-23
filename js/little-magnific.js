/* 
 * Little thang to activate Magnific Popup
 */

jQuery(document).ready(function(){
    if(sessionStorage["PopupShown"] != 'yes'){ 
         showPopup();
     };
});

function showPopup() {
    setTimeout(function(){
   
        jQuery.magnificPopup.open({
            items: {src: '#subscribe-popup'},type: 'inline'}, 0);
    }, 5000);
    sessionStorage["PopupShown"] = 'yes';
};