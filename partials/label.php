<div id="epc-shortcode-header" class="showthis">
<h4>Create Label</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Label text
        <input id="label_text" type="text" placeholder="label text" />
</label>

<hr>

</div><!--/*. col-12 -->

<div class="large-6 columns">
<label>Label style
        <select id="label_style">
          <option value="">Default</option>
          <option value="success">Success</option>
          <option value="secondary">Secondary</option>
          <option value="warning">Warning</option>
          <option value="alert">Alert</option>
          <option value="info">Info</option>
        </select>
</label>
</div>
<div class="large-6 columns">
<label>label corner
        <select id="label_corner">
          <option value="">Default</option>
          <option value="radius">Radius</option>
          <option value="round">Round</option>
        </select>
</label>

</div><!--/*. col-6 -->

</div><!--/*. row -->
  
<div id="preview-wrapper" class="row">
<div class="large-12 columns">
<hr>
<div id="frontend-preview">
<div id="frontend-preview-header">
<h4>Shortcode Front End Result</h4>
<button id="refresh-preview" class="button alert tiny" onclick="update()"><i class="fi-refresh"></i> Refresh</button>
<div class="clearfix" style="height:20px"></div>
</div>
<div id="this-shortcode-preview">
<!-- Insert front end shortcode -->
<div class="text-center">
<span class="label"></span>
</div>

</div>


<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#label_text").val(mce_selection);a("#label_text").html(b).keyup(b);a("#label_style").html(b).change(b);a("#label_corner").html(b).change(b);function b(){var f=a("#label_text").val();a("#this-shortcode-preview .label").html(f);var d=a("#label_style").val();a("#this-shortcode-preview .label").removeClass("success info warning alert secondary").addClass(d);var c=a("#label_corner").val();a("#this-shortcode-preview .label").removeClass("radius round").addClass(c);var e=('[epc_label text="'+f+'" style="'+d+'" corner="'+c+'"]');a("#epc-construct-shortcode").val(e);}});

</script>
