<div id="epc-shortcode-header" class="showthis">
<h4>Create Progress Bar</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<div class="row collapse">
<label>Progress bar global size (in percents)</label>
	  <div class="small-11 columns">
	<div class="range-slider" data-slider data-options="display_selector: #sliderfirst; start: 1; end: 100; step: 1;">
      <span class="range-slider-handle" role="slider" tabindex="0"></span>
      <span class="range-slider-active-segment"></span>
    </div>
    </div>
    <div class="small-1 columns">
	<span class="slider-result" id="sliderfirst"></span>
    </div>
	</div>
<hr>
<div class="row collapse">
<label>Progress bar size (in percents)</label>
	  <div class="small-11 columns">
	<div class="range-slider" data-slider data-options="display_selector: #slidersecond; start: 1; end: 100; step: 1;">
      <span class="range-slider-handle" role="slider" tabindex="0"></span>
      <span class="range-slider-active-segment"></span>
    </div>
    </div>
    <div class="small-1 columns">
	<span class="slider-result" id="slidersecond"></span>
    </div>
	</div>
<hr>
</div><!--/*. col-12 -->
<div class="large-6 columns">
<label>Select your color
        <select id="progress_color">
          <option value="">Default</option>
          <option value="success">Success</option>
          <option value="alert">Alert</option>
          <option value="secondary">Secondary</option>
        </select>
      </label>
</div>
<div class="large-6 columns">
<label>Select your corner style
        <select id="progress_corner">
          <option value="">Square</option>
          <option value="radius">Radius</option>
          <option value="round">Round</option>
        </select>
      </label>
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
<div class="text-center">
<!--
<div class="progress [small-# large-#] [secondary alert success] [radius round]">
  <span class="meter" style="width: [1 - 100]%"></span>
</div>
-->
<div class="progress">
  <span class="meter"></span>
</div>
</div>

</div>

<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#sliderfirst").html(b).keyup(b);a("#slidersecond").html(b).keyup(b);a("#progress_color").html(b).change(b);a("#progress_corner").html(b).change(b);function b(){var c=a("#sliderfirst").html();a(".progress").css("width",c+"%");var g=a("#slidersecond").html();a(".progress span").css("width",g+"%");var f=a("#progress_color").val();a(".progress").removeClass("success alert secondary").addClass(f);var e=a("#progress_corner").val();a(".progress").removeClass("radius round").addClass(e);var d=('[epc_progress globalsize="'+c+'" barsize="'+g+'" barcolor="'+f+'" barcorner="'+e+'"]');a("#epc-construct-shortcode").val(d);}});

</script>
