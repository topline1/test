<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

require_once('wp-bootstrap-navwalker.php');


/*start of the theme control panel*/

$themename = "اعدادات القالب";

$shortname = "tl4s";

$zv_themefoldername = 'html5blank-stable';



$options = array (

array( "name" => "اعدادات الفوتر",
      "type" => "title"),

array( "type" => "closetitle"),

array( "type" => "open"),




	array( "name" => "رابط الفيسبوك",

	"desc" => "",

	"id" => $shortname."_facebook",

	"type" => "text",

	"std" => ""),
    
    array( "name" => "رابط لينكدان",

	"desc" => "",

	"id" => $shortname."_linkedin",

	"type" => "text",

	"std" => ""),
	
	array( "name" => "رابط التويتر",

	"desc" => "",

	"id" => $shortname."_tweet",

	"type" => "text",

	"std" => ""),	

    
	array( "name" => "رابط جوجل",

	"desc" => "",

	"id" => $shortname."_google",

	"type" => "text",

	"std" => ""),
    
	array( "name" => "من نحن",

	"desc" => "",

	"id" => $shortname."_about",

	"type" => "textarea",

	"std" => ""),
    
	array( "name" => "من نحن (english)",

	"desc" => "",

	"id" => $shortname."_about_en",

	"type" => "textarea",

	"std" => ""),
    array( "name" => "عنوان قسم التظليل",

	"desc" => "",

	"id" => $shortname."_film",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "عنوان قسم التظليل(english)",

	"desc" => "",

	"id" => $shortname."_film_en",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "نص قسم التظليل",

	"desc" => "",

	"id" => $shortname."_film_text",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "نص قسم التظليل(english)",

	"desc" => "",

	"id" => $shortname."_film_text_en",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "عنوان قسم المقالات المختاره",

	"desc" => "",

	"id" => $shortname."_art",

	"type" => "textarea",

	"std" => ""),
    
	array( "name" => "عنوان قسم المقالات المختاره (english)",

	"desc" => "",

	"id" => $shortname."_art_en",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "قسم كيف تعمل",

	"desc" => "",

	"id" => $shortname."_it-work",

	"type" => "textarea",

	"std" => ""),
    
	array( "name" => "قسم كيف تعمل (english)",

	"desc" => "",

	"id" => $shortname."_it-work_en",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "عنوان اراء العملاء",

	"desc" => "",

	"id" => $shortname."_testi",

	"type" => "textarea",

	"std" => ""),
    
	array( "name" => "عنوان اراء العملاء  (english)",

	"desc" => "",

	"id" => $shortname."_testi_en",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "حساب تويور الخاص",

	"desc" => "",

	"id" => $shortname."_twitter_acc",

	"type" => "text",

	"std" => ""),
    
    array( "name" => " عنوان قسم الفبدبو ",

	"desc" => "",

	"id" => $shortname."_video",

	"type" => "textarea",

	"std" => ""),
    
	array( "name" => "  عنوان قسم الفبدبو  (english)",

	"desc" => "",

	"id" => $shortname."_video_en",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "عنوان قسم اتصل بنا",

	"desc" => "",

	"id" => $shortname."_contact",

	"type" => "textarea",

	"std" => ""),
    
	array( "name" => "عنوان قسم اتصل بنا (english)",

	"desc" => "",

	"id" => $shortname."_contact_en",

	"type" => "textarea",

	"std" => ""),
    
    
    array( "name" => " وصف عن الموقع  (english)",

	"desc" => "",

	"id" => $shortname."_footer_about_desc_en",

	"type" => "textarea",

	"std" => ""),
    
    array( "name" => "  وصف عن الموقع ",

	"desc" => "",

	"id" => $shortname."_footer_about_desc",

	"type" => "textarea",

	"std" => ""),

    
    array( "name" => "عنوان  (english)",

	"desc" => "",

	"id" => $shortname."_footer_address_en",

	"type" => "text",

	"std" => ""),

    
    array( "name" => "عنوان  ",

	"desc" => "",

	"id" => $shortname."_footer_address",

	"type" => "text",

	"std" => ""),
    
    array( "name" => "رقم الهاتف  (english) ",

	"desc" => "",

	"id" => $shortname."_footer_mob_num_en",

	"type" => "text",

	"std" => ""),
    
    array( "name" => "رقم الهاتف ",

	"desc" => "",

	"id" => $shortname."_footer_mob_num",

	"type" => "text",

	"std" => ""),
    
    array( "name" => "رقم فاكس  (english)",

	"desc" => "",

	"id" => $shortname."_footer_fax_en",

	"type" => "text",

	"std" => ""),
    
    array( "name" => "رقم فاكس  ",

	"desc" => "",

	"id" => $shortname."_footer_fax",

	"type" => "text",

	"std" => ""),
    
    array( "name" => "البريد الاليكتروني  (english)",

	"desc" => "",

	"id" => $shortname."_footer_email_en",

	"type" => "text",

	"std" => ""),
    
    array( "name" => " البريد الاليكتروني   ",

	"desc" => "",

	"id" => $shortname."_footer_email",

	"type" => "text",

	"std" => ""),
    
array( "type" => "close"),





);

function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
if ( 'save' == $_REQUEST['action'] ) {

foreach ($options as $value) {
update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); }
}
header("Location: themes.php?page=functions.php&saved=true");
die;
} else if( 'reset' == $_REQUEST['action'] ) {
foreach ($options as $value) {
delete_option( $value['id'] );
}
header("Location: themes.php?page=functions.php&reset=true");
die;
}
}
add_theme_page($themename." Options", "".$themename." لوحة التحكم", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_admin() {
global $themename, $shortname, $options, $glito_categories;

if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' حفظ التعديلات.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' استعادة الافتراضيات.</strong></p></div>';
?>
<div class="wrap">
<h2><?php echo $themename; ?> لوحة التحكم</h2>
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "info":
$zv_themepageurl = 'tl4s';
?>
<?php
echo '</td></tr>';
break;
case "closetitle":
echo '</table>';
break;
case "open":
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#f4f4f4; padding:10px;">
<?php break;
case "close":
?>
</table><br />
<?php break;
case 'text':
?>
<tr class="form-field form-required">
<td width="30%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="70%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option($value['id'] ) != '') { echo htmlspecialchars(stripslashes(get_option($value['id']))); } else { echo $value['std']; } ?>" /></td>
</tr>
<tr><?php break;
case 'textarea':
?>
<tr class="form-field form-required">
<td width="30%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="70%"><textarea style="width:400px;height:200px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php if ( get_option($value['id']) != '') { echo htmlspecialchars(stripslashes(get_option($value['id']))); }else{ echo $value['std']; } ?></textarea></td>
</tr>
<tr>
<?php break;
}
}
?>
<p class="submit" style="display:inline">

<input name="save" type="submit" value="حفظ الاعدادات" />

<input type="hidden" name="action" value="save" />

</form><form style="display:inline" method="post">

<p class="submit" style="display:inline">

<input name="reset" type="submit" value="استعادة الافتراضيات" />

<input type="hidden" name="action" value="reset" />

</p>

</form>

 

<?php

}



add_action('admin_menu', 'mytheme_add_admin');

/*end of the theme control panel*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'nav navbar-nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'depth'           => 2,
		'walker'          => new wp_bootstrap_navwalker()
		)
	);
}

function footer_menu()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'extra-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'footer-menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'depth'           => 2,
		'walker'          => new wp_bootstrap_navwalker()
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), ''); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!
        
        wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), ''); // Enqueue it!
        
        wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), '', true); // Enqueue it!
        
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true); // Enqueue it!
        
        wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '', true); // Enqueue it!

        wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '', true); // Enqueue it!bootstrap.min.js
        
        wp_register_script('lightbox', get_template_directory_uri() . '/js/html5lightbox.js', array('jquery'), '', 'true'); // Custom scripts
        wp_enqueue_script('lightbox'); // Enqueue it!
        
        wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true); // Enqueue it!bootstrap.min.js
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!
    
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '', 'all');
    wp_enqueue_style('font-awesome'); // Enqueue it!
    
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css', array(), '', 'all');
    wp_enqueue_style('animate'); // Enqueue it!
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!
    
    wp_register_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '', 'all');
    wp_enqueue_style('owl.carousel'); // Enqueue it!
    
    wp_register_style('owl.theme.default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '', 'all');
    wp_enqueue_style('owl.theme.default'); // Enqueue it!
    
    wp_register_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), '', 'all');
    wp_enqueue_style('fancybox'); // Enqueue it!
    
   if(get_bloginfo('language')==="en-US"){
        wp_register_style('html5blank', get_template_directory_uri() . '/css/style-en.css', array(), '1.0', 'all');
        wp_enqueue_style('html5blank'); // Enqueue it!
    }else{
        wp_register_style('html5blank', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
        wp_enqueue_style('html5blank'); // Enqueue it!
    }
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}


//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_pages_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
function create_pages_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'اقسام المنتجات' ,'pages'),
    'singular_name' => _x( 'القسم' ,'page'),
    'search_items' =>  __( 'بحث فى الاقسام' ),
    'all_items' => __( 'كل الاقسام' ),
    'parent_item' => __( 'القسم الرئيسي' ),
    'parent_item_colon' => __( 'القسم الرئيسي:' ),
    'edit_item' => __( 'تعديل قسم' ), 
    'update_item' => __( 'تحديث قسم' ),
    'add_new_item' => __( 'اضافه قسم' ),
    'new_item_name' => __( 'اسم القسم' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('products_cat',array('page'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'products' ),
  ));
 
}

// Register Custom Post Type
function products_post_type() {


	$labels = array(
		'name'                  => _x( 'منتجات', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'منتج', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'المنتجات', 'text_domain' ),
		'name_admin_bar'        => __( 'المنتجات', 'text_domain' ),
		'archives'              => __( 'ارشيف المنتجات', 'text_domain' ),
		'attributes'            => __( 'خيارات المنتج', 'text_domain' ),
		'parent_item_colon'     => __( 'تابع لـ :', 'text_domain' ),
		'all_items'             => __( 'كل المنتجات', 'text_domain' ),
		'add_new_item'          => __( 'اضف منتج جديد', 'text_domain' ),
		'add_new'               => __( 'اضافة منتج', 'text_domain' ),
		'new_item'              => __( 'اضافة منتج', 'text_domain' ),
		'edit_item'             => __( 'تعديل منتج', 'text_domain' ),
		'update_item'           => __( 'رفع منتج', 'text_domain' ),
		'view_item'             => __( 'عرض المنتج', 'text_domain' ),
		'view_items'            => __( 'عرض المنتجات', 'text_domain' ),
		'search_items'          => __( 'بحث فى المنتجات', 'text_domain' ),
		'not_found'             => __( 'لا يوجد منتجات', 'text_domain' ),
		'not_found_in_trash'    => __( 'لا توجد منتجات فى سلة المهملات', 'text_domain' ),
		'featured_image'        => __( 'صورة المنتج', 'text_domain' ),
		'set_featured_image'    => __( 'اختيار صورة المنتج', 'text_domain' ),
		'remove_featured_image' => __( 'حذف صورة المنتج', 'text_domain' ),
		'use_featured_image'    => __( 'استخدم كصورة للمنتج', 'text_domain' ),
		'insert_into_item'      => __( 'اضافة للمنتج', 'text_domain' ),
		'uploaded_to_this_item' => __( 'رفع للمنتج', 'text_domain' ),
		'items_list'            => __( 'قائمة المنتجات', 'text_domain' ),
		'items_list_navigation' => __( 'تصفح قائمة المنتجات', 'text_domain' ),
		'filter_items_list'     => __( 'ترتيب حسب', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'منتج', 'text_domain' ),
		'description'           => __( 'تفاصيل المنتج', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'products_cat'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

}

add_action( 'init', 'products_post_type', 0 );




/* gallery things */


//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_gallery_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_gallery_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'اقسام البوم الصور' ,'pages'),
    'singular_name' => _x( 'القسم' ,'page'),
    'search_items' =>  __( 'بحث فى الاقسام' ),
    'all_items' => __( 'كل الاقسام' ),
    'parent_item' => __( 'القسم الرئيسي' ),
    'parent_item_colon' => __( 'القسم الرئيسي:' ),
    'edit_item' => __( 'تعديل قسم' ), 
    'update_item' => __( 'تحديث قسم' ),
    'add_new_item' => __( 'اضافه قسم' ),
    'new_item_name' => __( 'اسم القسم' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('gallery_cat',array('page'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'gallery' ),
  ));
 
}

// Register Custom Post Type
function gallery_post_type() {


	$labels = array(
		'name'                  => _x( 'صور', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'صوره', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'الصور', 'text_domain' ),
		'name_admin_bar'        => __( 'الصور', 'text_domain' ),
		'archives'              => __( 'ارشيف الصور', 'text_domain' ),
		'attributes'            => __( 'خيارات الصوره', 'text_domain' ),
		'parent_item_colon'     => __( 'تابع لـ :', 'text_domain' ),
		'all_items'             => __( 'كل الصور', 'text_domain' ),
		'add_new_item'          => __( 'اضف صوره جديد', 'text_domain' ),
		'add_new'               => __( 'اضافة صوره', 'text_domain' ),
		'new_item'              => __( 'اضافة صوره', 'text_domain' ),
		'update_item'           => __( 'رفع صوره', 'text_domain' ),
		'view_item'             => __( 'عرض الصوره', 'text_domain' ),
		'view_items'            => __( 'عرض الصور', 'text_domain' ),
		'search_items'          => __( 'بحث فى الصور', 'text_domain' ),
		'not_found'             => __( 'لا يوجد صور', 'text_domain' ),
		'not_found_in_trash'    => __( 'لا توجد صور فى سلة المهملات', 'text_domain' ),
		'featured_image'        => __( 'الصوره', 'text_domain' ),
		'set_featured_image'    => __( 'اختيار صورة', 'text_domain' ),
		'remove_featured_image' => __( 'حذف صورة', 'text_domain' ),
		'use_featured_image'    => __( 'استخدم كصورة', 'text_domain' ),
		'insert_into_item'      => __( 'اضافة للصوره', 'text_domain' ),
		'uploaded_to_this_item' => __( 'رفع للصوره', 'text_domain' ),
		'items_list'            => __( 'قائمة الصور', 'text_domain' ),
		'items_list_navigation' => __( 'تصفح قائمة الصور', 'text_domain' ),
		'filter_items_list'     => __( 'ترتيب حسب', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'صوره', 'text_domain' ),
		'description'           => __( 'تفاصيل الصوره', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'gallery_cat'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-camera',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery', $args );

}

add_action( 'init', 'gallery_post_type', 0 );

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_work_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_work_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'اقسام البوم صور ' ,'pages'),
    'singular_name' => _x( 'القسم' ,'page'),
    'search_items' =>  __( 'بحث فى الاقسام' ),
    'all_items' => __( 'كل الاقسام' ),
    'parent_item' => __( 'القسم الرئيسي' ),
    'parent_item_colon' => __( 'القسم الرئيسي:' ),
    'edit_item' => __( 'تعديل قسم' ), 
    'update_item' => __( 'تحديث قسم' ),
    'add_new_item' => __( 'اضافه قسم' ),
    'new_item_name' => __( 'اسم القسم' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('work_cat',array('page'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'work' ),
  ));
 
}

function work_post_type() {


	$labels = array(
		'name'                  => _x( 'صور', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'صوره العمل', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'الصور العمل', 'text_domain' ),
		'name_admin_bar'        => __( 'الصور العمل', 'text_domain' ),
		'archives'              => __( 'ارشيف الصور العمل', 'text_domain' ),
		'attributes'            => __( 'خيارات الصوره العمل', 'text_domain' ),
		'parent_item_colon'     => __( 'تابع لـ :', 'text_domain' ),
		'all_items'             => __( 'كل الصور العمل', 'text_domain' ),
		'add_new_item'          => __( 'اضف صوره جديد العمل', 'text_domain' ),
		'add_new'               => __( 'اضافة صوره العمل', 'text_domain' ),
		'new_item'              => __( 'اضافة صوره العمل', 'text_domain' ),
		'update_item'           => __( 'رفع صوره العمل', 'text_domain' ),
		'view_item'             => __( 'عرض الصوره العمل', 'text_domain' ),
		'view_items'            => __( 'عرض الصور العمل', 'text_domain' ),
		'search_items'          => __( 'بحث فى الصور العمل', 'text_domain' ),
		'not_found'             => __( 'لا يوجد صور العمل', 'text_domain' ),
		'not_found_in_trash'    => __( 'لا توجد صور فى سلة المهملات العمل', 'text_domain' ),
		'featured_image'        => __( 'الصوره العمل', 'text_domain' ),
		'set_featured_image'    => __( 'اختيار صورة العمل', 'text_domain' ),
		'remove_featured_image' => __( 'حذف صورة العمل', 'text_domain' ),
		'use_featured_image'    => __( 'استخدم كصورة العمل', 'text_domain' ),
		'insert_into_item'      => __( 'اضافة للصوره العمل', 'text_domain' ),
		'uploaded_to_this_item' => __( 'رفع للصوره العمل', 'text_domain' ),
		'items_list'            => __( 'قائمة الصور العمل', 'text_domain' ),
		'items_list_navigation' => __( 'تصفح قائمة الصور العمل', 'text_domain' ),
		'filter_items_list'     => __( 'ترتيب حسب', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'صوره العمل', 'text_domain' ),
		'description'           => __( 'تفاصيل الصوره العمل', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'work_cat'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'work', $args );

}

add_action( 'init', 'work_post_type', 0 ); 




function video_post_type() {


	$labels = array(
		'name'                  => _x( 'فيديو', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'فيديو', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'فيديو ', 'text_domain' ),
		'name_admin_bar'        => __( 'فيديو', 'text_domain' ),
		'archives'              => __( 'ارشيف فيديو', 'text_domain' ),
		'attributes'            => __( 'خيارات فيديو', 'text_domain' ),
		'parent_item_colon'     => __( 'تابع لـ :', 'text_domain' ),
		'all_items'             => __( 'كل الفيديو', 'text_domain' ),
		'add_new_item'          => __( 'اضف فيديو جديد', 'text_domain' ),
		'add_new'               => __( 'اضافة فيديو', 'text_domain' ),
		'new_item'              => __( 'اضافة فيديو', 'text_domain' ),
		'update_item'           => __( 'رفع فيديو', 'text_domain' ),
		'view_item'             => __( 'عرض فيديو', 'text_domain' ),
		'view_items'            => __( 'عرض فيديو', 'text_domain' ),
		'search_items'          => __( 'بحث فى فيديو', 'text_domain' ),
		'not_found'             => __( 'لا يوجد فيديو', 'text_domain' ),
		'not_found_in_trash'    => __( 'لا توجد فيديو فى سلة المهملات', 'text_domain' ),
		'featured_image'        => __( 'فيديو', 'text_domain' ),
		'set_featured_image'    => __( 'اختيار فيديو', 'text_domain' ),
		'remove_featured_image' => __( 'حذف فيديو', 'text_domain' ),
		'use_featured_image'    => __( 'استخدم فيديو', 'text_domain' ),
		'insert_into_item'      => __( 'اضافة فيديو', 'text_domain' ),
		'uploaded_to_this_item' => __( 'رفع فيديو', 'text_domain' ),
		'items_list'            => __( 'قائمة فيديو', 'text_domain' ),
		'items_list_navigation' => __( 'تصفح قائمة فيديو', 'text_domain' ),
		'filter_items_list'     => __( 'ترتيب حسب', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'فيديو', 'text_domain' ),
		'description'           => __( 'تفاصيل فيديو', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'video', $args );

}

add_action( 'init', 'video_post_type', 0 );

function maps_post_type() {


	$labels = array(
		'name'                  => _x( 'الخرائط', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'الخرائط', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'الخرائط ', 'text_domain' ),
		'name_admin_bar'        => __( 'الخرائط', 'text_domain' ),
		'archives'              => __( 'ارشيف الخرائط', 'text_domain' ),
		'attributes'            => __( 'خيارات الخرائط', 'text_domain' ),
		'parent_item_colon'     => __( 'تابع لـ :', 'text_domain' ),
		'all_items'             => __( 'كل الخرائط', 'text_domain' ),
		'add_new_item'          => __( 'اضف الخرائط جديد', 'text_domain' ),
		'add_new'               => __( 'اضافة الخرائط', 'text_domain' ),
		'new_item'              => __( 'اضافة الخرائط', 'text_domain' ),
		'update_item'           => __( 'رفع الخرائط', 'text_domain' ),
		'view_item'             => __( 'عرض الخرائط', 'text_domain' ),
		'view_items'            => __( 'عرض الخرائط', 'text_domain' ),
		'search_items'          => __( 'بحث فى الخرائط', 'text_domain' ),
		'not_found'             => __( 'لا يوجد فيديو', 'text_domain' ),
		'not_found_in_trash'    => __( 'لا توجد فيديو فى سلة المهملات', 'text_domain' ),
		'featured_image'        => __( 'الخرائط', 'text_domain' ),
		'set_featured_image'    => __( 'اختيار الخرائط', 'text_domain' ),
		'remove_featured_image' => __( 'حذف الخرائط', 'text_domain' ),
		'use_featured_image'    => __( 'استخدم الخرائط', 'text_domain' ),
		'insert_into_item'      => __( 'اضافة الخرائط', 'text_domain' ),
		'uploaded_to_this_item' => __( 'رفع الخرائط', 'text_domain' ),
		'items_list'            => __( 'قائمة الخرائط', 'text_domain' ),
		'items_list_navigation' => __( 'تصفح قائمة الخرائط', 'text_domain' ),
		'filter_items_list'     => __( 'ترتيب حسب', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'الخرائط', 'text_domain' ),
		'description'           => __( 'تفاصيل الخرائط', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'maps', $args );

}

add_action( 'init', 'maps_post_type', 0 );


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}




/*------------------------------------*\
cpt location and meta
\*------------------------------------*/

// Register Custom Post Type
function location() {

	$labels = array(
		'name'                => _x( 'العناوين', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'العناوين', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'العناوين ', 'text_domain' ),
		'name_admin_bar'      => __( 'العناوين', 'text_domain' ),
		'parent_item_colon'   => __( 'العناوين', 'text_domain' ),
		'all_items'           => __( 'العناوين', 'text_domain' ),
		'add_new_item'        => __( 'اضافة تصنيف جديد', 'text_domain' ),
		'add_new'             => __( 'اضافة عنوان جديد ', 'text_domain' ),
		'new_item'            => __( 'اضافة عنوان جديد ', 'text_domain' ),
		'edit_item'           => __( 'تعديل عنوان', 'text_domain' ),
		'update_item'         => __( 'تحديث عنوان', 'text_domain' ),
		'view_item'           => __( 'مشاهدة العناوين', 'text_domain' ),
		'search_items'        => __( 'بحث فى العناوين', 'text_domain' ),
		'not_found'           => __( 'لا يوجد', 'text_domain' ),
		'not_found_in_trash'  => __( 'لا يوجد فى سلة المهملات', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'location', 'text_domain' ),
		'description'         => __( 'location', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'taxonomies'          => array(  'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
                'rewrite' => array(
                 	'slug'	=> 'location',
                        'with_front'  => false,
	        ),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
     'menu_icon' => get_bloginfo('template_directory') . '/img/map.png'
	);
	register_post_type( 'location', $args );

}

// Hook into the 'init' action
add_action( 'init', 'location' );


add_action('add_meta_boxes', 'smashing_add_post_meta_locations');

function smashing_add_post_meta_locations() {

    add_meta_box(
            'smashing-post-location', // Unique ID
            esc_html__('بيانات الفرع'), // Title
            'smashing_post_class_meta_locations', // Callback function
            'location', // Admin page (or post type)
            'normal', // Context
            'default'         // Priority
    );
}

/* Display the post meta box. */

function smashing_post_class_meta_locations($post) {
    ?>

        <?php wp_nonce_field(basename(__FILE__), 'smashing-post-location_nonce'); ?>

        <div>


            <div style="margin: 15px 0;">
                <label for="loc_address">العنوان</label>
                <input name="loc_address" type="text" value="<?= get_post_meta($post->ID, "loc_address", true); ?>">
            </div>

            <div style="margin: 15px 0;">
                <label for="loc_address">رابط الخريطة</label>
                <input name="loc_url" type="text" value="<?= get_post_meta($post->ID, "loc_url", true); ?>">
            </div>



 <div style="margin: 15px 0;">
             <label for="loc_address">خط الطول</label>
            <input name="loc_lat" type="text" placeholder="خط الطول" value="<?= get_post_meta($post->ID, 'loc_lat', true);?>">
            </div>

 <div style="margin: 15px 0;">
                <label for="loc_address">دائرة العرض</label>
            <input name="loc_long" type="text" placeholder="دائرة العرض" value="<?= get_post_meta($post->ID, 'loc_long', true);?>">
 </div>
        </div>


 <div style="margin: 15px 0;">
                <label for="loc_admin">اسم المسئول</label>
            <input name="loc_admin" type="text" placeholder="اسم المسئول" value="<?= get_post_meta($post->ID, 'loc_admin', true);?>">
            </div>
    
     <div style="margin: 15px 0;">
                <label for="loc_mobile">الجوال</label>
            <input name="loc_mobile" type="text" placeholder="الجوال" value="<?= get_post_meta($post->ID, 'loc_mobile', true);?>">
            </div>
    
         <div style="margin: 15px 0;">
                <label for="loc_tel">رقم الهاتف</label>
            <input name="loc_tel" type="text" placeholder="رقم الهاتف" value="<?= get_post_meta($post->ID, 'loc_tel', true);?>">
            </div>



    <?php
}

add_action('save_post', 'smashing_save_post_class_locations', 10, 2);
/* Save the meta box's post metadata. */

function smashing_save_post_class_locations($post_id, $post) {

    /* Verify the nonce before proceeding. */
    if (!isset($_POST['smashing-post-location_nonce']) || !wp_verify_nonce($_POST['smashing-post-location_nonce'], basename(__FILE__)))
        return $post_id;

    /* Get the post type object. */
    $post_type = get_post_type_object($post->post_type);

    /* Check if the current user has permission to edit the post. */
    if (!current_user_can($post_type->cap->edit_post, $post_id))
        return $post_id;


    /*
      session case
     */


    /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value = ( isset($_POST['loc_address']) ? $_POST['loc_address'] : '' );

    /* Get the meta key. */
    $meta_key = 'loc_address';


    /* Get the meta value of the custom field key. */
    $meta_value = get_post_meta($post_id, $meta_key, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ($new_meta_value && '' == $meta_value)
        add_post_meta($post_id, $meta_key, $new_meta_value, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value && $new_meta_value != $meta_value)
        update_post_meta($post_id, $meta_key, $new_meta_value);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value && $meta_value)
        delete_post_meta($post_id, $meta_key, $meta_value);




    /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value1 = ( isset($_POST['loc_desc']) ? $_POST['loc_desc'] : '' );

    /* Get the meta key. */
    $meta_key1 = 'loc_desc';


    /* Get the meta value of the custom field key. */
    $meta_value1 = get_post_meta($post_id, $meta_key1, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ($new_meta_value1 && '' == $meta_value1)
        add_post_meta($post_id, $meta_key1, $new_meta_value1, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value1 && $new_meta_value1 != $meta_value1)
        update_post_meta($post_id, $meta_key1, $new_meta_value1);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value1 && $meta_value1)
        delete_post_meta($post_id, $meta_key1, $meta_value1);

    
        

    /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value1 = ( isset($_POST['loc_desc']) ? $_POST['loc_desc'] : '' );

    /* Get the meta key. */
    $meta_key1 = 'loc_desc';


    /* Get the meta value of the custom field key. */
    $meta_value1 = get_post_meta($post_id, $meta_key1, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ($new_meta_value1 && '' == $meta_value1)
        add_post_meta($post_id, $meta_key1, $new_meta_value1, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value1 && $new_meta_value1 != $meta_value1)
        update_post_meta($post_id, $meta_key1, $new_meta_value1);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value1 && $meta_value1)
        delete_post_meta($post_id, $meta_key1, $meta_value1);

    $Address= get_post_meta($post_id, "loc_address", true);
//    if ($Address != '') {
//    $Address = urlencode($Address);
//    $request_url = "https://maps.googleapis.com/maps/api/geocode/xml?address='.$Address.'&key=AIzaSyCQXCmJQJiemTHEXNHT81GjEJTwyA49z2I";
//
//  $xml = simplexml_load_file($request_url) or die("url not loading");
//  $status = $xml->status;
//  if ($status=="OK") {
//      $Lat = $xml->result->geometry->location->lat;
//      $Lon = $xml->result->geometry->location->lng;
//      $Lat = "$Lat";
//      $Lng = "$Lon";
//      
//      $latitude=$Lat;
//      $longitude=$Lng;
//
//    }
//   }
    

    $new_meta_value2 = ( isset($_POST['loc_lat']) ? $_POST['loc_lat'] : '' );

    /* Get the meta key. */
    $meta_key2 = 'loc_lat';


    /* Get the meta value of the custom field key. */
    $meta_value2 = get_post_meta($post_id, $meta_key2, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ('' == $meta_value2)
        add_post_meta($post_id, $meta_key2, $latitude, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value2 && $new_meta_value2 != $meta_value2)
        update_post_meta($post_id, $meta_key2, $new_meta_value2);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value2 && $meta_value2)
        delete_post_meta($post_id, $meta_key2, $meta_value2);



    /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value3 = ( isset($_POST['loc_long']) ? $_POST['loc_long'] : '' );

    /* Get the meta key. */
    $meta_key3 = 'loc_long';


    /* Get the meta value of the custom field key. */
    $meta_value3 = get_post_meta($post_id, $meta_key3, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ('' == $meta_value3)
        add_post_meta($post_id, $meta_key3, $longitude, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value3 && $new_meta_value3 != $meta_value3)
        update_post_meta($post_id, $meta_key3, $new_meta_value3);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value3 && $meta_value3)
        delete_post_meta($post_id, $meta_key3, $meta_value3);
    
    
        /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value4 = ( isset($_POST['loc_admin']) ? $_POST['loc_admin'] : '' );

    /* Get the meta key. */
    $meta_key4 = 'loc_admin';

    /* Get the meta value of the custom field key. */
    $meta_value4 = get_post_meta($post_id, $meta_key4, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ('' == $meta_value4)
        add_post_meta($post_id, $meta_key4, $new_meta_value4, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value4 && $new_meta_value4 != $meta_value4)
        update_post_meta($post_id, $meta_key4, $new_meta_value4);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value4 && $meta_value4)
        delete_post_meta($post_id, $meta_key4, $meta_value4);
    
    
            /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value5 = ( isset($_POST['loc_mobile']) ? $_POST['loc_mobile'] : '' );

    /* Get the meta key. */
    $meta_key5 = 'loc_mobile';

    /* Get the meta value of the custom field key. */
    $meta_value5 = get_post_meta($post_id, $meta_key5, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ('' == $meta_value5)
        add_post_meta($post_id, $meta_key5, $new_meta_value5, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value5 && $new_meta_value5 != $meta_value5)
        update_post_meta($post_id, $meta_key5, $new_meta_value5);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value5 && $meta_value5)
        delete_post_meta($post_id, $meta_key5, $meta_value5);
    
    
                /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value6 = ( isset($_POST['loc_tel']) ? $_POST['loc_tel'] : '' );

    /* Get the meta key. */
    $meta_key6 = 'loc_tel';

    /* Get the meta value of the custom field key. */
    $meta_value6 = get_post_meta($post_id, $meta_key6, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ('' == $meta_value6)
        add_post_meta($post_id, $meta_key6, $new_meta_value6, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value6 && $new_meta_value6 != $meta_value6)
        update_post_meta($post_id, $meta_key6, $new_meta_value6);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value6 && $meta_value6)
        delete_post_meta($post_id, $meta_key6, $meta_value6);
}


    /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value7 = ( isset($_POST['loc_url']) ? $_POST['loc_url'] : '' );

    /* Get the meta key. */
    $meta_key7 = 'loc_url';


    /* Get the meta value of the custom field key. */
    $meta_value7 = get_post_meta($post_id, $meta_key7, true);

    /* If a new meta value was added and there was no previous value, add it. */
    if ('' == $meta_value7)
        add_post_meta($post_id, $meta_key7, $longitude, true);

    /* If the new meta value does not match the old value, update it. */
    elseif ($new_meta_value7 && $new_meta_value7 != $meta_value7)
        update_post_meta($post_id, $meta_key7, $new_meta_value7);

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value7 && $meta_value7)
        delete_post_meta($post_id, $meta_key7, $meta_value7);
    




    function get_location() {
        $counter = 0;
        $args = array(
            'post_type' => 'location',
        );

        $the_query = new WP_Query($args);

        $tot = array();

        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                $counter++;

                $addrs = get_post_meta(get_the_ID(), 'loc_address',true);
                $url = get_post_meta(get_the_ID(), 'loc_url',true);
                $lat= get_post_meta(get_the_ID(), 'loc_lat', true);
                $long= get_post_meta(get_the_ID(), 'loc_long', true);
                $admin= get_post_meta(get_the_ID(), 'loc_admin', true);
                $mob= get_post_meta(get_the_ID(), 'loc_mobile', true);
                $tel= get_post_meta(get_the_ID(), 'loc_tel', true);


                    $Array = array($addrs, $url, $lat, $long ,$admin ,$mob,$tel);


                    $tot[] = $Array;
           


            endwhile;


        endif;
        wp_reset_query();

//print_r($tot);
        
 
        ?>

       
   

        <script type="text/javascript">
             ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
                jQuery(function ($) {
             $('#collect_account_num').on('change', function() {
                
                  $('#loc_admin').empty();
                    $('#loc_mobile').empty();
                     $('#loc_tel').empty();
                  var val = $("#collect_account_num option:selected").val();
                  
                    var data = {
                    'action': 'Get_Term_Address',
                      'val': val
                            };


                jQuery.post(ajax_url, data, function (response) { // This will make an AJAX request upon page load


                    if (response) {
                      var returnedData = JSON.parse(response);
             
                        $('.extra').show();
                   $('#loc_admin').append(returnedData.admin);
                    $('#loc_mobile').append(returnedData.mob);
                     $('#loc_tel').append(returnedData.tel);
                     $('#loc_url').append(returnedData.url);
						
                        
                        if(returnedData.lat != false){
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: new google.maps.LatLng(returnedData.lat, returnedData.long),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                    
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(returnedData.lat, returnedData.long),
                        map: map
                    });
                     var infowindow = new google.maps.InfoWindow();
                      marker.addListener('click', function() {
                       infowindow.setContent(returnedData.addr);
                            infowindow.open(map, marker);
        });

                    
            }else{
                alert('من فضلك اختر اقرب عنوان اليك !!');
            }
                }else {
                        //showmessage( 'no' , response.msg );
                        alert('حدث خطأ ما');


                    }
                    
                });
            });
            });
         
             
            function initMap() {
                var locations = <?= json_encode($tot); ?>;
              

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 5,
                    center: new google.maps.LatLng(24.774265, 46.738586),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                
         

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][2], locations[i][3]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                            

           };
                    })(marker, i));
                    
                  
                }
 initMap2();
    }
    
   
     function initMap2() {
                var branches = <?= json_encode($tot); ?>;

                var map_container = document.getElementById('map2');
         if(map_container){
             var map2 = new google.maps.Map(map_container, {
                    zoom: 4,
                    center: new google.maps.LatLng(24.774265, 46.738586),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                
                
                var infowindow = new google.maps.InfoWindow();

             var marker, i;

                for (i = 0; i < branches.length; i++) {

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(branches[i][2], branches[i][3]),
                        map: map2
                    });

                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent(branches[i][0]);
                            infowindow.open(map2, marker);
                            

                       };
                    })(marker, i));
                    
                  
                }

 
 
             
         }
    }
        </script>


        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQXCmJQJiemTHEXNHT81GjEJTwyA49z2I&language=ar&region=SA&callback=initMap">
        </script>
        
        
    <?php
    
    
    
}

add_action('wp_ajax_Get_Term_Address', 'Get_Term_Address');
add_action('wp_ajax_nopriv_Get_Term_Address', 'Get_Term_Address');
function Get_Term_Address(){
    
    $id= esc_attr($_POST['val']);
    
         $addrs = get_post_meta($id, 'loc_address', true);
         $url= get_post_meta($id, 'loc_url', true);
         $lat= get_post_meta($id, 'loc_lat', true);
         $long= get_post_meta($id, 'loc_long', true);
         $admin= get_post_meta($id , 'loc_admin', true);
         $mob= get_post_meta($id , 'loc_mobile', true);
         $tel= get_post_meta($id , 'loc_tel', true);
         
         $array=array('addr' => $addrs , 'url' => $url , 'lat' => $lat ,'long' => $long , 'admin' => $admin , 'mob' =>  $mob , 'tel' => $tel);

            echo json_encode($array);
            
               die();


}


