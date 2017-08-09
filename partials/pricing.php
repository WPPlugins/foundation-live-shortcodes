<div id="epc-shortcode-header" class="showthis">
<h4>Create Pricing Tables</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Pricing table title
        <input id="pricing_title" type="text" placeholder="label text" />
</label>
<hr>
<label>Pricing table price
        <input id="pricing_price" type="text" placeholder="label text" />
</label>
<hr>
<label>Pricing table description
        <input id="pricing_desc" type="text" placeholder="label text" />
</label>
<hr>
<div style="position:relative; height:50px"><label>Princing table items</label><button style="position:absolute;right:0;top:0" class="button tiny" id="clone_this_group">ADD AN ITEM</button></div>
<div class="fields-cloned text-right" id="clone_wrapper">
        <input id="pricing_item" type="text" placeholder="item text" />
</div>
<hr>
</div><!--/*. col-12 -->
<div class="large-6 columns">
<label>Button text
        <input id="button_text" type="text" placeholder="button text" />
</label>
<hr>
<label>Button link
        <input id="button_link" type="text" placeholder="button link" />
</label>
<hr>
<label>Button target
        <select id="button_target">
          <option value="">Same Windows</option>
          <option value="_blank">New Windows</option>
        </select>
</label>
</div><!--/*. col-6 -->
<div class="large-6 columns">
<label>Button style
        <select id="button_style">
          <option value="">Default</option>
          <option value="success">Success</option>
          <option value="secondary">Secondary</option>
          <option value="warning">Warning</option>
          <option value="alert">Alert</option>
          <option value="info">Info</option>
          <option value="disabled">Disabled</option>
        </select>
</label>
<hr>
<label>Button corner
        <select id="button_corner">
          <option value="">Default</option>
          <option value="radius">Radius</option>
          <option value="round">Round</option>
        </select>
</label>
<hr>
<label>Button size
        <select id="button_size">
          <option value="">Normal</option>
          <option value="tiny">Tiny</option>
          <option value="small">Small</option>
          <option value="large">Large</option>
          <option value="expand">Expand</option>
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
<button id="refresh-preview" class="button alert tiny"><i class="fi-refresh"></i> Refresh</button>
<div class="clearfix" style="height:20px"></div>
</div>
<div id="this-shortcode-preview">
<!-- Insert front end shortcode -->
<div class="text-center">
<ul class="pricing-table">
 
</ul>
</div>

</div>



<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});var b='<div class="fields-cloned row" id="clone_wrapper"><div class="columns large-10"><input id="pricing_item" type="text" placeholder="item text" /></div><button style="float:right;margin-right:15px" class="remove_field button tiny alert">remove</button></div>';a("#clone_this_group").on("click",function(){a(b).clone().insertAfter(".fields-cloned:last");});a("div").on("click",".remove_field",function(d){d.preventDefault();a(this).parent("div").remove();});a("#refresh-preview").click(c);a("#pricing_title").html(c).keyup(c);a("#pricing_price").html(c).keyup(c);a("#pricing_desc").html(c).keyup(c);a("#button_text").html(c).keyup(c);a("#button_link").html(c).keyup(c);a("#button_target").html(c).change(c);a("#button_size").html(c).change(c);a("#button_style").html(c).change(c);a("#button_corner").html(c).change(c);function c(){var g=a("#pricing_title").val();a("#this-shortcode-preview .pricing-table .title").html(g);var f=a("#pricing_price").val();a("#this-shortcode-preview .pricing-table .price").html(f);var e=a("#pricing_desc").val();a("#this-shortcode-preview .pricing-table .description").html(e);var d=a("#button_text").val();a("#this-shortcode-preview .cta-button .button").html(d);var o=a("#button_link").val();a("#this-shortcode-preview .cta-button .button").attr("href",o);var n=a("#button_target").val();a("#this-shortcode-preview .cta-button .button").attr("target",n);var m=a("#button_size").val();a("#this-shortcode-preview .cta-button .button").removeClass("tiny small large expand").addClass(m);var l=a("#button_style").val();a("#this-shortcode-preview .cta-button .button").removeClass("success info warning alert secondary disabled").addClass(l);var k=a("#button_corner").val();a("#this-shortcode-preview .cta-button .button").removeClass("radius round").addClass(k);var i=a(".fields-cloned").map(function(p){return'[epc_priceitem item="'+p+'"]'+a("#pricing_item",this).val()+"[/epc_priceitem]";}).get().join("");var j=(a(".fields-cloned").map(function(){return'<li class="bullet-item">'+a("#pricing_item",this).val()+"</li>";}).get().join(""));a("#this-shortcode-preview .pricing-table").html('<li class="title">'+g+'</li><li class="price">'+f+'</li><li class="description">'+e+"</li>"+j+'<li class="cta-button"><a class="button '+m+" "+l+" "+k+'" href="'+o+'" target="'+n+'">'+d+"</a></li>");var h=('[epc_pricing title="'+g+'" price="'+f+'" description="'+e+'" buttontext="'+d+'" buttonlink="'+o+'" buttontarget="'+n+'" buttonsize="'+m+'" buttonstyle="'+l+'" buttoncorner="'+k+'"]'+i+"[/epc_pricing]");a("#epc-construct-shortcode").val(h);}});
</script>