<div id="epc-shortcode-header" class="showthis">
<h4>Create Inline Link List</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">

<div class="text-right">
<button class="button tiny" id="clone_this_group">ADD A LINK</button> 
</div><!--/*.text-right-->
<div class="row create_the_link">
<div class="fields-cloned" id="clone_wrapper">
<div class="large-4 columns">
<label>link text
        <input id="inlinelist_link" type="text" placeholder="button link"/>
</label>
</div>
<div class="large-4 columns">
<label>link url
        <input id="inlinelist_url" type="text" placeholder="button link"/>
</label>
</div>
<div class="large-3 columns">
<label>link target
        <select id="inlinelist_target">
          <option value="">Same Windows</option>
          <option value="_blank">New Windows</option>
        </select>
</label>
</div>

</div><!--/*.fields-cloned-->


<hr>
</div><!--/*. col-12 -->
</div>
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
<div class="epc-list">
<!-- front-end construct -->
	<ul class="inline-list">
  
	</ul>
</div>

</div>


<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});var b='<div class="fields-cloned" id="clone_wrapper"><hr><div class="large-4 columns"><label>link text<input id="inlinelist_link" type="text" placeholder="button link"/></label></div><div class="large-4 columns"><label>link url<input id="inlinelist_url" type="text" placeholder="button link"/></label></div><div class="large-3 columns"><label>link target<select id="inlinelist_target"><option value="">Same Windows</option><option value="_blank">New Windows</option></select></label></div><button style="float:right;margin-top:22px" class="remove_field button tiny alert">remove</button></div>';a("#clone_this_group").on("click",function(){a(b).clone().insertAfter(".fields-cloned:last");});a(".row").on("click",".remove_field",function(d){d.preventDefault();a(this).parent("div").remove();});a("#refresh-preview").click(c);function c(){var f=a(".fields-cloned").map(function(g){return'[inline_link number="'+g+'" text="'+a("#inlinelist_link",this).val()+'" link="'+a("#inlinelist_url",this).val()+'" target="'+a("#inlinelist_target",this).val()+'"]';}).get().join("");var d=a(".fields-cloned").map(function(){return'<li><a href="'+a("#inlinelist_url",this).val()+'" target="'+a("#inlinelist_target",this).val()+'">'+a("#inlinelist_link",this).val()+"</a></li>";}).get().join("");a(".inline-list").html(d);var e=("[epc_inlinelist]"+f+"[/epc_inlinelist]");a("#epc-construct-shortcode").val(e);}});
</script>
