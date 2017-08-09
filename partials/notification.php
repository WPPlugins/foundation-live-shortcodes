<div id="epc-shortcode-header">
<h4>Create Alert Notification Box</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-4 columns">
<label>Select your color
        <select id="alert_color">
          <option value="">Default</option>
          <option value="success">Success</option>
          <option value="warning">Warning</option>
          <option value="info">Info</option>
          <option value="alert">Alert</option>
          <option value="secondary">Secondary</option>
        </select>
      </label>
</div>
<div class="large-4 columns">
<label>Select your corner style
        <select id="alert_corner">
          <!--<option value=""></option>-->
          <option value="">Square</option>
          <option value="radius">Radius</option>
          <option value="round">Round</option>
        </select>
      </label>
</div>
<div class="large-4 columns">
<label>Add a close possibility an alert box</label>
	<div class="switch small">
  	<input id="alert_close" type="checkbox">
  	<label for="alert_close"></label>
    <span class="checkswitchlabel">Info</span>
	</div>
</div>
<div class="large-12 columns">
<hr>
    <label>Alert box content
        <textarea id="alert_content" rows="4" placeholder="Insert your content here ..."></textarea>
    </label>
    <p><em>If you want to use another shortcode in the content, leave it blank and add items directly in the Wordpress editor</em></p>
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
<div data-alert class="alert-box">
  <!-- Your content goes here -->
  <a href="#" class="close">&times;</a>
</div>

</div>

<script>
jQuery(function(a){a(document).foundation("alert","reflow");a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#alert_content").val(mce_selection);a("#alert_color").html(b).change(b);a("#alert_corner").html(b).change(b);a("#alert_close").on("change",b);a("#alert_content").html(b).keyup(b);function b(){var h=a("#alert_color").val();var g=a("#alert_corner").val();a(".alert-box").removeClass("success warning info alert secondary").addClass(h);a(".alert-box").removeClass("radius round").addClass(g);if(a("#alert_close").prop("checked")){var f="yes";}else{var f="no";}if(f=="yes"){var c='<a href="#" class="close">&times;</a>';}else{var c="";}a(".alert-box").html(c);var e=a("#alert_content").val().replace(/\r\n|\r|\n/g,"<br />");a(".alert-box").append(e);var d=('[epc_alert style="'+h+'" corner="'+g+'" close="'+f+'"]'+e+"[/epc_alert]");a("#epc-construct-shortcode").val(d);}});
</script>