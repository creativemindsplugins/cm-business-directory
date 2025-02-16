<?php
class CMBDF_SetupWizard {

    /* 1. Rename this class
     * 2. Update the "Welcome.." step in /view/wizard.php file
     * 3. Update wizard steps in the setSteps()
     * 4. In the CSS and JS files you can add any custom code for the specific plugin if needed
     * 5. Update the add_submenu_page() to add wizard page correctly, and saveOptions() to update options correctly
     * 6. You can add custom functions to this class if needed
     * 7. Include this file with include_once or require_once
     */

    public static $steps;
    public static $wizard_url;
    public static $wizard_path;
    public static $options_slug = 'cmbd_'; //change for your plugin needs
    public static $wizard_screen = 'cm-business_page_cmbd_setup_wizard'; //change for your plugin needs
    public static $setting_page_slug = 'cm-business-directory-settings'; //change for your plugin needs
    public static $plugin_basename;

    public static function init() {
        self::$wizard_url = plugin_dir_url(__FILE__);
        self::$wizard_path = plugin_dir_path(__FILE__);
        self::$plugin_basename = plugin_basename(CMBD_SLUG_NAME); //change for your plugin needs
        self::setSteps();
        add_action('admin_menu', array(__CLASS__, 'add_submenu_page'),30);
        add_action('wp_ajax_cmbdf_save_wizard_options',[__CLASS__,'saveOptions']);
        add_action( 'admin_enqueue_scripts', [ __CLASS__, 'enqueueAdminScripts' ] );
    }
	
    public static function setSteps() {			
        self::$steps = [
            1 => ['title' => 'Business Page Settings',
                'options' => [
                    0 => [
                        'name' => 'cmbd_business_page_show_email',
						'type' => 'bool',                
						'title' => 'Show business email address',
                        'hint' => 'Enable this option to display the email address of businesses on their pages.',
						'value' => 0,
                    ],
					1 => [
                        'name' => 'cmbd_address_button_show',
						'type' => 'select',                
						'title' => 'Display business address',
                        'hint' => 'Controls where the buisness address should be displayed on the business page.',
						'options' => [
                            0 => [
                                'title' => 'On Top',
                                'value' => 'top'
                            ],
                            1 => [
                                'title' => 'On Side',
                                'value' => 'side'
                            ]
                        ],
						'value' => 'top',
                    ],
                    2 => [
                        'name' => 'cmbd_category_button_show',
						'type' => 'bool',                
						'title' => 'Show categories',
                        'hint' => 'Enable this option to display the categories assigned to businesses on their pages.',
						'value' => 1,
                    ],
					3 => [
                        'name' => 'cmbd_business_page_show_backlink',
						'type' => 'bool',                
						'title' => 'Show back to business directory index link',
                        'hint' => 'Enable this option to add a link on business pages that redirects users back to the main directory index page.',
						'value' => 1,
                    ]
                ],
            ],
            2 => ['title' =>'Index Page Settings',
                'options' => [
                    0 => [
                        'name' => 'cmbd_business_business_in_row',
						'type' => 'int',                
						'title' => 'Businesses in a row',
                        'hint' => 'Set the number of businesses to display in a single row on the index page.',
						'value' => 3,
                    ],
                    1 => [
                        'name' => 'cmbd_business_showfilter',
						'type' => 'bool',                
						'title' => 'Show categories filter',
                        'hint' => 'Enable this option to allow users to filter businesses by categories.',
						'value' => 1,
                    ],
                    2 => [
                        'name' => 'cmbd_pagination_top_bottom_both',
                        'type' => 'radio',
						'title' => 'Where to show the pagination',
						'hint' => 'Choose where the pagination controls should appear: at the top, bottom, or both.',
                        'options' => [
                            0 => [
                                'title' => 'Top',
                                'value' => 'top'
                            ],
                            1 => [
                                'title' => 'Bottom',
                                'value' => 'bottom'
                            ],
							2 => [
                                'title' => 'Both',
                                'value' => 'both'
                            ],
                        ],
						'value' => 'bottom',
                    ],
					3 => [
                        'name' => 'cmbd_post_per_page_show',
						'type' => 'bool',                
						'title' => 'Display \'Items per page\' selector',
                        'hint' => 'Enable this option to let users choose how many businesses to display per page.',
						'value' => 0,
                    ],
					4 => [
                        'name' => 'cmbd_buttons_target_blank',
						'type' => 'bool',                
						'title' => 'Open each business page on a new tab',
                        'hint' => 'Enable this option to open business pages in a new browser tab when clicked.',
						'value' => 0,
                    ],
                ],
            ],
            3 => ['title' =>'Creating Categories',
                'content' => "
					<p>Organize businesses by assigning them to categories. Navigate to the <strong>\"<a href='".admin_url( 'edit-tags.php?taxonomy=cm-business-category&post_type=cm-business' )."' target='_blank'>Categories</a>\"</strong> page to start. This page has two main sections:</p>
					<p>
						&nbsp; &nbsp; <strong>1. Category Creation Form -</strong> Add a title and description for your category. You can also specify if it's a parent or child category.<br>
						&nbsp; &nbsp; <strong>2. Category Management Table -</strong> View, edit, or delete existing categories. The table also displays the number of businesses assigned to each category.
					</p>
					<div class='cm_wizard_image_holder'>
						<a href='". self::$wizard_url . "assets/img/wizard_step_3_1.png' target='_blank'>
							<img src='". self::$wizard_url . "assets/img/wizard_step_3_1.png' width='750px' style='border:1px solid #444;' />
						</a>
					  </div>"
            ],
            4 => ['title' =>'Creating Businesses',
                'content' => "
					<p>Add a new business by navigating to the <strong>\"<a href='".admin_url( 'post-new.php?post_type=cm-business' )."' target='_blank'>Add New Business</a>\"</strong> page in the plugin menu.</p>
					<p>Fill out the required fields in the form, then click \"Publish\" to add the business to your directory.</p>
					<div class='cm_wizard_image_holder'>
						<a href='". self::$wizard_url . "assets/img/wizard_step_4_1.png' target='_blank'>
							<img src='". self::$wizard_url . "assets/img/wizard_step_4_1.png' width='750px' style='border:1px solid #444;' />
						</a>
					  </div>"
            ],
            5 => ['title' =>'Managing Businesses',
                'content' => "
					<p>Manage all existing businesses on the <strong>\"<a href='".admin_url( 'edit.php?post_type=cm-business' )."' target='_blank'>Business</a>\"</strong> page. Here, you can:</p>
					<p>
						&nbsp; &nbsp; • Edit businesses<br>
						&nbsp; &nbsp; • Delete businesses<br>
						&nbsp; &nbsp; • Filter businesses by date
					</p>
					<div class='cm_wizard_image_holder'>
						<a href='". self::$wizard_url . "assets/img/wizard_step_5_1.png' target='_blank'>
							<img src='". self::$wizard_url . "assets/img/wizard_step_5_1.png' width='750px' style='border:1px solid #444;' />
						</a>
					  </div>"
            ],
			6 => ['title' =>'Index Page Link',
                'content' => "
					<p>You can find the link to your business directory index page at the top of the main <strong><a href='".admin_url( 'admin.php?page='. self::$setting_page_slug )."' target='_blank'>plugin settings</a></strong>.</p>
					<p>To use a different page as the index, specify its Page ID in the <strong>Business Index Page ID</strong> option. Ensure the page includes the shortcode <strong>[cmbd_business]</strong>.</p>
					<div class='cm_wizard_image_holder'>
						<a href='". self::$wizard_url . "assets/img/wizard_step_6_1.png' target='_blank'>
							<img src='". self::$wizard_url . "assets/img/wizard_step_6_1.png' width='750px' style='border:1px solid #444;' />
						</a>
					  </div>"
            ],
        ];
        return;
    }

    public static function add_submenu_page() {
        if(get_option('cmbd_AddWizardMenu', 1)) {
            add_submenu_page( 'edit.php?post_type=' . CMBusinessDirectoryShared::POST_TYPE, 'Setup Wizard', 'Setup Wizard', 'manage_options', self::$options_slug . 'setup_wizard', [__CLASS__,'renderWizard'], 20 );
        }
    }

    public static function enqueueAdminScripts() {
        $screen = get_current_screen();		
        if ($screen && $screen->id === self::$wizard_screen) {
            wp_enqueue_style('wizard-css', self::$wizard_url . 'assets/wizard.css');
            wp_enqueue_script('wizard-js', self::$wizard_url . 'assets/wizard.js');
            wp_localize_script('wizard-js', 'wizard_data', ['ajaxurl' => admin_url('admin-ajax.php')]);
            wp_enqueue_script('wp-color-picker');
            wp_enqueue_style('wp-color-picker');
        }
    }
	
    public static function saveOptions() {
        if (isset($_POST['data'])) {
            // Parse the serialized data
            parse_str($_POST['data'], $formData);
            if(!wp_verify_nonce($formData['_wpnonce'],'wizard-form')){
                wp_send_json_error();
            }
            foreach($formData as $key => $value){
                if( !str_contains($key, self::$options_slug) ){
                    continue;
                }
                if(is_array($value)){
                    $sanitized_value = array_map('sanitize_text_field', $value);
					update_option($key, $sanitized_value);
                    continue;
                }
                $sanitized_value = sanitize_text_field($value);
				update_option($key, $sanitized_value);
            }
            wp_send_json_success();
        } else {
            wp_send_json_error();
        }
    }

    public static function renderWizard() {
        require 'view/wizard.php';
    }

    public static function renderSteps() {
        $output = '';
        $steps = self::$steps;
        foreach($steps as $num => $step) {
            $output .= "<div class='cm-wizard-step step-{$num}' style='display:none;'>";
            $output .= "<h1>" . self::getStepTitle($num) . "</h1>";
            $output .= "<div class='step-container'>
                            <div class='cm-wizard-menu-container'>" . self::renderWizardMenu($num)." </div>";
            $output .= "<div class='cm-wizard-content-container'>";
            if(isset($step['options'])) {
                $output .= "<form>";
                $output .= wp_nonce_field('wizard-form');
                foreach($step['options'] as $option){
                    $output .=  self::renderOption($option);
                }
                $output .= "</form>";
            }
            if (isset($step['content'])) {
                $output .= $step['content'];
            }
            $output .= '</div></div>';
            $output .= self::renderStepsNavigation($num);
            $output .= '</div>';
        }
        return $output;
    }

    public static function renderStepsNavigation($num) {
        $settings_url = admin_url( 'admin.php?page='. self::$setting_page_slug );
        $output = "<div class='step-navigation-container'><button class='prev-step' data-step='{$num}'>Previous</button>";
        if($num == count(self::$steps)){
            $output .= "<button class='finish' onclick='window.location.href = \"$settings_url\" '>Finish</button>";
        } else {
			$output .= "<button class='next-step' data-step='{$num}'>Next</button>";
        }
        $output .= "<p><a href='$settings_url'>Skip the setup wizard</a></p></div>";
        return $output;
    }

    public static function renderOption($option) {
        switch($option['type']) {
            case 'bool':
                return self::renderBool($option);
            case 'int':
                return self::renderInt($option);
            case 'string':
                return self::renderString($option);
            case 'radio':
                return self::renderRadioSelect($option);
            case 'select':
                return self::renderSelect($option);
            case 'color':
                return self::renderColor($option);
            case 'multicheckbox':
                return self::renderMulticheckbox($option);
        }
    }

    public static function renderBool($option) {
		$val = get_option($option['name'], $option['value']);
        $checked = checked(1, get_option($option['name'], $option['value']), false);
        $output = "<div class='form-group'>";
		$output .= "<label for='{$option['name']}' class='label'>{$option['title']}<div class='cm_field_help' data-title='{$option['hint']}'></div></label>";
		$output .= "<input type='hidden' name='{$option['name']}' value='0'>";
        $output .= "<input type='checkbox' id='{$option['name']}' name='{$option['name']}' class='toggle-input' value='{$val}' {$checked}>";
		$output .= "<label for='{$option['name']}' class='toggle-switch'></label>";
		$output .= "</div>";
        return $output;
    }

    public static function renderInt($option) {
        $min = isset($option['min']) ? "min='{$option['min']}'" : '';
        $max = isset($option['max']) ? "max='{$option['max']}'" : '';
        $step = isset($option['step']) ? "step='{$option['step']}'" : '';
        $value = get_option( $option['name'], $option['value']);
        return "<div class='form-group'>
                <label for='{$option['name']}' class='label'>{$option['title']}<div class='cm_field_help' data-title='{$option['hint']}'></div></label>
                <input type='number' id='{$option['name']}' name='{$option['name']}' value='{$value}' {$min} {$max} {$step} />
            </div>";
    }

    public static function renderString($option) {
        $value = get_option( $option['name'], $option['value'] );
        return "<div class='form-group'>
                <label for='{$option['name']}' class='label'>{$option['title']}<div class='cm_field_help' data-title='{$option['hint']}'></div></label>
                <input type='text' id='{$option['name']}' name='{$option['name']}' value='{$value}' placeholder='{$option['placeholder']}' />
            </div>";
    }

    public static function renderRadioSelect($option) {
        $options = $option['options'];
        $output = "<div class='form-group'>";
		$output .= "<label class='label'>{$option['title']}<div class='cm_field_help' data-title='{$option['hint']}'></div></label>";
        $output .= "<div>";
        if(is_callable($option['options'], false, $callable_name)) {
            $options = call_user_func($option['options']);
        }
		foreach($options as $item) {
            $checked = checked($item['value'], get_option($option['name'], $option['value']), false);
            $output .= "<input type='radio' id='{$option['name']}_{$item['value']}' name='{$option['name']}' value='{$item['value']}' {$checked} />
                <label for='{$option['name']}_{$item['value']}'>{$item['title']}</label><br>";
        }
        $output .= "</div>";
		$output .= "</div>";
        return $output;
    }

    public static function renderColor($option) {
        ob_start();
		?>
        <script>jQuery(function ($) { $('input[name="<?php echo esc_attr($option['name']); ?>"]').wpColorPicker(); });</script>
		<?php
        $output = ob_get_clean();
        $value = get_option( $option['name'], $option['value']);
        $output .= "<div class='form-group'><label for='{$option['name']}' class='label'>{$option['title']}<div class='cm_field_help' data-title='{$option['hint']}'></div></label>";
        $output .= sprintf('<input type="text" name="%s" value="%s" />', esc_attr($option['name']), esc_attr($value));
        $output .= "</div>";
        return $output;
    }

    public static function renderSelect($option) {
        $options = $option['options'];
		$output = "<div class='form-group'>";
        $output .= "<label for='{$option['name']}' class='label'>{$option['title']}<div class='cm_field_help' data-title='{$option['hint']}'></div></label>";
		$output .= "<select id='{$option['name']}' name='{$option['name']}'>";
        if(is_callable($option['options'], false, $callable_name)) {
            $options = call_user_func($option['options']);
        }
        foreach($options as $item) {
			$selected = selected($item['value'],get_option( $option['name'] ),false);
			$output .= "<option value='{$item['value']}' {$selected}>{$item['title']}</option>";
		}
		$output .= "</select></div>";
		return $output;
	}
	
    public static function renderMulticheckbox($option) {
        $options = $option['options'];
        $output = "<div class='form-group'>";
        $output .= "<label class='label'>{$option['title']}<div class='cm_field_help' data-title='{$option['hint']}'></div></label>";
		$output .= "<div>";
        if(is_callable($option['options'], false, $callable_name)) {
            $options = call_user_func($option['options']);
        }
		foreach($options as $item) {
            $checked = in_array($item['value'], get_option( $option['name'] )) ? 'checked' : '';
            $output .= "<input type='checkbox' id='{$option['name']}_{$item['value']}' name='{$option['name']}[]' value='{$item['value']}' {$checked}/>
                <label for='{$option['name']}_{$item['value']}'>{$item['title']}</label><br>";
        }
        $output .= "</div>";
        $output .= "</div>";
        return $output;
    }

    public static function renderWizardMenu($current_step) {
        $steps = self::$steps;
        $output = "<ul class='cm-wizard-menu'>";
        foreach ($steps as $key => $step) {
            $num = $key;
            $selected = $num == $current_step ? 'class="selected"' : '';
            $output .= "<li {$selected} data-step='$num'>Step $num: {$step['title']}</li>";
        }
        $output .= "</ul>";
        return $output;
    }

    public static function getStepTitle($current_step) {
        $steps = self::$steps;
        $title = "Step {$current_step}: ";
        $title .= $steps[$current_step]['title'];
        return $title;
    }

    //Custom functions
	
}

CMBDF_SetupWizard::init();