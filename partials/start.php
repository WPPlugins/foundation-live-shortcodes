<?php
define( 'EPC_SC_URL', plugins_url('',dirname(__FILE__)). '/partials/' );
?>
<div id="sclist-wrapper" class="row">
<div id="shortcodes-list-wrapper" class="columns large-12">
<div id="sc-headwrap" class="row">
<span class="large-title">Add a shortcode</span>
<span class="small-title">Foundation Live Shortcode by epicadesign</span>
</div>
	<ul class="no-bullet epc-sclist">
		<li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'columns.php' ?>"><i class="fi-layout"></i>Columns</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'heading.php' ?>"><i class="fi-results"></i>Heading</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'list.php' ?>"><i class="fi-list"></i>List</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'notification.php' ?>"><i class="fi-comment"></i>Notification</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'blockquote.php' ?>"><i class="fi-quote"></i>Blockquote</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'label.php' ?>"><i class="fi-flag"></i>Label</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'panel.php' ?>"><i class="fi-bookmark"></i>Panel Box</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'pricing.php' ?>"><i class="fi-burst"></i>Pricing Box</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'progress.php' ?>"><i class="fi-battery-half"></i>Progress Bar</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'definition.php' ?>"><i class="fi-info"></i>Definition</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'button.php' ?>"><i class="fi-target-two"></i>Button</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'button-split.php' ?>"><i class="fi-indent-less"></i>Button Split</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'button-dropdown.php' ?>"><i class="fi-info"></i>Button Dropdown</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'thumbs.php' ?>"><i class="fi-photo"></i>Image</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'lightbox.php' ?>"><i class="fi-zoom-in"></i>Lightbox</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'video.php' ?>"><i class="fi-play-video"></i>Video</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'vcard.php' ?>"><i class="fi-address-book"></i>Vcard Box</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'accordion.php' ?>"><i class="fi-arrows-expand"></i>Accordion</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'inline-list.php' ?>"><i class="fi-list-thumbnails"></i>Inline List</a></li>
        <li><a class="shortcodes-list-item" href="#" data-target="<?php echo EPC_SC_URL .'keyboard.php' ?>"><i class="fi-die-one"></i>Keyboard</a></li>
    </ul>
    <div style="margin:30px 0">
    <div class="panel callout radius">
  	<h4>You want more shortcodes !!!</h4>
  	<p><strong>Purchase the <span style="color:#f1592a">PRO version</span> for <span style="color:#f1592a">only 12 €uros</span></strong>. <a style="float:right" class="button radius warning" href="http://epicadesign.fr/shop/foundation-live-shortcodes-pro/" target="_blank"><i class="fi-shopping-cart"></i> Purchase Pro Version</a></p>
    <p>PRO version add Slider shortcode - Modal Box shortcode - Tabs shortcode - Tooltip shortcode <br />
and Dropdown Button shortcode.</p>
</div>
    <div id="sc-bottomwrap" class="row">
    <div class="large-6 columns">
    <div class="medium-title">Informations</div>
    <ul class="square">
    <li>Based on <a href="http://foundation.zurb.com/" target="_blank">ZURB Foundation 5.5 0</a></li>
    <li>Use <a href="http://zurb.com/playground/foundation-icon-fonts-3" target="_blank">ZURB Foundation Icons Fonts 3.0</a></li>
    <li>Plugin version installed : <strong>1.0.0</strong></li>
    </ul>
    </div>
    <div class="large-6 columns">
    <div class="medium-title">Support</div>
    <ul class="square">
    <li><a href="http://epicadesign.fr/" target="_blank">Author website</a></li>
    <li><a href="http://epicadesign.fr/" target="_blank">Plugin Page</a></li>
    <li><a href="http://epicadesign.fr/" target="_blank">Support Page</a></li>
    </ul>
    </div>
    </div>
</div>
</div>

		<div id="return-selected-shortcode" class="masked">
        
        </div>
 
 <div id="adding-btn" class="row masked">
 <hr />
<div class="large-12 columns text-right">
<input type="hidden" id="epc-construct-shortcode"><button class="button" id="generate-shortcode">Add this Shortcode</button>
<div class="clearfix" style="height:30px"></div>
</div><!--/*. large 12 -->
</div><!--/*. row -->
