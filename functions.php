<?php
// Load the Parent and Child Stylesheets
add_action( 'wp_enqueue_scripts', 'ucla_theme_enqueue_styles' );
function ucla_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'ucla-style' ),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
    // CDN jQuery from Google
//    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    // Install the UCLA Component library styles
//    wp_enqueue_style( 'lib-style', 'https://cdn.webcomponents.ucla.edu/1.0.0-beta.15/css/ucla-lib.min.css' );
    // Install the UCLA Component Library  scripts
//    wp_enqueue_script( 'lib-script', 'https://webcomponents.ucla.edu/public/1.0.0-beta.15/js/ucla-lib-scripts.min.js' );
    // Install the WordPress Theme Styles
//    wp_enqueue_style( 'ucla-style', '/wp-content/themes/ucla-wp/dist/css/global.css' );
    // Install the WordPress Theme Scripts
//    wp_enqueue_script( 'ucla-script', '/wp-content/themes/ucla-wp/dist/js/scripts.js' );
    // Install UCLA App css
//    wp_enqueue_style( 'ucla-app', 'http://ec2-44-225-97-246.us-west-2.compute.amazonaws.com/css/app.css' );
    // Install fancybox
//    wp_enqueue_style( 'fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css' );
//    wp_enqueue_script( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js' );
    // Install hideseek
//    wp_enqueue_script( 'hideseek', '/wp-content/themes/ucla-wp-child/js/jquery.hideseek.min.js' );
    // Install stupidtable
//    wp_enqueue_script( 'stupidtable', '/wp-content/themes/ucla-wp-child/js/stupidtable.min.js' );
    // Install scrollTo
//    wp_enqueue_script( 'scrollTo', '/wp-content/themes/ucla-wp-child/js/jquery.scrollTo.min.js' );
    // Install main from gateway
//    wp_enqueue_script( 'gateway-main', '/wp-content/themes/ucla-wp-child/js/main.js' );
}

add_action( 'after_setup_theme', 'remove_parent_widget_init' );

function remove_parent_widget_init()
{
  remove_action( 'widgets_init', 'ucla_widgets_init' );
  // Add Sidebar widget
  add_action( 'widgets_init', 'ucla_widgets_init_nolist' );
  function ucla_widgets_init_nolist() {
      register_sidebar( array(
        'name' => esc_html__( 'Sidebar Widget Area', 'ucla' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      ) );
  }
}

add_filter( 'upload_size_limit', 'AOS_increase_upload' );
function AOS_increase_upload( $bytes )
{
	return 26214400; // 1 megabyte
}                // CPT 


/**
 * Custom Avatar (Profile Picture) Without a Plugin
 */
// 1. Enqueue the needed scripts.
add_action( "admin_enqueue_scripts", "deptdir_enqueue" );
function deptdir_enqueue( $hook ){
	// Load scripts only on the user-edit page.
	if( $hook === 'user-edit.php' ){
		add_thickbox();
		wp_enqueue_script( 'media-upload' );
		wp_enqueue_media();
	}
}

// 2. Scripts for Media Uploader.
function deptdir_admin_media_scripts() {
	?>
	<script>
		jQuery(document).ready(function ($) {
			$(document).on('click', '.avatar-image-upload', function (e) {
				e.preventDefault();
				var $button = $(this);
				var file_frame = wp.media.frames.file_frame = wp.media({
					title: 'Select or Upload an Custom Avatar',
					library: {
						type: 'image' // mime type
					},
					button: {
						text: 'Select Avatar'
					},
					multiple: false
				});
				file_frame.on('select', function() {
					var attachment = file_frame.state().get('selection').first().toJSON();
					$button.siblings('#deptdir-custom-avatar').val( attachment.sizes.large.url );
					$button.siblings('.custom-avatar-preview').attr( 'src', attachment.sizes.large.url );
				});
				file_frame.open();
			});
		});
	</script>
	<?php
}
add_action( 'admin_print_footer_scripts-profile.php', 'deptdir_admin_media_scripts' );
add_action( 'admin_print_footer_scripts-user-edit.php', 'deptdir_admin_media_scripts' );

// 3. Adding the Custom Image section for avatar.
function custom_user_profile_fields( $profileuser ) {
	?>
	<h3><?php _e('Custom Local Avatar', 'deptdir'); ?></h3>
	<table class="form-table deptdir-avatar-upload-options">
		<tr>
			<th>
				<label for="image"><?php _e('Custom Local Avatar', 'deptdir'); ?></label>
			</th>
			<td>
				<?php
				// Check whether we saved the custom avatar, else return the default avatar.
				$custom_avatar = get_the_author_meta( 'deptdir-custom-avatar', $profileuser->ID );
				if ( $custom_avatar == '' ){
					$custom_avatar = get_avatar_url( $profileuser->ID );
				}else{
					$custom_avatar = esc_url_raw( $custom_avatar );
				}
				?>
				<img style="width: 96px; height: 96px; display: block; margin-bottom: 15px;" class="custom-avatar-preview" src="<?php echo $custom_avatar; ?>">
				<input type="text" name="deptdir-custom-avatar" id="deptdir-custom-avatar" value="<?php echo esc_attr( esc_url_raw( get_the_author_meta( 'deptdir-custom-avatar', $profileuser->ID ) ) ); ?>" class="regular-text" />
				<input type='button' class="avatar-image-upload button-primary" value="<?php esc_attr_e("Upload Image","deptdir");?>" id="uploadimage"/><br />
				<span class="description">
					<?php _e('Please upload a custom avatar for your profile, to remove the avatar simple delete the URL and click update.', 'deptdir'); ?>
				</span>
			</td>
		</tr>
	</table>
	<?php
}
add_action( 'show_user_profile', 'custom_user_profile_fields', 10, 1 );
add_action( 'edit_user_profile', 'custom_user_profile_fields', 10, 1 );

// 4. Saving the values.
add_action( 'personal_options_update', 'deptdir_save_local_avatar_fields' );
add_action( 'edit_user_profile_update', 'deptdir_save_local_avatar_fields' );
function deptdir_save_local_avatar_fields( $user_id ) {
	if ( current_user_can( 'edit_user', $user_id ) ) {
		if( isset($_POST[ 'deptdir-custom-avatar' ]) ){
			$avatar = esc_url_raw( $_POST[ 'deptdir-custom-avatar' ] );
			update_user_meta( $user_id, 'deptdir-custom-avatar', $avatar );
		}
	}
}

// 5. Set the uploaded image as default gravatar.
add_filter( 'get_avatar_url', 'deptdir_get_avatar_url', 10, 3 );
function deptdir_get_avatar_url( $url, $id_or_email, $args ) {
	$id = '';
	if ( is_numeric( $id_or_email ) ) {
		$id = (int) $id_or_email;
	} elseif ( is_object( $id_or_email ) ) {
		if ( ! empty( $id_or_email->user_id ) ) {
			$id = (int) $id_or_email->user_id;
		}
	} else {
		$user = get_user_by( 'email', $id_or_email );
		$id = !empty( $user ) ?  $user->data->ID : '';
	}
	//Preparing for the launch.
	$custom_url = $id ?  get_user_meta( $id, 'deptdir-custom-avatar', true ) : '';
	
	// If there is no custom avatar set, return the normal one.
	if( $custom_url == '' || !empty($args['force_default'])) {
		return esc_url_raw( 'https://wpgd-jzgngzymm1v50s3e3fqotwtenpjxuqsmvkua.netdna-ssl.com/wp-content/uploads/sites/12/2020/07/blm-avatar.png' ); 
	}else{
		return esc_url_raw($custom_url);
	}
}

function extra_profile_fields($user){ ?>
    
    <h3><?php _e('Extra User Information'); ?></h3>
<table class="form-table">
        <tr>
	    <th><label for="phone-number">Phone number</label></th>
<td>
            <input type="text" name="phone-number" id="phone-number" value="<?php echo esc_attr( get_the_author_meta( 'phone-number', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">Enter your work phone number.</span>
	    </td>
 </tr>
        <tr>
	    <th><label for="office-location">Office location</label></th>
	    <td>
 <input type="text" name="office-location" id="office-location" value="<?php echo esc_attr( get_the_author_meta( 'office-location', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">Enter your office building and number.</span>
            </td>
	</tr>
<tr>
            <th><label for="user_role">Position</label></th>
            <td>
 <input type="text" name="user_role" id="user_role" value="<?php echo esc_attr( get_the_author_meta( 'user_role', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">Enter your position within the department.</span>
            </td>
        </tr>
   <tr><th>
<?php
	wp_nonce_field('email_display','email_display_nonce');
$value = get_the_author_meta('display_email_checkbox', $user->ID);
$is_checked=($value==1)?'checked':'';
?>
	<input type="checkbox" id="display_email_checkbox"  name="display_email_checkbox" <?php echo $is_checked; ?> />
<label for"display_email_checkbox">Show email on my Profile</label>
	</th></tr>
<?php
}
add_action( 'show_user_profile', 'extra_profile_fields', 10 );
add_action( 'edit_user_profile', 'extra_profile_fields', 10 );

function save_extra_profile_fields( $user_id ) { 
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false; 
    update_user_meta( $user_id, 'phone-number', $_POST['phone-number'] );
    update_user_meta( $user_id, 'office-location', $_POST['office-location'] );
    update_user_meta( $user_id, 'user_role', $_POST['user_role'] );
    update_user_meta( $user_id, 'user_fields', $_POST['user_fields'] );
    $visible= isset($_POST['display_email_checkbox']);
    $visible = (int)$visible;
    update_user_meta( $user_id,'display_email_checkbox',$visible);  
}

add_action( 'personal_options_update', 'save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_profile_fields' );

/*Add users role*/
//Core
add_role('distinguished_professor','Distinguished Professor',get_role('author')->capabilities);
add_role('faculty_assistant','Assistant Faculty',get_role('author')->capabilities);
add_role('faculty_associate','Associate Faculty',get_role('author')->capabilities);
add_role('faculty_full','Full Faculty',get_role('author')->capabilities);

//Graduate
add_role('graduate_xep','Graduate Student XEP',get_role('contributor')->capabilities);
add_role('graduate_phd','Graduate PhD Students',get_role('contributor')->capabilities);
add_role('graduate_master','Graduate Master Students',get_role('contributor')->capabilities);

//Researcher
add_role('researcher_scholar','Researcher/Scholar',get_role('author')->capabilities);

//Staff
add_role('staff_it','Staff IT',get_role('contributor')->capabilities);
add_role('staff_officer','Staff Officers',get_role('contributor')->capabilities);

//Affiliated
//add_role('faculty_affiliated','Affiliated Faculty',get_role('author')->capabilities);
add_role('faculty_emeritus','Faculty Emeritus',get_role('author')->capabilities);
add_role('faculty_adjunct','Faculty Adjunct',get_role('author')->capabilities);

//Leadership
add_role('faculty_chair','Faculty Chair',get_role('author')->capabilities);
add_role('faculty_vice_chair','Faculty Vice Chair',get_role('author')->capabilities);


/*author template*/
function author_template($template){
global $post;
if ('author'===$post->post_type){
        return plugin_dir_path(__FILE__).'author.php';
}
return $template;
}
add_filter('single_template','author_template');

function my_styles() {
    wp_enqueue_style( 'style', 'style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

/*user taxonomy to handle reseach fields*/
function register_research_field_user_taxonomy(){
	register_taxonomy(
		'research_field',
		'user',
		array(
			'public'=>true,
			'labels'=> array(
				'name'=>__('Research Fields'),
				'singular_name'=>__('Research Field'),
				'menu_name'=>__('Research Fields'),
				'search_items'=>__('Search Research Fields'),
				'all_items'=>__('All Research Fields'),
				'edit_items'=>__('Edit Research Field'),
				'update_item'=>__('Update Research Field'),
				'add_new_item'=>__('Add New Research Field'),
				'new_item_name'=>__('New Research Field Name'),
				'separate_items_with_commas'=>__('Separate Research Fields with commas'),
				'add_or_remove_items'=>__('Add or remove Research Fields'),),
				'rewrite'=>array(
					'with_front'=>true,
					'slug'=>'author/research_field'),
				'capabilities'=>array(
					'manage_terms' => 'edit_users', 
					'edit_terms'   => 'edit_users',
					'delete_terms' => 'edit_users',
					'assign_terms' => 'read'),
				'update_count_callback'=>'my_update_research_field_count'
		)		);
}
/*updating the 'research field' taxonomy count*/
function my_update_research_field_count($terms,$taxonomy){
	global $wpdb;
	foreach ( (array) $terms as $term ) {
	$count= $wpdb->get_var($wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->term_relationships WHERE term_taxonomy_id = %d", $term ) );
	do_action( 'edit_term_taxonomy', $term, $taxonomy );
		$wpdb->update( $wpdb->term_taxonomy, compact( 'count' ), array( 'term_taxonomy_id' => $term ) );
		do_action( 'edited_term_taxonomy', $term, $taxonomy );
	}
}
/*add the research fields taxonomy page in the admin*/
add_action('admin_menu','add_research_field_admin_page');
/*creating the manage terms page for research fields taxonomy*/
function add_research_field_admin_page(){
	$tax=get_taxonomy('research_field');
	add_users_page(
		esc_attr( $tax->labels->menu_name ),
		esc_attr( $tax->labels->menu_name ),
		$tax->cap->manage_terms,
		'edit-tags.php?taxonomy=' . $tax->name
	);
}
add_filter('manage_edit-research_field_columns','manage_research_field_user_column' );
function manage_research_field_user_column($columns){
	unset( $columns['posts'] );

	$columns['users'] = __( 'Users' );

	return $columns;
}

add_action('manage_research_field_custom_column','manage_research_field_column',10,3);
function manage_research_field_column($display,$column,$term_id){
	if ('users'===$column){
		$term=get_term($term_id,'research_field');
		echo $term->count;
	}
}


function my_datepicker_enqueue() {
            wp_enqueue_script( 'jquery-ui-datepicker' ); // enqueue datepicker from WP
            wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css');
}
add_action( 'admin_enqueue_scripts', 'my_datepicker_enqueue' );


