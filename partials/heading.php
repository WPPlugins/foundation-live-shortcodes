<div id="epc-shortcode-header">
<h4>Create Heading</h4>
</div>
<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Select your heading type
        <select id="heading_size">
          <option value="h1">H1</option>
          <option value="h2">H2</option>
          <option value="h3">H3</option>
          <option value="h4">H4</option>
          <option value="h5">H5</option>
          <option value="h6">H6</option>
        </select>
      </label>
<hr>      
<input type="text" id="heading_text" placeholder="Insert your title here ...">
<hr>
<input type="text" id="heading_smalltext" placeholder="Insert your small title here ...">
</div>

</div><!--/*. row -->
 
<!-- PREVIEW **************************** --> 
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
<div class="epc_foundationheading">
<!-- front-end construct -->
</div>

</div>


<!-- ADDING BUTTON ******************************* -->
<!-- no include // in global -->

<!-- SCRIPTS ******************************* -->
<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#heading_text").val(mce_selection);a("#heading_text").html(b).keyup(b);a("#heading_smalltext").html(b).keyup(b);a("#heading_size").html(b).change(b);function b(){var e=a("#heading_text").val();var d=a("#heading_smalltext").val();var c=a("#heading_size").val();var g=" <small>"+d+"</small>";a(".epc_foundationheading").html("<"+c+">"+e+g+"</"+c+">");var f=('[epc_heading text="'+e+'" smalltext="'+d+'" size="'+c+'"]');a("#epc-construct-shortcode").val(f);}});
</script>