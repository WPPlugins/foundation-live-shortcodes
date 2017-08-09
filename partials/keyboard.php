<div id="epc-shortcode-header" class="showthis">
<h4>Create Keystrokes</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Keyboard touch
        <input id="key_touch" type="text" placeholder="label text" />
</label>

<hr>

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
<div class="text-center">
<kbd></kbd>
</div>

</div>





<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#key_touch").val(mce_selection);a("#key_touch").html(b).keyup(b);function b(){var c=a("#key_touch").val();a("#this-shortcode-preview kbd").html(c);var d=('[epc_keyboard touch="'+c+'"]');a("#epc-construct-shortcode").val(d);}});
</script>
