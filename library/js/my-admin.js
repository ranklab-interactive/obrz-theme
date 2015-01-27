/* 
 * Javascript exclusive for WP Dashboard
 */
(function($){
// This script will reveal metaboxes depending on the page that you want it to appear. It currently does not consider multi page functionality, however, this can be implemented by changing the opperator.
$(function() {
    $('#post_template').change(function() {
        $('#facility-gallery').toggle($(this).val() == 'single-facilities.php');
    }).change();
});
$(function() {
    //The first JS Selector will change depending on if it is a page, post, or custom post. For Pages and templates, use '#page_template', and for posts/custom post types use '#post_template'.
    //The second selector is the ID of the metabox that you setup when creating the metabox in the meta-boxes.php file. 
    //The third selector will be the file name of the template you are changing. This will vary depending on how you name your file.
    $('#page_template').change(function() {
        $('#bigheading_metaboxes').toggle($(this).val() === 'template-bighead.php' || $(this).val() === 'template-contact.php');
    }).change();
});
})(jQuery);

