/* 
 * Javascript exclusive for WP Dashboard
 */
(function($){
// This script will display the metaboxes only on the home-page template   
$(function() {
    $('#post_template').change(function() {
        $('#facility-gallery').toggle($(this).val() == 'single-facilities.php');
    }).change();
});
})(jQuery);

