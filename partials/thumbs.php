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
<label>Image link</label>
<div class="switch small">
  	<input id="imagelinkswitch" type="checkbox">
  	<label for="imagelinkswitch"></label>
    <span class="checkswitchlabel">Add link for this image</span>
	</div>
<div id="ifimagelinked">
<hr>
<p><em>No preview for the link</em></p>
	  <label>Link URL
        <input id="inputimageurl" type="text" placeholder="link url" />
      </label>
<hr>
  		<label>Open link in
        <select id="linkopen">
          <option value="">Same windows</option>
          <option value="_blank">New windows</option>
        </select>
      </label>
</div><!--/*. ifimagelinked -->
<hr>
    <label>Image description
        <textarea id="image_desc" rows="6" placeholder="Add description for your image ..."></textarea>
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
<!-- Insert front end shortcode -->
<div class="epc-scimage text-center">
<figure class="convert-inlineblock">
  <img style="width:100%;"  class="th radius" src="images/placeholder_1000x300.svg">
  <figcaption style="width:100%;"></figcaption>
</figure>
<!--</a>-->
</div>


</div>





<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a(".customaddmedia").click(function(f){var c=a(this).parent();f.preventDefault();var d=wp.media({title:"Envoyer une image",button:{text:"Choisir un fichier"},multiple:false}).on("select",function(){var e=d.state().get("selection");var g=e.first().toJSON();a("input.media-input",c).val(g.url);}).open();});a("#refresh-preview").click(b);a("#image_desc").html(mce_selection);a("#epc_selectedimage").html(b).change(b);a("#sliderfirst").html(b).keyup(b);a("#imageradiusswitch").on("change",b);a("#imagelinkswitch").on("change",b);a("#inputimageurl").html(b).keyup(b);a("#linkopen").html(b).change(b);a("#image_desc").html(b).keyup(b);function b(){var j=a("#epc_selectedimage").val();a(".th").attr("src",j);var i=a("#sliderfirst").html();a("figure").css("max-width",i+"%");if(a("#imageradiusswitch").prop("checked")){var h="yes";a("img.th").addClass("radius");}else{var h="no";a("img.th").removeClass("radius");}if(a("#imagelinkswitch").prop("checked")){var g="yes";a("#ifimagelinked").removeClass("masked").addClass("showthis");}else{var g="no";a("#ifimagelinked").removeClass("showthis").addClass("masked");a(".epc-scimage a").contents().unwrap();}var f=a("#inputimageurl").val();var e=a("#linkopen").val();var c=a("#image_desc").val();a("figure figcaption").html(c);var d=('[epc_image img="'+j+'" size="'+i+'" radius="'+h+'" link="'+g+'" linkurl="'+f+'" openlink="'+e+'"]'+c+"[/epc_image]");a("#epc-construct-shortcode").val(d);}});
</script>
