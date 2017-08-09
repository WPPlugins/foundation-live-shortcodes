<?php
// ADD files

define( 'EPC_SC_FILES', plugins_url('foundation-live-shortcodes',dirname(__FILE__)). '/scassets/' );

function epc_load_scfields() {
    global $parent_file;
    if ( $parent_file == 'edit.php' || $parent_file == 'edit.php?post_type=page') {
    wp_register_style( 'foundation', EPC_SC_FILES . 'css/foundation-back.css', false, '5.5.0' );
        wp_enqueue_style( 'foundation' );
	wp_register_style( 'foundation-icon', EPC_SC_FILES . 'fonts/foundation-icons.css', false, '3.0.0' );
        wp_enqueue_style( 'foundation-icon' );
	wp_register_style( 'sc-backstyle', EPC_SC_FILES . 'css/sc-backstyle.css', false, '1.0.0' );
        wp_enqueue_style( 'sc-backstyle' );
	wp_enqueue_script( 'modernizr', EPC_SC_FILES . 'js/modernizr.min.js', array('jquery'), '2.8.3', true );
	wp_enqueue_script( 'foundation', EPC_SC_FILES . 'js/foundation.min.js', array('jquery'), '5.5.0', true );
	wp_enqueue_script( 'sc-backscript', EPC_SC_FILES . 'js/sc-backscript.js', false, '1.0.0', true );
    } else {
	}
}

add_filter('admin_enqueue_scripts', 'epc_load_scfields');

add_action('media_buttons_context','add_tinymce_media_button');
function add_tinymce_media_button($context){

return $context.=__("
<a href=\"#TB_inline?width=480&inlineId=shortcode_popup&width=auto&height=513\" class=\"button thickbox\" id=\"shortcode_popup_button\" title=\"EPICA DESIGN live shortcodes\"><img style=\"width:26px; margin:0 3px 3px -3px\" src=\"http://epicadesign.fr/assets/ico/apple-touch-icon-57-precomposed.png\"/>Shortcodes</a>");
}

add_action('admin_footer','shortcode_button_start_popup');
function shortcode_button_start_popup(){?>
  <div id="shortcode_popup" style="display:none;">
    <!--".wrap" class div is needed to make thickbox content look good-->
    <div id="epc-stabilize-wrapper" class="thewrap">
    <div id="epc-shortcode-header" class="masked">
    <button id="display-preview-shortcode" class="button alert tiny"><i class="fi-zoom-in"></i> Show Preview</button>
    <button id="back-menu-shortcode" class="button tiny"><i class="fi-x"></i> Back Menu</button>
    </div>

    <div class="epc-shortcodes-wrap">

       <?php  include 'partials/start.php'; ?>
              
    </div>
    </div>
  </div>
<?php
}

add_action('admin_footer','epc_return_shortcode_to_editor');
function epc_return_shortcode_to_editor(){?>
<script>
var mce_select;
jQuery('body').on('click', '#shortcode_popup_button', function (e) {
	e.preventDefault();	
	mce_selection = (typeof tinyMCE !== 'undefined' && tinyMCE.activeEditor != null && tinyMCE.activeEditor.hasOwnProperty('selection')) ? tinyMCE.activeEditor.selection.getContent({
						format: 'text'
					}) : '';
	var mce_select = mce_selection;
});

jQuery('#generate-shortcode').on('click',function(){
  var user_content = jQuery('#epc-construct-shortcode').val();
  var shortcode = user_content;
  if( !tinyMCE.activeEditor || tinyMCE.activeEditor.isHidden()) {
    jQuery('textarea#content').val(shortcode);
  } else {
    tinyMCE.execCommand('mceInsertContent', false, shortcode);
  }
  //close the thickbox after adding shortcode to editor
  self.parent.tb_remove();
});
</script>
<?php
}