<?php
include_once CMBD_PLUGIN_DIR . 'backend/classes/SettingsViewAbstract.php';

class CMBD_SettingsView extends CMBD_SettingsViewAbstract {

    public function renderSubcategory($category, $subcategory) {
		$cls = '';
		//if($subcategory == 'business_statistic') {
		//	$cls = 'onlyinpro';
		//}
        return sprintf('<table class="'.$cls.'"><caption>%s</caption>%s</table>', esc_html($this->getSubcategoryTitle($category, $subcategory)), parent::renderSubcategory($category, $subcategory)
        );
    }

    public function renderOption($name, array $option = array()) {
		if(strpos($name, 'onlyinpro') == 1) {
			return sprintf('<tr class="onlyinpro">%s</tr>', parent::renderOption($name, $option));
		} else {
			return sprintf('<tr>%s</tr>', parent::renderOption($name, $option));	
		}
    }

    public function renderOptionPlain($name, array $option = array()) {
        return sprintf('<div>%s</div>', parent::renderOption($name, $option));
    }

    public function renderOptionTitle($option) {
        return sprintf('<th scope="row">%s:</th>', parent::renderOptionTitle($option));
    }

    public function renderOptionControls($name, array $option = array()) {
        return sprintf('<td>%s</td>', parent::renderOptionControls($name, $option));
    }

    public function renderOptionDescription($option) {
        return sprintf('<td>%s</td>', parent::renderOptionDescription($option));
    }

    protected function getSubcategoryTitle($category, $subcategory) {
        $subcategories = $this->getSubcategories();
        if( isset($subcategories[$category]) AND isset($subcategories[$category][$subcategory]) ) {
            return CMBusinessDirectory::__($subcategories[$category][$subcategory]);
        } else {
            return $subcategory;
        }
    }

    protected function getCategories() {
        return apply_filters('cmbd_settings_pages', CMBD_Settings::$categories);
    }

    protected function getSubcategories() {
        return apply_filters('cmbd_settings_pages_groups', CMBD_Settings::$subcategories);
    }
    
 	public function renderFileupload($option, $value=null) {
    	$script = "
    	(function ($) {

    	$(document).ready(function ($) {		
    	// upload
        $('.upload_image_button_".$option."').click(function() {
            formfield = $('.upload_image_".$option."').attr('name');
            tb_show( '', 'media-upload.php?type=image&amp;TB_iframe=true' );
            
            var that = $(this);
            var restore_send_to_editor = window.send_to_editor; 
            window.send_to_editor = function(html) {
                imgurl = $(html).attr('src');
                $('.upload_image_".$option."').val(imgurl);
                tb_remove();
            };
            //window.send_to_editor = restore_send_to_editor;
            return false;
        });
                		
        });        		
        })(jQuery);";
        return sprintf('<script>'.$script.'</script>%s', parent::renderFileupload($option));
    }

}