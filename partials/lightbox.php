<div id="epc-shortcode-header" class="showthis">
<h4>Insert an image</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-6 columns">
<div class="row collapse">
<label>Select image</label>
          <input id="epc_selectedimage" class="media-input small-10 columns" type="text" value="http://epicadesign.fr/cdn-themes/global/images/placeholder_600x400.svg" placeholder="Select your image">
          <a href="#" class="button postfix customaddmedia small-2 columns">ADD</a>
</div>
<hr>
<div class="row collapse">
<label>Image size</label>
	  <div class="small-10 columns">
	<div class="range-slider" data-slider data-options="display_selector: #sliderfirst; start: 1; end: 100; step: 1;">
      <span class="range-slider-handle" role="slider" tabindex="0"></span>
      <span class="range-slider-active-segment"></span>
    </div>
    </div>
    <div class="small-2 columns">
	<span class="slider-result" id="sliderfirst"></span>
    </div>
	</div>
<hr>
<label>Image corner</label>
<div class="switch small">
  	<input id="imageradiusswitch" type="checkbox">
  	<label for="imageradiusswitch"></label>
    <span class="checkswitchlabel">Add rounded corner</span>
	</div> 
    		
     
</div>
<div class="large-6 columns">

    <label>Image description
        <textarea id="image_cap" rows="6" placeholder="add your image description displaying in the lightbox"></textarea>
    </label>
</div><!--/*. col-6 -->

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

<div class="text-center">
<ul class="clearing-thumbs" data-clearing>
  <li><a href=""><img class="th" data-caption="" src=""></a></li>
</ul>
</div>

</div>
</div>





<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a(".customaddmedia").click(function(f){var c=a(this).parent();f.preventDefault();var d=wp.media({title:"Envoyer une image",button:{text:"Choisir un fichier"},multiple:false}).on("select",function(){var e=d.state().get("selection");var g=e.first().toJSON();a("input.media-input",c).val(g.url);}).open();});a("#refresh-preview").click(b);a("#epc_selectedimage").html(b).change(b);a("#sliderfirst").html(b).keyup(b);a("#imageradiusswitch").on("change",b);a("#image_cap").html(b).keyup(b);function b(){var g=a("#epc_selectedimage").val();a(".th").attr("src",g);a(".clearing-thumbs li a").attr("href",g);var f=a("#sliderfirst").html();a(".th").css("max-width",f+"%");if(a("#imageradiusswitch").prop("checked")){var e="yes";a("img.th").addClass("radius");}else{var e="no";a("img.th").removeClass("radius");}var d=a("#image_cap").val();a(".clearing-thumbs .th").attr("data-caption",d);var c=('[epc_lightbox img="'+g+'" size="'+f+'" radius="'+e+'" caption="'+d+'"]');a("#epc-construct-shortcode").val(c);}});

</script>