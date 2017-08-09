<div id="epc-shortcode-header" class="showthis">
<h4>Insert Youtube video</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<div class="row collapse">
<label>URL of your video</label>
          <input id="epc_selectedvideo" class="media-input" type="text" value="https://www.youtube.com/watch?v=NY4hhHON_A8" placeholder="url of your video">
</div>
<hr>
<div class="row collapse">
<label>Video size (on percents)</label>
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
<div class="epcvideo-wrapper">
<div class="flex-video">
        <iframe class="epc-embedvideo" src="" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>




<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#epc_selectedvideo").html(b).change(b);a("#sliderfirst").html(b).keyup(b);function b(){var e=a("#epc_selectedvideo").val();var f=e.replace("watch?v=","embed/");a(".epc-embedvideo").attr("src",f);var d=a("#sliderfirst").html();a(".epcvideo-wrapper").css("max-width",d+"%");var c=('[epc_video source="'+e+'" size="'+d+'"]');a("#epc-construct-shortcode").val(c);}});
</script>
