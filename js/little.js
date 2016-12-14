/* 
 * Little thang to add movement to elements on hover
 */

jQuery(document).ready(function(){
    jQuery('#blog>article').hover(
       function(){ jQuery(this).addClass('translate-y-ten') },
       function(){ jQuery(this).removeClass('translate-y-ten') });
});