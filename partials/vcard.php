<div id="epc-shortcode-header" class="showthis">
<h4>Create Vcard</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Name and prename
        <input type="text" id="vcard_name" placeholder="Insert your name here ...">
</label>
<hr>
<label>Street adress
        <input type="text" id="vcard_adress" placeholder="Insert the adress here ...">
</label>
<hr>
<label>Locality
        <input type="text" id="vcard_location" placeholder="Insert the locality here ...">
</label>
<hr>
<label>State
        <input type="text" id="vcard_state" placeholder="Insert the state here ...">
</label>
<hr>
<label>Email
        <input type="email" id="vcard_email" placeholder="Insert your contact email here (no mailto) ...">
</label>
<hr>
    <label>Additionnal content
        <textarea id="vcard_add" rows="3" placeholder="Insert an additionnal content here ..."></textarea>
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
<div class="text-center">
<!-- Insert front end shortcode -->
<ul class="vcard text-left">
  <li class="fn"></li>
  <li class="street-address"></li>
  <li class="locality"></li>
  <li><span class="state"></span></li>
  <li class="email"><a href="#"></a></li>
  <li class="vcard-additionnal"></li>
</ul>
</div>
</div>



<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#vcard_name").html(b).keyup(b);a("#vcard_adress").html(b).keyup(b);a("#vcard_location").html(b).keyup(b);a("#vcard_state").html(b).keyup(b);a("#vcard_email").html(b).keyup(b);a("#vcard_add").html(b).keyup(b);function b(){var c=a("#vcard_name").val();a("ul.vcard .fn").html(c);var i=a("#vcard_adress").val();a("ul.vcard .street-address").html(i);var h=a("#vcard_location").val();a("ul.vcard .locality").html(h);var g=a("#vcard_state").val();a("ul.vcard .state").html(g);var f=a("#vcard_email").val();a("ul.vcard .email a").html(f);var e=a("#vcard_add").val().replace(/\r\n|\r|\n/g,"<br />");a("ul.vcard .vcard-additionnal").html(e);var d=('[epc_vcard name="'+c+'" address="'+i+'" locality="'+h+'" state="'+g+'" email="'+f+'" additionnal="'+e+'"]');a("#epc-construct-shortcode").val(d);}});
</script>
