<div id="epc-shortcode-header" class="showthis">
<h4>Create List</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Select your list type
        <select id="list_type">
          <option value="no-bullet">No bullet</option>
          <option value="disc">disc</option>
          <option value="circle">circle</option>
          <option value="square">square</option>
        </select>
      </label>
<hr>
<div class="text-right">
<button class="button tiny" id="clone_this_group">ADD AN ITEM</button> 
</div><!--/*.text-right-->
<div class="row create_the_item">
<div class="fields-cloned" id="clone_wrapper">
<div class="large-10 columns">
<label>list item content
        <textarea id="list_content" rows="2" placeholder="Insert your content here ...">List item with a much longer description or more content.</textarea>
</label>
</div>
</div>
</div>

<hr>
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
	<ul>
  
	</ul>
</div>

</div>


<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});var b='<div class="fields-cloned" id="clone_wrapper"><hr><div class="large-10 columns"><label>list item content<textarea id="list_content" rows="2" placeholder="Insert your content here ..."></textarea></label></div><button style="float:right;margin-top:22px" class="remove_field button tiny alert">remove</button></div>';a("#clone_this_group").on("click",function(){a(b).clone().insertAfter(".fields-cloned:last");});a(".row").on("click",".remove_field",function(d){d.preventDefault();a(this).parent("div").remove();});a("#refresh-preview").click(c);a("#list_type").html(c).change(c);a("#heading_smalltext").html(c).keyup(c);a("#heading_size").html(c).change(c);function c(){var g=a("#list_type").val();a(".epc-list ul").removeClass("no-bullet disc square circle").addClass(g);var e=a(".fields-cloned textarea").map(function(){return"<li>"+a(this).val()+"</li>";}).get().join("");a(".epc-list ul").html(e);var d=a(".fields-cloned textarea").map(function(h){return'[epc_listitem item="'+h+'"]'+a(this).val()+"[/epc_listitem]";}).get().join("");var f=('[epc_list type="'+g+'"]'+d+"[/epc_list]");a("#epc-construct-shortcode").val(f);}});
</script>