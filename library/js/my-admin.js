/* 
 * Javascript exclusive for WP Dashboard
 */
(function($){
// This script will display the metaboxes only on the home-page template   
$(function() {
    $('#page_template').change(function() {
        $('#facility-gallery').toggle($(this).val() == 'front-page.php');
    }).change();
});
})(jQuery);

