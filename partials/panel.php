<div id="epc-shortcode-header" class="showthis">
<h4>Create Panel</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Button corner
        <select id="panel_style">
          <option value="">Default</option>
          <option value="radius">Default with Radius</option>
          <option value="callout">Callout</option>
          <option value="callout radius">Callout with Radius</option>
        </select>
</label>
<hr>
<label>Panel content
        <textarea id="panel_content" rows="4" placeholder="Insert your content here ..."></textarea>
    </label>
    <p><em>If you want to use another shortcode in the content, leave it blank and add items directly in the Wordpress editor</em></p>

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
<div class="panel"></div>

</div>




<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#panel_content").html(mce_selection);a("#panel_style").html(b).change(b);a("#panel_content").html(b).keyup(b);function b(){var e=a("#panel_style").val();a("#this-shortcode-preview .panel").removeClass("callout radius").addClass(e);var d=a("#panel_content").val().replace(/\r\n|\r|\n/g,"<br />");a("#this-shortcode-preview .panel").html(d);var c=('[epc_panel style="'+e+'"]'+d+"[/epc_panel]");a("#epc-construct-shortcode").val(c);}});
</script>