<?php
ob_start();
include plugin_dir_path(__FILE__) . 'views/plugin_compare_table.php';
$plugin_compare_table = ob_get_contents();
ob_end_clean();
$activation_redirect_wizard = get_option('cmbd_AddWizardMenu', 1);
$cminds_plugin_config = array(
	'plugin-is-pro'				 => FALSE,
	'plugin-has-addons'			 => TRUE,
	'plugin-is-addon'			 => FALSE,
	'plugin-version'			 => '1.4.5',
	'plugin-abbrev'				 => 'cmbd',
	'plugin-short-slug'			 => 'business-directory',
	'plugin-campign'             => '?utm_source=cmbdfree&utm_campaign=freeupgrade',
	'plugin-parent-short-slug'	 => '',
    'plugin-affiliate'               => '',
    'plugin-redirect-after-install'  => $activation_redirect_wizard ? admin_url( 'admin.php?page=cmbd_setup_wizard' ) : admin_url( 'admin.php?page=cm-business-directory-settings' ),
    'plugin-show-guide'              => TRUE,
    'plugin-guide-text'              => '    <div style="display:block">
        <ol>
            <li>Go to <strong>"Add Business"</strong> under the CM Business Directory menu</li>
            <li>Fill the <strong>"Title"</strong> of the new business item and <strong>"Content"</strong></li>
            <li>Add additional information such as the <strong>"Business Pitch and Logo"</strong>, <strong>Business Address</strong> and <strong>"Category"</strong></li>
            <li>Click <strong>"Publish" </strong> in the right column.</li>
            <li><strong>View</strong> this business</li>
            <li>From the plugin settings click on the link to the <strong>Business Index Page</strong></li>
            <li><strong>Troubleshooting:</strong> If you get a 404 error once viewing the business, make sure your WordPress permalinks are set and save them again to refresh</li>
         </ol>
    </div>',
    'plugin-guide-video-height'      => 240,
    'plugin-guide-videos'            => array(
        array( 'title' => 'Installation tutorial', 'video_id' => '158283606' ),
    ),
	'plugin-show-shortcodes'	 => TRUE,
	'plugin-shortcodes'			 => '<p>You can use the following available shortcodes.</p>',
	'plugin-shortcodes-action'	 => 'cmbd_display_supported_shortcodes',
    'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Search the directory using filters', 'video_time' => '0:07' ),
        array( 'title' => 'Search bi Zip ', 'video_time' => '0:30' ),
        array( 'title' => 'Customize directory listing', 'video_time' => '0:45' ),
        array( 'title' => 'Embed ads in directory', 'video_time' => '1:30' ),
        array( 'title' => 'Import and export listings', 'video_time' => '2:07' ),
        array( 'title' => 'Shortcode support', 'video_time' => '2:32' ),
        array( 'title' => 'Directory index tempaltes', 'video_time' => '3:07' ),
        array( 'title' => 'Directory page settings', 'video_time' => '3:35' ),
        array( 'title' => 'Google maps integration', 'video_time' => '4:10' ),
        array( 'title' => 'Product directory integration', 'video_time' => '4:52' ),
        array( 'title' => 'Related buisnesses widget', 'video_time' => '5:34' ),
        array( 'title' => 'Business star rating', 'video_time' => '5:51' ),
        array( 'title' => 'Community editing - submit new listing', 'video_time' => '6:18' ),
        array( 'title' => 'Community editing - claim existing business ', 'video_time' => '6:48' ),
        array( 'title' => 'Community editing - manage existing business ', 'video_time' => '7:30' ),
        array( 'title' => 'Directory permalink', 'video_time' => '7:30' ),
   ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Business Directory Premium Plugin Overview', 'video_id' => '275481345' ),
    ),
	'plugin-file'				 => CMBD_PLUGIN_FILE,
	'plugin-dir-path'			 => plugin_dir_path( CMBD_PLUGIN_FILE ),
	'plugin-dir-url'			 => plugin_dir_url( CMBD_PLUGIN_FILE ),
	'plugin-basename'			 => plugin_basename( CMBD_PLUGIN_FILE ),
	'plugin-icon'				 => '',
	'plugin-name'				 => CMBD_NAME,
	'plugin-license-name'		 => CMBD_NAME,
	'plugin-slug'				 => '',
	'plugin-menu-item'			 => 'edit.php?post_type=' . CMBusinessDirectoryShared::POST_TYPE,
	'plugin-textdomain'			 => CMBD_SLUG_NAME,
	'plugin-userguide-key'		 => '2739-cm-business-directory-free-version-tutorial',
	'plugin-video-tutorials-url'		 => 'https://www.videolessonsplugin.com/video-lesson/lesson/business-directory-plugin/',
	'plugin-store-url'			 => 'https://www.cminds.com/wordpress-plugins-library/purchase-cm-business-directory-plugin-for-wordpress?utm_source=cmbd&utm_campaign=freeupgrade&upgrade=1',
	'plugin-support-url'			 => 'https://www.cminds.com/contact/',
	'plugin-review-url'			 => 'https://wordpress.org/support/view/plugin-reviews/cm-business-directory',
	'plugin-changelog-url'		 => CMBD_RELEASE_NOTES,
	'plugin-compare-table'		 => $plugin_compare_table,
);