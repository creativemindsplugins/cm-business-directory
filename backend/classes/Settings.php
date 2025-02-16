<?php
class CMBD_Settings {

	const TYPE_BOOL									 = 'bool';
	const TYPE_INT									 = 'int';
	const TYPE_STRING								 = 'string';
	const TYPE_COLOR								 = 'color';
	const TYPE_TEXTAREA								 = 'textarea';
	const TYPE_RADIO								 = 'radio';
	const TYPE_SELECT								 = 'select';
	const TYPE_MULTISELECT							 = 'multiselect';
	const TYPE_CSV_LINE								 = 'csv_line';
	const TYPE_FILEUPLOAD							 = 'fileupload';
	const TYPE_HIDDEN								 = 'hidden';
	const SETTINGS_PREFIX							 = 'cmbd';
	const TYPE_CUSTOM = 'custom';
	
	/*
	 * OPTIONS
	 */
	const OPTION_BUSINESS_VIEW							 = 'cmbd_business_view';
	const OPTION_BUSINESS_BUSINESS_ON_PAGE				 = 'cmbd_business_business_on_page';
	const OPTION_BUSINESS_SHOWFILTER					 = 'cmbd_business_showfilter';
	const OPTION_BUSINESS_SHOWDETAILS					 = 'cmbd_business_showdetails';
	const OPTION_BUSINESS_SHOWEDITLINK					 = 'cmbd_business_showeditlink';
	const OPTION_BUSINESS_PERMALINK						 = 'cmbd_business_permalink';
	const OPTION_BUSINESS_IMAGE_WARNING					 = 'cmbd_business_image_warning';
	const OPTION_BUSINESS_DEFAULT_COUNTRY				 = 'cmbd_business_default_country';
	const OPTION_BUSINESS_DEFAULT_YEAR					 = 'cmbd_business_default_year';
	const OPTION_BUSINESS_DEFAULT_IMAGE					 = 'cmbd_business_default_image';
	const OPTION_BUSINESS_TWITTER_FALLOWERS				 = 'cmbd_business_twitter_fallowers';
	const OPTION_BUSINESS_ORDERBY						 = 'cmbd_business_orderby';
	const OPTION_BUSINESS_ORDER							 = 'cmbd_business_order';
	const OPTION_BUTTONS_TARGET_BLANK					 = 'cmbd_buttons_target_blank';
	const OPTION_BUTTONS_BUSINES_PITCH_IMG				 = 'cmbd_buttons_business_pitch_img';
	//const OPTION_PAGINATION_TOP							 = 'cmbd_pagination_top';
	//const OPTION_PAGINATION_BOTTOM						 = 'cmbd_pagination_bottom';
	const OPTION_PAGINATION_TOP_BOTTOM_BOTH				 = 'cmbd_pagination_top_bottom_both';
	const OPTION_FOUND_BUSINESS							 = 'cmbd_found_business';
	const OPTION_CATEGORY_SHOWBUTTON					 = 'cmbd_category_button_show';
	const OPTION_ADDRESS_SHOWBUTTON						 = 'cmbd_address_button_show';
	const OPTION_CATEGORY_SHOW_AS						 = 'cmbd_category_show_as';
	const OPTION_POST_PER_PAGE_SHOW						 = 'cmbd_post_per_page_show';
	const OPTION_BUSINESS_WIDTH							 = 'cmbd_business_width';
	const OPTION_BUSINESS_HEIGHT						 = 'cmbd_business_height';
	const OPTION_BUSINESS_BUSINESS_IN_ROW				 = 'cmbd_business_business_in_row';
	const OPTION_BUSINESS_TILES_SHOW_CAT				 = 'cmbd_business_tiles_show_cat';
	const OPTION_BUSINESS_HEIGHT_LIST					 = 'cmbd_business_height_list';
	const OPTION_BUSINESS_IMAGE_TILES_WIDTH				 = 'cmbd_business_image_tiles_width';
	const OPTION_BUSINESS_IMAGE_TILES_HEIGHT			 = 'cmbd_business_image_tiles_height';
	const OPTION_BUSINESS_IMAGE_TILES_BUSINESS_IN_ROW	 = 'cmbd_business_image_tiles_business_in_row';
	
	// Templates
	const OPTION_BUSINESS_PAGE_USE_TEMPLATE				 = 'cmbd_business_use_page_template';
	const OPTION_BUSINESS_PAGE_TEMPLATE					 = 'cmbd_business_page_template';
	const OPTION_BUSINESS_PAGE_SHOW_BACKLINK			 = 'cmbd_business_page_show_backlink';
	const OPTION_BUSINESS_PAGE_SHOW_EMAIL				 = 'cmbd_business_page_show_email';

	/*
	 * OPTIONS - END
	 */
	const ACCESS_EVERYONE		 = 0;
	const ACCESS_USERS			 = 1;
	const ACCESS_ROLE			 = 2;
	const EDIT_MODE_DISALLOWED	 = 0;
	const EDIT_MODE_WITHIN_HOUR	 = 1;
	const EDIT_MODE_WITHIN_DAY	 = 2;
	const EDIT_MODE_ANYTIME		 = 3;

	public static $categories	 = array(		
		'general'      => 'General',
		'statistics'   => 'Statistics',
		'api'		   => 'API',
		'taxonomies'   => 'Taxonomies',
		'business'     => 'Business Page',
		'advertisement'=> 'Advertisement',
		'index'        => 'Business Directory',
		'appearance'   => 'Directory Appearance',
		'categorylist' => 'Category List',
		'customcss'    => 'Custom CSS',
		'labels'	   => 'Labels',
		'rating'	   => 'CM Star Rating Settings',
	);
	
	public static $subcategories = array(
        'general'     => array(
            'general' => 'General Options',
        ),
		'statistics'     => array(
            'business_statistic' => 'Statistics',
        ),
        'api'         => array(
            'twitter' => 'Twitter',
            //'alexa'   => 'Alexa',
            'google'  => 'Google',
        ),
		'taxonomies'    => array(
            'custom_taxonomy_badge' => 'Badge',
            'custom_taxonomy_1' => 'Custom Taxonomy 1',
            'custom_taxonomy_2' => 'Custom Taxonomy 2',
            'custom_taxonomy_3' => 'Custom Taxonomy 3',
            'custom_taxonomy_4' => 'Custom Taxonomy 4',
            'custom_taxonomy_5' => 'Custom Taxonomy 5',
        ),
        'business'      => array(
            'templates'       => 'Business Page Defaults',
            'sidebox'         => 'Side Box Information',
            'related'         => 'Related Businesses',
            'fields'          => 'Video Field',
            'colors'          => 'Business Page Colors',
            'add_links'       => 'Additional Links',
            'add_fields'      => 'Additional Fields',
            'chat_widget'      => 'WhatsApp Chat Widget',
        ),
        'advertisement' => array(
            'advertisement' => 'Advertisement',
        ),
        'index'         => array(
            'shortcode' => 'Business Index Header',
            'filters'   => 'Filters',
        ),
        'appearance'    => array(
            'view'        => 'Current View',
            'business'    => 'Business Directory View Settings',
            'image_tiles' => 'Tiles View Settings',
            // 'cube_view'      => 'Cube View Settings',
            'list_view'   => 'List View Settings',
            'ecommerce_view'   => 'eCommerce View Settings',
        ),
        'category_list' => array(
            'category_list' => 'Category List',
        ),
        'custom_css'    => array(
            'custom_css' => 'Custom CSS',
        ),
		'rating'    => array(
            'general' => 'General Settings',
            'vote' => 'Vote Settings',
        ),
    );

	public static function getOptionsConfig() {

		return apply_filters( 'cmbd_options_config', array(
			
			// General -> General Options
			'cmbd_AddWizardMenu'	  => array(
                'type'        => self::TYPE_BOOL,
				'default'	  => 1,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Display "Setup Wizard" in plugin menu',
                'desc'        => 'Uncheck this to remove Setup Wizard from plugin menu.',
            ),
			'_onlyinpro_a'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Business permalink',
                'desc'        => 'Change the permalink base (default: https://yoursite.com/cm-business/your-business)',
            ),
			self::OPTION_BUSINESS_PERMALINK						 => array(
				'type'			 => self::TYPE_HIDDEN,
				'default'		 => 'cm-business',
				'category'		 => 'general',
				'subcategory'	 => 'general',
				'title'			 => 'Business permalink',
				'desc'			 => 'Change the permalink base (default: https://yoursite.com/cm-business/your-business)',
			),
			'_onlyinpro_b'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Insert the nofollow tag on all external links',
                'desc'        => '',
            ),
			'_onlyinpro_c'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Show a warning for image size',
                'desc'        => 'Show a warning if the size of the image is bigger than 500x500 ?',
            ),
			self::OPTION_BUSINESS_IMAGE_WARNING					 => array(
				'type'			 => self::TYPE_HIDDEN,
				'default'		 => TRUE,
				'category'		 => 'general',
				'subcategory'	 => 'general',
				'title'			 => 'Show a warning for image size',
				'desc'			 => 'Show a warning if the size of the image is bigger than 500x500 ?',
			),	
			'_onlyinpro_d'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Enable image scaling',
                'desc'        => 'If this option is enabled then image scale library added',
            ),
			'_onlyinpro_e'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Image scaling',
                'desc'        => 'Choose how the business image/logo will scale. <strong>Notice: This will work if above option is enabled</strong>',
            ),
			self::OPTION_BUSINESS_SHOWEDITLINK					 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => TRUE,
				'category'		 => 'general',
				'subcategory'	 => 'general',
				'title'			 => 'Show admin edit link',
				'desc'			 => 'Should the admin/editor edit link be shown near the business name? (for logged in users with "edit_posts" capability only)',
			),
			self::OPTION_BUSINESS_DEFAULT_COUNTRY				 => array(
				'type'			 => self::TYPE_SELECT,
				'default'		 => 224,
				'category'		 => 'general',
				'subcategory'	 => 'general',
				'title'			 => 'Default country',
				'desc'			 => 'Choose the default business country',
				//'options' => array('top' => 'On Top', 'side' => 'On Side'),
				'options'		 => array( "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra",
					"Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina",
					"Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
					"Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus",
					"Belgium", "Belize", "Benin", "Bermuda", "Bhutan",
					"Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil",
					"British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi",
					"Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands",
					"Central African Republic", "Chad", "Chile", "China", "Christmas Island",
					"Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the",
					"Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba",
					"Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
					"Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
					"Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)",
					"Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan",
					"French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia",
					"Georgia", "Germany", "Ghana", "Gibraltar", "Greece",
					"Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala",
					"Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands",
					"Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland",
					"India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel",
					"Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan",
					"Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait",
					"Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho",
					"Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg",
					"Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia",
					"Maldives", "Mali", "Malta", "Marshall Islands", "Martinique",
					"Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of",
					"Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco",
					"Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal",
					"Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua",
					"Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands",
					"Norway", "Oman", "Pakistan", "Palau", "Panama",
					"Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn",
					"Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion",
					"Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia",
					"Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal",
					"Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia",
					"Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain",
					"Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname",
					"Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic",
					"Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo",
					"Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
					"Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine",
					"United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay",
					"Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)",
					"Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia",
					"Zambia", "Zimbabwe" ),
			),
			self::OPTION_BUSINESS_DEFAULT_YEAR					 => array(
				'type'			 => self::TYPE_SELECT,
				'default'		 => 65,
				'category'		 => 'general',
				'subcategory'	 => 'general',
				'title'			 => 'Default year founded',
				'desc'			 => 'Choose the default year when the business was established',
				//'options' => array('top' => 'On Top', 'side' => 'On Side'),
				'options'		 => array( 'Not indicated', 1950, 1951, 1952, 1953, 1954, 1955, 1956, 1957, 1958, 1959
					, 1960, 1961, 1962, 1963, 1964, 1965, 1966, 1967, 1968, 1969
					, 1970, 1971, 1972, 1973, 1974, 1975, 1976, 1977, 1978, 1979
					, 1980, 1981, 1982, 1983, 1984, 1985, 1986, 1987, 1988, 1989
					, 1990, 1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999
					, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009
					, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017 ),
			),
			'_onlyinpro_f'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Show a Google map',
                'desc'        => 'Should a Google map be shown as a default on each business page.',
            ),
			self::OPTION_BUSINESS_DEFAULT_IMAGE					 => array(
				'type'			 => self::TYPE_FILEUPLOAD,
				'default'		 => '',
				'category'		 => 'general',
				'subcategory'	 => 'general',
				'title'			 => 'Choose the default business image',
				'desc'			 => 'The default image will be used only when a business doesn\'t have its own image',
			),
			'_onlyinpro_g'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Enable structured data on detail page',
                'desc'        => 'If enabled then schema.org structured data will add on detail page.',
            ),
			'_onlyinpro_h'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'general',
                'subcategory' => 'general',
                'title'       => 'Hide field or section',
                'desc'        => 'Choose field or section for hide with each business.',
            ),
			// Statistics -> Statistics
			'_onlyinpro_i'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'statistics',
                'subcategory' => 'business_statistic',
                'title'       => 'Stop statistics count',
                'desc'        => 'Disable count statistics for all business.',
            ),
			'_onlyinpro_j'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'statistics',
                'subcategory' => 'business_statistic',
                'title'       => 'Statistics count used IP address',
                'desc'        => 'Enable count statistics unique hits counter via user IP address.',
            ),
			'_onlyinpro_k'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'statistics',
                'subcategory' => 'business_statistic',
                'title'       => 'Show statistics on listing page',
                'desc'        => 'If enabled then statistics (views and clicks) will display on business listing page.',
            ),
			'_onlyinpro_l'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'statistics',
                'subcategory' => 'business_statistic',
                'title'       => 'Show statistics on business single page',
                'desc'        => 'If enabled then statistics (views and clicks) will display on business details page.',
            ),
			// API -> Twitter
			'_onlyinpro_m'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'api',
                'subcategory' => 'twitter',
                'title'       => 'Show Twitter followers',
                'desc'        => 'Should the number of Twitter followers be shown on each business page.',
            ),
			'_onlyinpro_n'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'api',
                'subcategory' => 'twitter',
                'title'       => 'Twitter Consumer Key',
                'desc'        => 'Put here consumer key (https://apps.twitter.com/)',
            ),
			'_onlyinpro_o'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'api',
                'subcategory' => 'twitter',
                'title'       => 'Twitter Consumer Secret',
                'desc'        => 'Put here consumer secret key (https://apps.twitter.com/)',
            ),
			'_onlyinpro_p'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'api',
                'subcategory' => 'twitter',
                'title'       => 'Twitter Access Token',
                'desc'        => 'Put here access token (https://apps.twitter.com/)',
            ),
			'_onlyinpro_q'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'api',
                'subcategory' => 'twitter',
                'title'       => 'Twitter Access Token Secret',
                'desc'        => 'Put here access token secret (https://apps.twitter.com/)',
            ),
			// API -> Google	
			'_onlyinpro_r'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'api',
                'subcategory' => 'google',
                'title'       => 'Get a Google Key/Authentication',
                'desc'        => 'All Google Maps JavaScript API applications require authentication. Go to Google Developers to get Key',
            ),
			'_onlyinpro_s'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'api',
                'subcategory' => 'google',
                'title'       => 'Google Maps Language',
                'desc'        => 'Here you able to set Language of google map. Default Language is "English".',
            ),
			// Taxonomies -> Badge
			'_onlyinpro_t'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_badge',
                'title'       => 'Activate Badge',
                'desc'        => 'Check "Yes" if you want to use Badge',
            ),
			'_onlyinpro_u'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_badge',
                'title'       => 'Set Badge label (singular)',
                'desc'        => 'Enter singular name for Badge',
            ),
			'_onlyinpro_v'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_badge',
                'title'       => 'Set Badge label (plural)',
                'desc'        => 'Enter plural name for Badge',
            ),
			// Taxonomies -> Custom Taxonomy 1
			'_onlyinpro_w'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_1',
                'title'       => 'Activate Custom Taxonomy 1',
                'desc'        => 'Check "Yes" if you want to use Custom Taxonomy 1',
            ),
			'_onlyinpro_x'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_1',
                'title'       => 'Display Custom Taxonomy 1',
                'desc'        => 'Display Custom Taxonomy 1 info on top or side of business page',
            ),
			'_onlyinpro_y'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_1',
                'title'       => 'Set Custom Taxonomy 1 label (singular)',
                'desc'        => 'Enter singular name for Custom Taxonomy 1',
            ),
			'_onlyinpro_z'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_1',
                'title'       => 'Set Custom Taxonomy 1 label (plural)',
                'desc'        => 'Enter plural name for Custom Taxonomy 1',
            ),
			// Taxonomies -> Custom Taxonomy 2
			'_onlyinpro_w2'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_2',
                'title'       => 'Activate Custom Taxonomy 2',
                'desc'        => 'Check "Yes" if you want to use Custom Taxonomy 2',
            ),
			'_onlyinpro_x2'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_2',
                'title'       => 'Display Custom Taxonomy 2',
                'desc'        => 'Display Custom Taxonomy 2 info on top or side of business page',
            ),
			'_onlyinpro_y2'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_2',
                'title'       => 'Set Custom Taxonomy 2 label (singular)',
                'desc'        => 'Enter singular name for Custom Taxonomy 2',
            ),
			'_onlyinpro_z2'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_2',
                'title'       => 'Set Custom Taxonomy 2 label (plural)',
                'desc'        => 'Enter plural name for Custom Taxonomy 2',
            ),
			// Taxonomies -> Custom Taxonomy 3
			'_onlyinpro_w3'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_3',
                'title'       => 'Activate Custom Taxonomy 3',
                'desc'        => 'Check "Yes" if you want to use Custom Taxonomy 3',
            ),
			'_onlyinpro_x3'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_3',
                'title'       => 'Display Custom Taxonomy 3',
                'desc'        => 'Display Custom Taxonomy 3 info on top or side of business page',
            ),
			'_onlyinpro_y3'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_3',
                'title'       => 'Set Custom Taxonomy 3 label (singular)',
                'desc'        => 'Enter singular name for Custom Taxonomy 3',
            ),
			'_onlyinpro_z3'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_3',
                'title'       => 'Set Custom Taxonomy 3 label (plural)',
                'desc'        => 'Enter plural name for Custom Taxonomy 3',
            ),
			// Taxonomies -> Custom Taxonomy 4
			'_onlyinpro_w4'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_4',
                'title'       => 'Activate Custom Taxonomy 4',
                'desc'        => 'Check "Yes" if you want to use Custom Taxonomy 4',
            ),
			'_onlyinpro_x4'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_4',
                'title'       => 'Display Custom Taxonomy 4',
                'desc'        => 'Display Custom Taxonomy 4 info on top or side of business page',
            ),
			'_onlyinpro_y4'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_4',
                'title'       => 'Set Custom Taxonomy 4 label (singular)',
                'desc'        => 'Enter singular name for Custom Taxonomy 4',
            ),
			'_onlyinpro_z4'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_4',
                'title'       => 'Set Custom Taxonomy 4 label (plural)',
                'desc'        => 'Enter plural name for Custom Taxonomy 4',
            ),
			// Taxonomies -> Custom Taxonomy 5
			'_onlyinpro_w5'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_5',
                'title'       => 'Activate Custom Taxonomy 5',
                'desc'        => 'Check "Yes" if you want to use Custom Taxonomy 5',
            ),
			'_onlyinpro_x5'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_5',
                'title'       => 'Display Custom Taxonomy 5',
                'desc'        => 'Display Custom Taxonomy 5 info on top or side of business page',
            ),
			'_onlyinpro_y5'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_5',
                'title'       => 'Set Custom Taxonomy 5 label (singular)',
                'desc'        => 'Enter singular name for Custom Taxonomy 5',
            ),
			'_onlyinpro_z5'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'taxonomies',
                'subcategory' => 'custom_taxonomy_5',
                'title'       => 'Set Custom Taxonomy 5 label (plural)',
                'desc'        => 'Enter plural name for Custom Taxonomy 5',
            ),
			// Business Page -> Business Page Defaults
			'_onlyinpro_bp01' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Default template',
                'desc'        => 'Select the default template for the business page',
            ),
			self::OPTION_BUSINESS_PAGE_TEMPLATE					 => array(
				'type'			 => self::TYPE_HIDDEN,
				'default'		 => 'cm_default',
				'category'		 => 'business',
				'subcategory'	 => 'templates',
				'title'			 => 'Default template',
				'desc'			 => 'Select the default template for the business page',
				'options'		 => CMBusinessDirectoryShared::scanTemplateDir(),
			),
			'_onlyinpro_bp02' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Template bind with the_content() hook',
                'desc'        => 'If your active theme <strong>header.php</strong> and <strong>footer.php</strong> files are empty and header/footer section designed with layouts or blocks then you need to enable this option.',
            ),
			'_onlyinpro_bp03' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Block business profile page for an anonymous user',
                'desc'        => 'If this option is enabled then anonymous user not able to see business profile page.',
            ),
			'_onlyinpro_bp04' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Display business page date of publish',
                'desc'        => 'Date of publish will be show at the bottom of the business page. it shows the actual date in which the business was added to the directory',
            ),
			'_onlyinpro_bp05' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Display business page last date of update',
                'desc'        => 'Date of update will be show at the bottom of the business page. it shows the last date in which the business was last updated in the directory',
            ),
			'_onlyinpro_bp06' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Add Meta description',
                'desc'        => 'If this option is enabled the meta description HTML tag will be added on the business page based on the business pitch.',
            ),
			'_onlyinpro_bp07' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Show WordPress sidebar',
                'desc'        => 'If this option is enabled the WordPress sidebar section will be displayed on the business pages.',
            ),
			'_onlyinpro_bp08' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Show WordPress comments',
                'desc'        => 'If this option is enabled the WordPress comments section will be displayed on the business pages.',
            ),
			self::OPTION_BUSINESS_PAGE_SHOW_BACKLINK			 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => true,
				'category'		 => 'business',
				'subcategory'	 => 'templates',
				'title'			 => 'Show back to business directory index link',
				'desc'			 => 'Whether to display the back link to the business directory index on the business page.',
			),
			'_onlyinpro_bp09' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Back to business directory index link URL',
                'desc'        => 'Here you able to add custom URL for back to business directory index link, If empty then page will redirect to the CM Business Directory page.',
            ),
			'_onlyinpro_bp10' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Display business banner',
                'desc'        => 'Set this option if you want to display business banner on the business page.',
            ),
			self::OPTION_BUSINESS_PAGE_SHOW_EMAIL				 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => false,
				'category'		 => 'business',
				'subcategory'	 => 'templates',
				'title'			 => 'Show business email address',
				'desc'			 => 'Whether to show the business email address on the business page.',
			),
			'_onlyinpro_bp11' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Show business website URL',
                'desc'        => 'Whether to show the business website URL on the business page.',
            ),
			'_onlyinpro_bp12' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Enable Lightbox',
                'desc'        => 'If this option is enabled then lightbox auto apply on pictures and videos on the business pages.',
            ),
			'_onlyinpro_bp13' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Display Map',
                'desc'        => 'Display map in side bar of the business page',
            ),
			self::OPTION_ADDRESS_SHOWBUTTON						 => array(
				'type'			 => self::TYPE_SELECT,
				'default'		 => 'top',
				'category'		 => 'business',
				'subcategory'	 => 'templates',
				'title'			 => 'Display Address',
				'desc'			 => 'Controls where the buisness address should be displayed on the business page.',
				'options'		 => array( 'top' => 'On Top', 'side' => 'On Side' ),
			),
			'_onlyinpro_bp14' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Shows address in paragraph format',
                'desc'        => 'If this option is enabled, the address information will be displayed as a single paragraph without labels on the side box of the business pages.',
            ),
			'_onlyinpro_bp15' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Display Documents',
                'desc'        => 'Whether to show documents on the business page.',
            ),
			'_onlyinpro_bp16' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Make phone number clickable',
                'desc'        => 'Should the phone number clickable (href="tel:")',
            ),
			'_onlyinpro_bp17' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'templates',
                'title'       => 'Display print button',
                'desc'        => 'Whether to show the print button on the business page.',
            ),
			self::OPTION_CATEGORY_SHOWBUTTON					 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => true,
				'category'		 => 'business',
				'subcategory'	 => 'templates',
				'title'			 => 'Show Categories',
				'desc'			 => 'Controls whether the Categories should be displayed on the business page.',
			),
			// Business Page -> Side Box Information
			'_onlyinpro_bp18' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'sidebox',
                'title'       => 'Display business logo',
                'desc'        => 'Set this option if you want to display business logo on the business page.',
            ),
			'_onlyinpro_bp19' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'sidebox',
                'title'       => 'Address display location',
                'desc'        => 'Display Address information on the upper part or side bar of the business page',
            ),
			'_onlyinpro_bp20' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'sidebox',
                'title'       => 'Display Categories',
                'desc'        => 'Choose the way to display categories information on the business page. Top/sidebar or hide completely.',
            ),
			'_onlyinpro_bp21' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'sidebox',
                'title'       => 'Display Tags',
                'desc'        => 'Choose the way to display categories information on the business page. Top/sidebar or hide completely.',
            ),
			'_onlyinpro_bp22' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'sidebox',
                'title'       => 'Display business hours',
                'desc'        => 'Set this option if you want to display business hours on the business page.',
            ),
			'_onlyinpro_bp23' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'sidebox',
                'title'       => 'Business hours format',
                'desc'        => 'Choose business hours format for the business page.',
            ),
			// Business Page -> Related Businesses
			'_onlyinpro_bp24' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'related',
                'title'       => 'Show related businesses',
                'desc'        => 'Controls whether the related business widget should be displayed on the business page.',
            ),
			'_onlyinpro_bp25' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'related',
                'title'       => 'Related business by category',
                'desc'        => 'If this option is set, related businesses will have the same category as the displayed business.',
            ),
			'_onlyinpro_bp26' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'related',
                'title'       => 'Number of related businesses',
                'desc'        => 'Choose the number of related businesses to show.',
            ),
			'_onlyinpro_bp27' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'related',
                'title'       => 'Show related experts',
                'desc'        => 'Controls whether the related experts widget should be displayed on the business page.<br>Note: CM Expert Directory Pro plugin should be active.',
            ),
			'_onlyinpro_bp28' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'related',
                'title'       => 'Show related products',
                'desc'        => 'Controls whether the related products widget should be displayed on the business page.<br>Note: CM Product Directory Pro plugin should be active.',
            ),
			// Business Page -> Video Field
			'_onlyinpro_bp29' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'fields',
                'title'       => 'Activate Business Video field',
                'desc'        => 'Check "Yes" if you want to use Business Video Field',
            ),
			// Business Page -> Business Page Colors
			'_onlyinpro_bp30' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business page background',
                'desc'        => 'The background color for the business page',
            ),
			'_onlyinpro_bp31' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business social section text color',
                'desc'        => 'The color for the text in social box',
            ),
			'_onlyinpro_bp32' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business social section link color',
                'desc'        => 'The color for links in social box',
            ),
			'_onlyinpro_bp33' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business social section link on hover color',
                'desc'        => 'The color for links on hover in social box',
            ),
			'_onlyinpro_bp34' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business social section background color',
                'desc'        => 'The color for social box background',
            ),
			'_onlyinpro_bp35' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business address section text color',
                'desc'        => 'The color for text in address section',
            ),
			'_onlyinpro_bp36' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business address section link color',
                'desc'        => 'The color for links in address section',
            ),
			'_onlyinpro_bp37' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business address section link on hover color',
                'desc'        => 'The color for links on hover in address section',
            ),
			'_onlyinpro_bp38' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'colors',
                'title'       => 'Business address section background color',
                'desc'        => 'The color for address section background',
            ),
			// Business Page -> Additional Links
			'_onlyinpro_bp39' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'Show additional custom links',
                'desc'        => 'Set this option to show additional custom links on the business page in the business social information section',
            ),
			'_onlyinpro_bp40' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'First custom link label',
                'desc'        => 'This label will be shown on the business page in the social information section',
            ),
			'_onlyinpro_bp41' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'First custom link icon',
                'desc'        => 'This icon will be shown on the business page in the social information section',
            ),
			'_onlyinpro_bp42' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'Second custom link label',
                'desc'        => 'This label will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp43' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'Second custom link icon',
                'desc'        => 'This icon will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp44' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'Third custom link label',
                'desc'        => 'This label will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp45' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'Third custom link icon',
                'desc'        => 'This icon will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp46' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'Fourth custom link label',
                'desc'        => 'This label will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp47' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_links',
                'title'       => 'Fourth custom link icon',
                'desc'        => 'This icon will be shown on the business page in social information section',
            ),
			// Business Page -> Additional Fields
			'_onlyinpro_bp48' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Show additional custom fields',
                'desc'        => 'Set this option to show additional custom fields on the business page social information section',
            ),
			'_onlyinpro_bp49' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'First custom field label',
                'desc'        => 'This label will be shown on the business page in the social information section',
            ),
			'_onlyinpro_bp50' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'First custom field type',
                'desc'        => '',
            ),
			'_onlyinpro_bp51' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'First custom field icon',
                'desc'        => 'This icon will be shown on the business page in the social information section',
            ),
			'_onlyinpro_bp52' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'First custom field position',
                'desc'        => 'Select the place where this field should be displayed',
            ),
			'_onlyinpro_bp53' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Second custom field label',
                'desc'        => 'This label will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp54' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Second custom field type',
                'desc'        => '',
            ),
			'_onlyinpro_bp55' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Second custom field icon',
                'desc'        => 'This icon will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp56' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Second custom field position',
                'desc'        => 'Select the place where this field should be displayed',
            ),
			'_onlyinpro_bp57' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Third custom field label',
                'desc'        => 'This label will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp58' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Third custom field type',
                'desc'        => '',
            ),
			'_onlyinpro_bp59' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Third custom field icon',
                'desc'        => 'This icon will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp60' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Third custom field position',
                'desc'        => 'Select the place where this field should be displayed',
            ),
			'_onlyinpro_bp61' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Fourth custom field label',
                'desc'        => 'This label will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp62' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Fourth custom field type',
                'desc'        => '',
            ),
			'_onlyinpro_bp63' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Fourth custom field icon',
                'desc'        => 'This icon will be shown on the business page in social information section',
            ),
			'_onlyinpro_bp64' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'add_fields',
                'title'       => 'Fourth custom field position',
                'desc'        => 'Select the place where this field should be displayed',
            ),
			// Business Page -> WhatsApp Chat Widget
			'_onlyinpro_bp65' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'chat_widget',
                'title'       => 'Show WhatsApp chat widget',
                'desc'        => 'If enabled then widget will show on business profile page.<br><strong>Note: Business phone number should be exist then this widget will show otherwise not.</strong>',
            ),
			'_onlyinpro_bp66' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'chat_widget',
                'title'       => 'Show mobile only',
                'desc'        => 'If enabled then widget will show only on mobile devices otherwise on all devices.',
            ),
			'_onlyinpro_bp67' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'chat_widget',
                'title'       => 'Show for logged-in users only',
                'desc'        => 'If enabled then widget will show only for logged-in users otherwise for all.',
            ),
			'_onlyinpro_bp68' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'business',
                'subcategory' => 'chat_widget',
                'title'       => 'Widget code',
                'desc'        => 'You can always get a new code at getbutton.io and paste here.<br><strong>Note: You should replace phone number with <code>[business_phone]</code> shortcode.</strong>',
            ),
			// Advertisement -> Advertisement
			'_onlyinpro_ads1'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'advertisement',
                'subcategory' => 'advertisement',
                'title'       => 'Display the ads',
                'desc'        => 'Turning this OFF will disable all of the ads without needing to remove the scripts.',
            ),
			'_onlyinpro_ads2'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'advertisement',
                'subcategory' => 'advertisement',
                'title'       => 'Ads above related businesses',
                'desc'        => 'You can add any javascript or HTML code in here (including WordPress shortcodes).',
            ),		
			'_onlyinpro_ads3'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'advertisement',
                'subcategory' => 'advertisement',
                'title'       => 'Ads under related businesses',
                'desc'        => 'You can add any javascript or HTML code in here (including WordPress shortcodes).',
            ),	
			'_onlyinpro_ads4'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'advertisement',
                'subcategory' => 'advertisement',
                'title'       => 'Ads under business map',
                'desc'        => 'You can add any javascript or HTML code in here (including WordPress shortcodes).',
            ),	
			// Category List -> Category List
			'_onlyinpro_cat1'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'category_list',
                'subcategory' => 'category_list',
                'title'       => 'Display Category terms list',
                'desc'        => 'In enabled, then "Category" terms list display.',
            ),
			'_onlyinpro_cat2'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'category_list',
                'subcategory' => 'category_list',
                'title'       => 'Display subcategories in Category terms list?',
                'desc'        => 'Uncheck this option to hide the subcategories from the Category terms list.',
            ),		
			'_onlyinpro_cat3'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'category_list',
                'subcategory' => 'category_list',
                'title'       => 'Display Custom Taxonomy terms list',
                'desc'        => 'In enabled, then "Custom Taxonomy" terms list display.',
            ),	
			'_onlyinpro_cat4'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'category_list',
                'subcategory' => 'category_list',
                'title'       => 'Display Tag terms list',
                'desc'        => 'In enabled, then "Tag" terms list display.',
            ),	
			'_onlyinpro_cat5'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'category_list',
                'subcategory' => 'category_list',
                'title'       => 'Display the category icon in the categories list?',
                'desc'        => 'If this option is disabled no category icon will be displayed. If it is enabled - the chosen category icon will be displayed or the default if not set.',
            ),	
			'_onlyinpro_cat6'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'category_list',
                'subcategory' => 'category_list',
                'title'       => 'Change default category icon',
                'desc'        => 'Enter image URL',
            ),	
			// CM Star Rating Settings -> General Settings
			'_onlyinpro_star1'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'rating',
                'subcategory' => 'general',
                'title'       => 'Enable Star Rating System',
                'desc'        => 'Select this option if you want to use the Star Rating System.',
            ),
			'_onlyinpro_star2'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'rating',
                'subcategory' => 'general',
                'title'       => 'Display numerical rate',
                'desc'        => 'Select this option if you want to display numerical average rate near rating.',
            ),		
			'_onlyinpro_star3'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'rating',
                'subcategory' => 'general',
                'title'       => 'Display number of rates',
                'desc'        => 'Set this option if you want to display the number of rates for the post.',
            ),	
			'_onlyinpro_star4'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'rating',
                'subcategory' => 'general',
                'title'       => 'Display star rating on top of sidebar',
                'desc'        => 'Set this option if you want to display star rating on the top part of the sidebar. Otherwise star rating wil be displayed on the bottom.',
            ),	
			'_onlyinpro_star5'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'rating',
                'subcategory' => 'general',
                'title'       => 'Block IP',
                'desc'        => 'Write IPs to block users. User ";" as separator, e.g. 100.200.300; 100.200.301',
            ),	
			'_onlyinpro_star6'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'rating',
                'subcategory' => 'general',
                'title'       => 'Reset all rating',
                'desc'        => 'Delete all rating for all business',
            ),	
			// CM Star Rating Settings -> Vote Settings
			'_onlyinpro_star7'	  => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'rating',
                'subcategory' => 'vote',
                'title'       => 'Enable Vote System',
                'desc'        => 'Select this option if you want to use the vote system.',
            ),	
			// Business Directory -> Business Index Header
			CMBusinessDirectory::SHORTCODE_PAGE_OPTION			 => array(
				'type'			 => self::TYPE_STRING,
				'default'		 => '',
				'category'		 => 'index',
                'subcategory'	 => 'shortcode',
				'title'			 => 'Business Index Page ID',
				'desc'			 => 'Select the ID of the page with the <code>[cmbd_business]</code> shortcode. All backlinks will be pointing to that page.',
			),		
			'_onlyinpro_bd01' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'shortcode',
                'title'       => 'Business order by',
                'desc'        => 'Select how the businesses in the business directory index page should be ordered.',
            ),
			self::OPTION_BUSINESS_ORDERBY						 => array(
				'type'			 => self::TYPE_HIDDEN,
				'default'		 => 'menu_order',
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Business order by',
				'desc'			 => 'Select how the businesses in the Business Directory index page should be ordered.',
				'options'		 => array(
					'menu_order'	 => 'Menu Order',
					'post_title'	 => 'Business Name',
					'post_date'		 => 'Date Added',
					'post_modified'	 => 'Last Modified Date'
				)
			),
			'_onlyinpro_bd02' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'shortcode',
                'title'       => 'Order in ascending or descending order',
                'desc'        => 'Select whether the businesses in the directory index should be ordered in ascending or descending order.',
            ),
			self::OPTION_BUSINESS_ORDER							 => array(
				'type'			 => self::TYPE_HIDDEN,
				'default'		 => 'DESC',
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Order in ascending or descending order',
				'desc'			 => 'Select whether the businesses in the directory index should be ordered in ascending or descending order.',
				'options'		 => array( 'DESC'	 => 'DESC',
					'ASC'	 => 'ASC' ),
			),
			'_onlyinpro_bd03' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'shortcode',
                'title'       => 'Number of businesses on page',
                'desc'        => 'Set the number of items on a single directory page. Use <code>-1</code> to turn off the pagination.',
            ),
			self::OPTION_BUSINESS_BUSINESS_ON_PAGE				 => array(
				'type'			 => self::TYPE_HIDDEN,
				'default'		 => 15,
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Number of businesses on page',
				'desc'			 => 'Set the number of items on a single directory page. Use <code>-1</code> to turn off the pagination.',
			),
			/*
			self::OPTION_PAGINATION_TOP							 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => false,
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Show pagination on top',
				'desc'			 => 'Controls whether to show the pagination at the top of the directory index page.',
			),
			self::OPTION_PAGINATION_BOTTOM						 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => true,
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Show pagination on bottom',
				'desc'			 => 'Controls whether to show the pagination at the bottom of the directory index page.',
			),
			*/
			self::OPTION_PAGINATION_TOP_BOTTOM_BOTH							 => array(
				'type'			 => self::TYPE_RADIO,
				'default'		 => 'bottom',
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Where to show the pagination',
				'desc'			 => 'Choose where the pagination controls should appear: at the top, bottom, or both.',
				'options'		 => array( 'top' => 'Top', 'bottom' => 'Bottom', 'both' => 'Both' )
			),
			self::OPTION_FOUND_BUSINESS							 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => true,
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Show the number of businesses found',
				'desc'			 => 'Controls whether the number of the businesses found should be displayed.',
			),
			self::OPTION_POST_PER_PAGE_SHOW						 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => FALSE,
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Show items per page selection',
				'desc'			 => 'Should the number of items shown in the business directory index page be editable?'
			),		
			self::OPTION_BUTTONS_TARGET_BLANK					 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => FALSE,
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Open each business page on a new tab',
				'desc'			 => 'Should the business page be opened on a new tab? (target="_blank")',
			),
			self::OPTION_BUTTONS_BUSINES_PITCH_IMG				 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => FALSE,
				'category'		 => 'index',
				'subcategory'	 => 'shortcode',
				'title'			 => 'Business Pitch as image title',
				'desc'			 => 'Should the business pitch be shown as the title of the image?',
			),	
			'_onlyinpro_bd04' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'shortcode',
                'title'       => 'Link to Business Web Page instead of Business Page',
                'desc'        => 'Should businesses link to their external web url instead of Business Page? (Keeps Business Page link as a fallback if web url is empty)',
            ),
			'_onlyinpro_bd05' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'shortcode',
                'title'       => 'Only show items on search?',
                'desc'        => 'Select this option if you want to display the items only after user enters a search term.',
            ),
			// Business Directory -> Filters
			'_onlyinpro_bd06' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Run filters with AJAX',
                'desc'        => 'If enabled then filters will be work with AJAX.',
            ),
			'_onlyinpro_bd07' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Show search field',
                'desc'        => 'Should the business directory be searchable?',
            ),
			'_onlyinpro_bd08' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Search In Tags',
                'desc'        => 'Should the search also in tags?',
            ),
			'_onlyinpro_bd09' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Display filters one below each other',
                'desc'        => 'If enabled, then filters will show one below each other on business listing page.',
            ),
			'_onlyinpro_bd10' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Display box to search by city/zip fields',
                'desc'        => 'Set this option if you want to display field to check for search by city/zip fields.',
            ),
			'_onlyinpro_bd11' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Search by state',
                'desc'        => 'Set this option if you want to display state dropdown in filter. This is dropdown filter and will populate from businesses states.',
            ),
			'_onlyinpro_bd12' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Search by other info field',
                'desc'        => 'Set this option if you want to add search drop-down by other info field.',
            ),
			self::OPTION_BUSINESS_SHOWFILTER					 => array(
				'type'			 => self::TYPE_BOOL,
				'default'		 => TRUE,
				'category'		 => 'index',
				'subcategory'	 => 'filters',
				'title'			 => 'Show categories filter',
				'desc'			 => 'Should the categories be displayed on the business directory index page?',
			),
			'_onlyinpro_bd13' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Display Subcategories in categories filter?',
                'desc'        => 'Should the sub-categories be displayed in the business directory index page?',
            ),
			'_onlyinpro_bd14' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Show Custom Taxonomy filter',
                'desc'        => 'Should the Custom Taxonomy be displayed on the business directory index page?',
            ),
			'_onlyinpro_bd15' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Show Tags filter',
                'desc'        => 'Should the Tags be displayed on the business directory index page?',
            ),
			'_onlyinpro_bd16' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Display last name as first position in tags filter',
                'desc'        => 'Controls whether to show the tags last name as the first position. For example, instead of tag someone as John Smith, we would prefer: Smith John.',
            ),
			'_onlyinpro_bd17' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Last name words which you want to maintain at the end',
                'desc'        => 'This one use for above setting if enabled. e.g. DO,FACOG,MD etc.',
            ),
			self::OPTION_CATEGORY_SHOW_AS						 => array(
				'type'			 => self::TYPE_SELECT,
				'default'		 => 'tags',
				'category'		 => 'index',
				'subcategory'	 => 'filters',
				'title'			 => 'Display categories as',
				'desc'			 => 'Select how the categories should be presented.',
				'options'		 => array( 'tags' => 'Tags', 'dropdown' => 'Dropdown' )
			),
			'_onlyinpro_bd18' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'index',
                'subcategory' => 'filters',
                'title'       => 'Choose select style',
                'desc'        => 'Choose which style of select field you would like to use - normal (default browser "select") or custom (customized "select" with improved UI)',
            ),
			// Directory Appearance -> Current View
			'_onlyinpro_da01' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'view',
                'title'       => 'Default view',
                'desc'        => 'Select the view for the business directory',
            ),
			self::OPTION_BUSINESS_VIEW							 => array(
				'type'			 => self::TYPE_HIDDEN,
				'default'		 => 'directory-view',
				'category'		 => 'appearance',
				'subcategory'	 => 'view',
				'title'			 => 'Default view',
				'desc'			 => 'Select the view for the Business Directory',
			),
			'_onlyinpro_da02' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'view',
                'title'       => 'Heading level',
                'desc'        => 'Select the level of business title for the business directory',
            ),
			// Directory Appearance -> Business Directory View Settings
			'_onlyinpro_da03' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Display rating',
                'desc'        => 'If you want to display each business rating on the side.',
            ),
			'_onlyinpro_da04' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Display business description',
                'desc'        => 'If you want to display each business description below the title.',
            ),
			'_onlyinpro_da05' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Display business excerpt',
                'desc'        => 'If you want to display each business excerpt below the title.',
            ),
			'_onlyinpro_da06' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Display business pitch',
                'desc'        => 'If you want to display each business pitch below the title.',
            ),
			'_onlyinpro_da07' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Display business categories',
                'desc'        => 'If you want to display each business categories below the title.',
            ),
			'_onlyinpro_da08' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Display business address',
                'desc'        => 'If you want to display each business address.',
            ),
			'_onlyinpro_da09' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Show details button',
                'desc'        => 'Should the business box in the directory index include the "Details" button?',
            ),
			'_onlyinpro_da10' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'business',
                'title'       => 'Show business open/close status',
                'desc'        => 'Whether you want to display business open/close status.',
            ),
			// Directory Appearance -> Tiles View Settings
			self::OPTION_BUSINESS_BUSINESS_IN_ROW				 => array(
				'type'			 => self::TYPE_STRING,
				'default'		 => 3,
				'category'		 => 'appearance',
				'subcategory'	 => 'image_tiles',
				'title'			 => 'Businesses in a row',
				'desc'			 => 'Set the number of businesses in a row shown in the directory index. Use -1 to fit as many businesses in a row as possible',
			),
			'_onlyinpro_da11' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Businesses paddings',
                'desc'        => 'Set padding value. Use px/pt/em/% units (e.g. "0.5em")',
            ),
			self::OPTION_BUSINESS_WIDTH							 => array(
				'type'			 => self::TYPE_STRING,
				'default'		 => '280px',
				'category'		 => 'appearance',
				'subcategory'	 => 'image_tiles',
				'title'			 => 'Business box width',
				'desc'			 => 'Set the width of the business box in the directory index. Can be any valid CSS "width" eg: 20%, auto, 50em. (numeric values will be considered as number of "px")',
			),
			self::OPTION_BUSINESS_HEIGHT						 => array(
				'type'			 => self::TYPE_STRING,
				'default'		 => '335px',
				'category'		 => 'appearance',
				'subcategory'	 => 'image_tiles',
				'title'			 => 'Business box height',
				'desc'			 => 'Set the height of the business box in the directory index. Can be any valid CSS "width" eg: 20%, auto, 50em. (numeric values will be considered as number of "px")',
			),
			'_onlyinpro_da12' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Image container minimum height',
                'desc'        => 'If you use small images, set minimum height value to display image in the middle of the container. Use px/pt/em/% units (e.g. "220px")',
            ),
			'_onlyinpro_da13' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Display title',
                'desc'        => 'Set "Yes" if you want to display business title below image',
            ),
			'_onlyinpro_da14' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Enable round corner on images',
                'desc'        => 'Check this option if you want to round corner around each business image.',
            ),
			'_onlyinpro_da15' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Display border',
                'desc'        => 'Check this option if you want to display border around each business.',
            ),
			'_onlyinpro_da16' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Display videos instead of images',
                'desc'        => 'If enabled then videos will show in view instead of images.',
            ),
			'_onlyinpro_da17' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Show details button',
                'desc'        => 'Should the business box in the directory index include the "Details" button?',
            ),
			'_onlyinpro_da18' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Convert details button as dropdown',
                'desc'        => 'If enabled then user can see business information with drop-down.',
            ),
			'_onlyinpro_da19' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Show Tooltip when hovering over business image',
                'desc'        => 'Show Tooltip with excerpt when hovering over business image',
            ),
			'_onlyinpro_da20' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Display rating',
                'desc'        => 'Whether you want to display rating for each business.',
            ),
			'_onlyinpro_da21' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'image_tiles',
                'title'       => 'Show business open/close status',
                'desc'        => 'Whether you want to display business open/close status.',
            ),
			// Directory Appearance -> List View Settings
			'_onlyinpro_da22' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'list_view',
                'title'       => 'Display alphabetical index',
                'desc'        => 'Whether you want to display alphabetical index on top.',
            ),
			'_onlyinpro_da23' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'list_view',
                'title'       => 'Display separator line',
                'desc'        => 'Whether you want to display separation line below each business.',
            ),
			'_onlyinpro_da24' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'list_view',
                'title'       => 'Display rating',
                'desc'        => 'Whether you want to display rating for each business.',
            ),
			'_onlyinpro_da25' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'list_view',
                'title'       => 'Display business pitch',
                'desc'        => 'Whether you want to display business pitch next to business title.',
            ),
			'_onlyinpro_da26' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'list_view',
                'title'       => 'Show business open/close status',
                'desc'        => 'Whether you want to display business open/close status.',
            ),
			// Directory Appearance -> eCommerce View Settings
			'_onlyinpro_da27' => array(
                'type'        => self::TYPE_CUSTOM,
                'category'    => 'appearance',
                'subcategory' => 'ecommerce_view',
                'title'       => 'Show business open/close status',
                'desc'        => 'Whether you want to display business open/close status.',
            ),
		)
		);
	}

	public static function getOptionsConfigByCategory( $category, $subcategory = null ) {
		$options = self::getOptionsConfig();
		return array_filter( $options, function($val) use ($category, $subcategory) {
			if ( $val[ 'category' ] == $category ) {
				return (is_null( $subcategory ) OR $val[ 'subcategory' ] == $subcategory);
			}
		} );
	}

	public static function getOptionConfig( $name ) {
		$options = self::getOptionsConfig();
		if ( isset( $options[ $name ] ) ) {
			return $options[ $name ];
		}
	}

	public static function setOption( $name, $value ) {
		$options = self::getOptionsConfig();
		$checker = isset( $_POST[ $name ] ) ? ( (strpos( $name, self::SETTINGS_PREFIX ) === 0) ? 1 : 0 ) : 0;
		if ( isset( $options[ $name ] ) ) {
			$field	 = $options[ $name ];
			$old	 = get_option( $name );
			if ( is_array( $old ) OR is_object( $old ) OR strlen( (string) $old ) > 0 ) {
				update_option( $name, self::cast( $value, $field[ 'type' ] ) );
			} else {
				$result = update_option( $name, self::cast( $value, $field[ 'type' ] ) );
			}
		}
		if ( empty( $options[ $name ] ) && $checker ) {
			update_option( $name, $value );
		}
	}

	public static function deleteAllOptions() {
		$params	 = array();
		$options = self::getOptionsConfig();
		foreach ( $options as $name => $optionConfig ) {
			self::deleteOption( $name );
		}
		return $params;
	}

	public static function deleteOption( $name ) {
		$options = self::getOptionsConfig();
		if ( isset( $options[ $name ] ) ) {
			delete_option( $name );
		}
	}

	public static function getOption( $name ) {
		$options = self::getOptionsConfig();
		if ( isset( $options[ $name ] ) ) {
			$field			 = $options[ $name ];
			$defaultValue	 = (isset( $field[ 'default' ] ) ? $field[ 'default' ] : null);
			if ( self::TYPE_HIDDEN == $field[ 'type' ] ) {
				return $defaultValue;
			}
			return self::cast( get_option( $name, $defaultValue ), $field[ 'type' ] );
		}
	}

	public static function getCategories() {
		$categories	 = array();
		$options	 = self::getOptionsConfig();
		foreach ( $options as $option ) {
			$categories[] = $option[ 'category' ];
		}
		return $categories;
	}

	public static function getSubcategories( $category ) {
		$subcategories	 = array();
		$options		 = self::getOptionsConfig();
		foreach ( $options as $option ) {
			if ( $option[ 'category' ] == $category ) {
				$subcategories[] = $option[ 'subcategory' ];
			}
		}
		return $subcategories;
	}

	protected static function boolval( $val ) {
		return (boolean) $val;
	}

	protected static function arrayval( $val ) {
		if ( is_array( $val ) )
			return $val;
		else if ( is_object( $val ) )
			return (array) $val;
		else
			return array();
	}

	protected static function cast( $val, $type ) {
		if ( $type == self::TYPE_BOOL ) {
			return (intval( $val ) ? 1 : 0);
		} else {
			$castFunction = $type . 'val';
			if ( function_exists( $castFunction ) ) {
				return call_user_func( $castFunction, $val );
			} else if ( method_exists( __CLASS__, $castFunction ) ) {
				return call_user_func( array( __CLASS__, $castFunction ), $val );
			} else {
				return $val;
			}
		}
	}

	protected static function csv_lineval( $value ) {
		if ( !is_array( $value ) )
			$value = explode( ',', $value );
		return $value;
	}

	public static function processPostRequest() {
		$params = array();
		foreach ( array_keys($_POST) as $name ) {
			$params[ $name ] = filter_input(INPUT_POST, $name);
			if ( CMBD_Settings::OPTION_BUSINESS_PERMALINK == $name ) {
				$shortcodePageSlug	 = null;
				$shortcodePageId	 = get_option( CMBusinessDirectory::SHORTCODE_PAGE_OPTION );
				$post				 = get_post( $shortcodePageId );
				if ( !empty( $post ) ) {
					$shortcodePageSlug = $post->post_name;
					$params[ $name ] = '/' . ltrim($params[ $name ], "/"); //add the slash at the beginning to solve problems with mod_rewrite rules
				}
			}
			self::setOption( $name, $params[ $name ] );
		}

		return $params;
	}

	public static function userId( $userId = null ) {
		if ( empty( $userId ) )
			$userId = get_current_user_id();
		return $userId;
	}

	public static function isLoggedIn( $userId = null ) {
		$userId = self::userId( $userId );
		return !empty( $userId );
	}

	public static function getRolesOptions() {
		global $wp_roles;
		$result = array();
		if ( !empty( $wp_roles ) AND is_array( $wp_roles->roles ) )
			foreach ( $wp_roles->roles as $name => $role ) {
				$result[ $name ] = $role[ 'name' ];
			}
		return $result;
	}

	public static function canReportSpam( $userId = null ) {
		return (self::getOption( self::OPTION_SPAM_REPORTING_ENABLED ) AND ( self::getOption( self::OPTION_SPAM_REPORTING_GUESTS ) OR self::isLoggedIn( $userId )));
	}

	public static function getPagesOptions() {
		$pages	 = get_pages( array( 'number' => 100 ) );
		$result	 = array( null => '--' );
		foreach ( $pages as $page ) {
			$result[ $page->ID ] = $page->post_title;
		}
		return $result;
	}

	public static function areAttachmentsAllowed() {
		$ext = self::getOption( self::OPTION_ATTACHMENTS_FILE_EXTENSIONS );
		return (!empty( $ext ) AND ( self::getOption( self::OPTION_ATTACHMENTS_ANSWERS_ALLOW ) OR self::getOption( self::OPTION_ATTACHMENTS_QUESTIONS_ALLOW )));
	}

	public static function getLoginPageURL( $returnURL = null ) {
		if ( empty( $returnURL ) ) {
			$returnURL = get_permalink();
		}
		if ( $customURL = CMBD_Settings::getOption( CMBD_Settings::OPTION_LOGIN_PAGE_LINK_URL ) ) {
			return esc_url( add_query_arg( array( 'redirect_to' => urlencode( $returnURL ) ), $customURL ) );
		} else {
			return wp_login_url( $returnURL );
		}
	}

}
?>