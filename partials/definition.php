<div id="epc-shortcode-header" class="showthis">
<h4>Create Definition</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Definition title
        <input type="text" id="definition_title" placeholder="Insert your definition title here ...">
</label>
<hr>
<label>Definition content
        <textarea id="definition_content" rows="2" placeholder="Insert your definition content here ..."></textarea>
</label>

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
<dl>
  <dt></dt>
  <dd></dd>
</dl>

</div>

<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#definition_content").html(mce_selection);a("#definition_title").html(b).keyup(b);a("#definition_content").html(b).keyup(b);function b(){var d=a("#definition_title").val();a("#this-shortcode-preview dl dt").html(d);var c=a("#definition_content").val();a("#this-shortcode-preview dl dd").html(c);var e=('[epc_definition title="'+d+'"]'+c+"[/epc_definition]");a("#epc-construct-shortcode").val(e);}});
</script>