<div id="epc-shortcode-header" class="showthis">
<h4>Create Accordion</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4>
<hr>
<div class="text-right">
<button class="button tiny" id="clone_this_group">ADD A TAB</button> 
</div><!--/*.text-right-->
<div class="fields-cloned" id="clone_wrapper">
<label>Accordion title
        <input id="accordion_title" type="text" placeholder="accordion title" value="Accordion 1"/>
</label>
<label>Accordion content
        <textarea id="accordion_content" rows="3" placeholder="Insert your tab content here ..."></textarea>
</label>
    <p><em>If you want to use another shortcode in the content, leave it blank and add items directly in the Wordpress editor</em></p>
</div><!--/*. fields-cloned -->
</div><!--/*. col-12 -->

</div><!--/*. row -->
  
<div id="preview-wrapper" class="row">
<div class="large-12 columns">
<hr>
<div id="frontend-preview">
<div id="frontend-preview-header">
<h4>Shortcode Front End Result</h4>
<button id="refresh-preview" class="button alert tiny"><i class="fi-refresh"></i> Refresh</button>
<div class="clearfix" style="height:20px"></div>
</div>
<div id="this-shortcode-preview">
<!-- Insert front end shortcode -->

<ul class="accordion" data-accordion>
  <li class="accordion-navigation">
	<a href="#panel1a">Accordion 1</a>
    <div id="panel1a" class="content active">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </li>
</ul>

</div>


</div><!--/*. row -->



<script>
jQuery(function(a){a(document).foundation("accordion","reflow");a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});var b='<div class="fields-cloned" id="clone_wrapper"><hr><label>Accordion title<input id="accordion_title" type="text" placeholder="accordion title" /></label><label>Accordion content<textarea id="accordion_content" rows="3" placeholder="Insert your tab content here ..."></textarea></label><p><em>If you want to use another shortcode in the content, leave it blank and add items directly in the Wordpress editor</em></p><button style="float:right;margin-top:22px" class="remove_field button tiny alert">remove</button></div>';a("#clone_this_group").on("click",function(){a(b).clone().insertAfter(".fields-cloned:last");});a(".row").on("click",".remove_field",function(d){d.preventDefault();a(this).parent("div").remove();});a("#refresh-preview").click(c);a("#accordion_content").html(mce_selection);console.log(mce_selection);a("#accordion_title").html(c).keyup(c);a("#accordion_content").html(c).keyup(c);function c(){var e=a(".fields-cloned").map(function(g){return'[epc_accordion number="'+g+'" title="'+a("#accordion_title",this).val()+'"]'+a("#accordion_content",this).val()+"[/epc_accordion]";}).get().join("");var f=a(".fields-cloned").map(function(g){return'<li class="accordion-navigation"><a  href="#panel'+g+'a">'+a("#accordion_title",this).val()+'</a><div id="panel'+g+'a" class="content">'+a("#accordion_content",this).val().replace(/\r\n|\r|\n/g,"<br />")+"</div></li>";}).get().join("");a(".accordion").html(f);a(".accordion li:first-child .content").addClass("active");var d=("[epc_accordions]"+e+"[/epc_accordions]");a("#epc-construct-shortcode").val(d);}});
</script>
