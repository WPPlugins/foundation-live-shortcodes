<?php

function epc_scload_files() {
	if (get_option ('epcsc_radio_buttons') == 'nothemeupdate') {
	 	//compatible theme
	} elseif (get_option ('epcsc_radio_buttons') == 'minthemeupdate') {
		wp_enqueue_script( 'modernizr', EPC_SC_FILES . 'js/modernizr.min.js', array('jquery'), '2.8.3', true );
	} elseif (get_option ('epcsc_radio_buttons') == 'miniconthemeupdate') {
		wp_enqueue_style( 'foundation-font', EPC_SC_FILES . 'fonts/foundation-icons.css');
		wp_enqueue_script( 'modernizr', EPC_SC_FILES . 'js/modernizr.min.js', array('jquery'), '2.8.3', true );
	} elseif (get_option ('epcsc_radio_buttons') == 'mediumthemeupdate') {
		wp_enqueue_style( 'foundation-font', EPC_SC_FILES . 'fonts/foundation-icons.css');
		wp_enqueue_style( 'foundation-front', EPC_SC_FILES . 'css/foundation.min.css');
		wp_enqueue_style( 'epica-rules', EPC_SC_FILES . 'css/epica.run.css');
		wp_enqueue_script( 'foundation', EPC_SC_FILES . 'js/foundation.min.js', array('jquery'), '5.5.0', true );
		wp_enqueue_script( 'foundation-run', EPC_SC_FILES . 'js/foundation.run.js', array('jquery'), '5.5.0', true );
		wp_enqueue_script( 'epica-script', EPC_SC_FILES . 'js/epica.run.js', array('jquery'), '5.5.0', true );
	} elseif (get_option ('epcsc_radio_buttons') == 'maxthemeupdate') {
		wp_enqueue_style( 'foundation-font', EPC_SC_FILES . 'fonts/foundation-icons.css');
		wp_enqueue_style( 'foundation-front', EPC_SC_FILES . 'css/foundation.min.css');
		wp_enqueue_style( 'epica-rules', EPC_SC_FILES . 'css/epica.run.css');
		wp_enqueue_script( 'modernizr', EPC_SC_FILES . 'js/modernizr.min.js', array('jquery'), '2.8.3', true );
		wp_enqueue_script( 'foundation', EPC_SC_FILES . 'js/foundation.min.js', array('jquery'), '5.5.0', true );
		wp_enqueue_script( 'foundation-run', EPC_SC_FILES . 'js/foundation.run.js', array('jquery'), '5.5.0', true );
		wp_enqueue_script( 'epica-script', EPC_SC_FILES . 'js/epica.run.js', array('jquery'), '5.5.0', true );
	}  else {
		//secure: no choice = no update files
	}
}
add_action('wp_enqueue_scripts', 'epc_scload_files');

// COLUMNS
// Foundation Columns
function sc_columns( $atts, $content ) {
    extract(shortcode_atts(array(

    ), $atts));

    return '<div class="row epicafix">'. do_shortcode ( $content ) .'</div>';
}

function sc_column( $atts, $content ) {
    extract(shortcode_atts(array(
        'size' => '',
    ), $atts));

    return '<div class="epicafix column large-'. $size .'">'. do_shortcode ( $content ) .'</div>';
}

// Compatibility Columns
// COLUMNS
function sc_epc_columns( $atts, $content ) {
    extract(shortcode_atts(array(

    ), $atts));

    return '<div class="columnfix">'. do_shortcode ( $content ) .'</div>';
}

function sc_epc_column( $atts, $content ) {
    extract(shortcode_atts(array(
        'size' => '',
    ), $atts));

    return '<div class="epc-build-columns epicafix epc-columns-size-'. $size .'">'. do_shortcode ( $content ) .'</div>';
}

// Return the matched compatibility
	if ((get_option ('epcsc_radio_buttons') == 'nothemeupdate') || (get_option ('epcsc_radio_buttons') == 'minthemeupdate') || (get_option ('epcsc_radio_buttons') == 'miniconthemeupdate')) {
	 	add_shortcode( 'epc_columnsblock', 'sc_columns' );
		add_shortcode( 'epc_column', 'sc_column' );
	} elseif ((get_option ('epcsc_radio_buttons') == 'mediumthemeupdate') || (get_option ('epcsc_radio_buttons') == 'maxthemeupdate')) {
		add_shortcode( 'epc_columnsblock', 'sc_epc_columns' );
		add_shortcode( 'epc_column', 'sc_epc_column' );
	} else {
		
	} 


//HEADING
function sc_heading( $atts ) {
    extract(shortcode_atts(array(
        'text' => '',
        'smalltext' => '',
		'size' => '',
    ), $atts));
	if (!empty($smalltext)) {
		$mintext = ' <small class="epicafix">'. $smalltext .'</small>';
		}else{
		$mintext = '';
		}

    return '<'. $size .' class="epicafix">'. $text . $mintext .'</'. $size .'>';
}
add_shortcode( 'epc_heading', 'sc_heading' );

// LIST
function sc_list( $atts, $content ) {
    extract(shortcode_atts(array(
		'type' => '',
    ), $atts));

    return '<ul class="epicafix '. $type .'">'. do_shortcode ( $content ) .'</ul>';
}
add_shortcode( 'epc_list', 'sc_list' );

function sc_listitem( $atts, $content ) {
    extract(shortcode_atts(array(
        
    ), $atts));

    return '<li>'. do_shortcode ( $content ) .'</li>';
}
add_shortcode( 'epc_listitem', 'sc_listitem' );

// NOTIFICATION
function sc_notification( $atts, $content ) {
    extract(shortcode_atts(array(
        'style' => '',
		'corner' => '',
		'close' => 'no',
    ), $atts));
	if ($close == 'yes') {
		$addclose = '<a href="#" class="close">&times;</a>';
		}else{
		$addclose = '';
		}

    return '<div data-alert="" class="epicafix alert-box '. $style .' '. $corner .'">'. $addclose .''. do_shortcode ( $content ) .'</div>';
}
add_shortcode( 'epc_alert', 'sc_notification' );

//BLOCKQUOTE
function sc_quote( $atts, $content ) {
    extract(shortcode_atts(array(
        'author' => '',
        'authorlink' => '',
		'linkopen' => '',
    ), $atts));
	if (!empty($author) && !empty($authorlink)) {
			$rtnauthor = '<cite><a href="'.$authorlink.'" target="'.$linkopen.'">'. $author .'</a></cite>';
		} elseif (!empty($author) && empty($authorlink)) {
			$rtnauthor = '<cite>'. $author .'</cite>';
		} elseif (empty($author)) {
			$rtnauthor = '';
		} else {
			$rtnauthor = '';
		} 
		
    return '<blockquote class="epicafix">'. $content . $rtnauthor .'</blockquote>';
}
add_shortcode( 'epc_quote', 'sc_quote' );

// LABEL
function sc_label( $atts ) {
    extract(shortcode_atts(array(
        'text' => '',
		'style' => '',
		'corner' => '',
    ), $atts));

    return '<span class="epicafix label '. $style .' '. $corner .'">'. $text .'</span>';
}
add_shortcode( 'epc_label', 'sc_label' );

// PANEL
function sc_panel( $atts, $content ) {
    extract(shortcode_atts(array(
		'style' => '',
    ), $atts));

    return '<div class="epicafix panel '. $style .'">'. do_shortcode ( $content ) .'</div>';
}
add_shortcode( 'epc_panel', 'sc_panel' );

// PRICING TABLE
function sc_pricing( $atts, $content ) {
    extract(shortcode_atts(array(
		'title' => '',
		'price' => '',
		'description' => '',
		'buttontext' => '',
		'buttonlink' => '',
		'buttontarget' => '',
		'buttonstyle' => '',
		'buttoncorner' => '',
    ), $atts));

    return '<ul class="epicafix pricing-table"><li class="title">'. $title .'</li><li class="price">'. $price .'</li><li class="description">'. $description .'</li>'. do_shortcode ( $content ) .'<li class="cta-button"><a class="epicafix button '. $buttonstyle .' '. $buttoncorner .'" href="'. $buttonlink .'" target="'. $buttontarget .'">'. $buttontext .'</a></li></ul>';
}
add_shortcode( 'epc_pricing', 'sc_pricing' );

function sc_priceitem( $atts, $content ) {
    extract(shortcode_atts(array(
		
    ), $atts));

    return '<li class="bullet-item">'. $content .'</li>';
}
add_shortcode( 'epc_priceitem', 'sc_priceitem' );

// PROGRESS BAR
function sc_progress( $atts ) {
    extract(shortcode_atts(array(
		'globalsize' => '',
		'barsize' => '',
		'barcolor' => '',
		'barcorner' => '',
    ), $atts));

    return '<div style="width:'. $globalsize .'%;" class="epicafix progress '. $barcolor .' '. $barcorner .'"><span class="meter" style="width: '. $barsize .'%"></span></div>';
}
add_shortcode( 'epc_progress', 'sc_progress' );

// DEFINITION
function sc_definition( $atts, $content ) {
    extract(shortcode_atts(array(
		'title' => '',
    ), $atts));

    return '<dl class="epicafix"><dt>'. $title .'</dt><dd>'. do_shortcode ( $content ) .'</dd></dl>';
}
add_shortcode( 'epc_definition', 'sc_definition' );

// BUTTON
function sc_button( $atts ) {
    extract(shortcode_atts(array(
		'text' => '',
		'link' => '',
		'target' => '',
		'size' => '',
		'style' => '',
		'corner' => '',
		'icon' => '',
		'push' => '',
    ), $atts));
	if ($push == 'yes') {
		$rtnpush = ' button-push';
		}else{
		$rtnpush = '';
		}
	if (!empty($icon)) {
		$rtnicon = '<i class="'. $icon .''. $rtnpush .'"></i>';
		}else{
		$rtnicon = '';
		}

    return '<a class="epicafix button '. $size .' '. $style .' '. $corner .'" href="'. $link .'" target="'. $target .'">'. $rtnicon .''. $text .'</a>';
}
add_shortcode( 'epc_button', 'sc_button' );

// BUTTON SPLIT
function sc_buttonsplit( $atts, $content ) {
    extract(shortcode_atts(array(
		'text' => '',
		'size' => '',
		'style' => '',
		'corner' => '',
		'icon' => '',
		'push' => '',
    ), $atts));
	if ($push == 'yes') {
		$rtnpush = ' button-push';
		}else{
		$rtnpush = '';
		}
	if (!empty($icon)) {
		$rtnicon = '<i class="'. $icon .''. $rtnpush .'"></i>';
		}else{
		$rtnicon = '';
		}
		$gen_id = substr(md5(microtime()),rand(0,26),5);
		$fix_id = rand(1,99);

    return '<a class="epicafix button split '. $size .' '. $style .' '. $corner .'" href="#">'. $rtnicon .''. $text .'<span data-dropdown="sc'. $gen_id .''. $fix_id .'split"></span></a><br><ul id="sc'. $gen_id .''. $fix_id .'split" class="f-dropdown epicafix" data-dropdown-content>'. do_shortcode ( $content ) .'</ul>';
}
add_shortcode( 'epc_buttonsplit', 'sc_buttonsplit' );

// BUTTON SPLIT LINK
function sc_buttonsplit_link( $atts ) {
    extract(shortcode_atts(array(
		'text' => '',
		'link' => '',
		'target' => '',
    ), $atts));

    return '<li><a href="'. $link .'" target="'. $target .'">'. $text .'</a></li>';
}
add_shortcode( 'buttonsplit_link', 'sc_buttonsplit_link' );

// BUTTON DROPDOWN
function sc_buttondrop( $atts, $content ) {
    extract(shortcode_atts(array(
		'text' => '',
		'size' => '',
		'style' => '',
		'corner' => '',
		'icon' => '',
		'push' => '',
    ), $atts));
	if ($push == 'yes') {
		$rtnpush = ' button-push';
		}else{
		$rtnpush = '';
		}
	if (!empty($icon)) {
		$rtnicon = '<i class="'. $icon .''. $rtnpush .'"></i>';
		}else{
		$rtnicon = '';
		}
		$gen_id = substr(md5(microtime()),rand(0,26),5);
		$fix_id = rand(1,99);

    return '<button class="epicafix button dropdown '. $size .' '. $style .' '. $corner .'" data-dropdown="sc'. $gen_id .''. $fix_id .'bdrop" aria-controls="drop" aria-expanded="false">'. $rtnicon .''. $text .'</button><br><ul id="sc'. $gen_id .''. $fix_id .'bdrop" data-dropdown-content class="epicafix f-dropdown" role="menu" aria-hidden="false" tabindex="-1">'. do_shortcode ( $content ) .'</ul>';
}
add_shortcode( 'epc_buttondrop', 'sc_buttondrop' );

// BUTTON DROPDOWN LINK
function sc_buttondrop_link( $atts ) {
    extract(shortcode_atts(array(
		'text' => '',
		'link' => '',
		'target' => '',
    ), $atts));

    return '<li><a href="'. $link .'" target="'. $target .'">'. $text .'</a></li>';
}
add_shortcode( 'buttondrop_link', 'sc_buttondrop_link' );

// THUMBNAILS
function sc_image( $atts, $content ) {
    extract(shortcode_atts(array(
		'img' => '',
		'size' => '',
		'radius' => '',
		'link' => '',
		'linkurl' => '',
		'openlink' => '',
    ), $atts));
	if ($radius == 'yes') {
		$rtncorner = ' radius';
		}else{
		$rtncorner = '';
		}
	if ($link == 'yes') {
		$rtnlink = '<a class="epicafix th" href="'. $linkurl .'" target="'. $openlink .'"><img class="'. $rtncorner .'" src="'. $img .'"></a>';
		}else{
		$rtnlink = '<img class="'. $rtncorner .'" src="'. $img .'">';
		}
		
		return '<figure style="width:'. $size .'%;" class="convert-inlineblock">'. $rtnlink .'<figcaption style="width:100%;">'. do_shortcode ( $content ) .'</figcaption></figure>';
}
add_shortcode( 'epc_image', 'sc_image' );

// LIGHTBOX
function sc_lightbox( $atts, $content ) {
    extract(shortcode_atts(array(
		'img' => '',
		'size' => '',
		'radius' => '',
		'caption' => '',
    ), $atts));
	if ($radius == 'yes') {
		$rtncorner = ' radius';
		}else{
		$rtncorner = '';
		}
		
		return '<ul class="clearing-thumbs" data-clearing>
		<li><a href="'. $img .'"><figure><img style="width:'. $size .'%" class="epicafix '. $rtncorner .'" data-caption="'. $caption .'" src="'. $img .'"></figure></a></li>
		</ul>';
}
add_shortcode( 'epc_lightbox', 'sc_lightbox' );

// YOUTUBE VIDEO
function sc_video( $atts, $content ) {
    extract(shortcode_atts(array(
		'source' => '',
		'size' => '',
    ), $atts));
	$rtnsource = str_replace('watch?v=' ,'embed/',$source);
		
		return '<div class="epc-videowrapper" style="max-width:'. $size .'%"><div class="flex-video"><iframe src="'. $rtnsource .'" frameborder="0" allowfullscreen></iframe></div></div>';
}
add_shortcode( 'epc_video', 'sc_video' );

// VCARD
function sc_vcard( $atts, $content ) {
    extract(shortcode_atts(array(
		'name' => '',
		'address' => '',
		'locality' => '',
		'state' => '',
		'email' => '',
		'additionnal' => '',
    ), $atts));
		
		return '<ul class="epicafix vcard"><li class="fn">'. $name .'</li><li class="street-address">'. $address .'</li><li class="locality">'. $locality .'</li><li><span class="state">'. $state .'</span></li><li class="email"><a href="#">'. $email .'</a></li><li class="vcard-additionnal">'. $additionnal .'</li></ul>';
}
add_shortcode( 'epc_vcard', 'sc_vcard' );

// ACCORDION WRAPPER
function sc_accordions( $atts, $content ) {
    extract(shortcode_atts(array(

    ), $atts));
		
		return '<ul class="epicafix accordion" data-accordion>'. do_shortcode ( $content ) .'</ul>';
}
add_shortcode( 'epc_accordions', 'sc_accordions' );

// ACCORDION ITEM
function sc_accordion( $atts, $content ) {
    extract(shortcode_atts(array(
		'title' => '',
    ), $atts));
	$gen_id = substr(md5(microtime()),rand(0,26),5);
	$fix_id = rand(1,99);
		
		return '<li class="accordion-navigation"><a href="#sc'. $gen_id .''. $fix_id .'tog">'. $title .'</a><div id="sc'. $gen_id .''. $fix_id .'tog" class="content">'. do_shortcode ( $content ) .'</div></li>';
}
add_shortcode( 'epc_accordion', 'sc_accordion' );

// INLINE LINK LIST WRAPPER
function sc_inlinelist( $atts, $content ) {
    extract(shortcode_atts(array(

    ), $atts));
		
		return '<ul class="epicafix inline-list">'. do_shortcode ( $content ) .'</ul>';
}
add_shortcode( 'epc_inlinelist', 'sc_inlinelist' );

// INLINE LINK LIST
function sc_inline_link( $atts, $content ) {
    extract(shortcode_atts(array(
		'text' => '',
		'link' => '',
		'target' => '',
    ), $atts));
		
		return '<li><a href="'. $link .'" target="'. $target .'">'. $text .'</a></li>';
}
add_shortcode( 'inline_link', 'sc_inline_link' );

// KEYBOARD
function sc_keyboard( $atts ) {
    extract(shortcode_atts(array(
		'touch' => '',
    ), $atts));
		
		return '<kbd class="epicafix">'. $touch .'</kbd>';
}
add_shortcode( 'epc_keyboard', 'sc_keyboard' );

