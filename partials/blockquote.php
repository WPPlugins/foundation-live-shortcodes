<div id="epc-shortcode-header" class="showthis">
<h4>Create Blockquote</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="large-12 columns">
<label>Blockquote content
        <textarea id="quote_content" rows="2" placeholder="Insert your blockquote content content here ..."></textarea>
</label>
<hr>
<label>Blockquote author
        <input type="text" id="quote_author" placeholder="Insert the author name here ...">
</label>
<hr>
<label>Blockquote author link
        <input type="url" id="quote_url" placeholder="Insert the author url here ...">
</label>
<hr>
<label>Blockquote author link target
        <select id="quote_target">
          <option value="">Same Windows</option>
          <option value="_blank">New Windows</option>
        </select>
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
<!-- Insert front end shortcode -->
<blockquote></blockquote>

</div>




<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});a("#refresh-preview").click(b);a("#quote_content").html(mce_selection);a("#quote_content").html(b).keyup(b);a("#quote_author").html(b).keyup(b);a("#quote_url").html(b).keyup(b);a("#quote_target").html(b).change(b);function b(){var h=a("#quote_content").val();var g=a("#quote_author").val();var d=a("#quote_url").val();var c=a("#quote_target").val();if(g==""){var f="";}else{if(d==""){var f="<cite>"+g+"</cite>";}else{var f='<cite><a href="'+d+'" target="'+c+'">'+g+"</a></cite>";}}a("#this-shortcode-preview blockquote").html(h+f);var e=('[epc_quote author="'+g+'" authorlink="'+d+'" linkopen="'+c+'"]'+h+"[/epc_quote]");a("#epc-construct-shortcode").val(e);}});
</script>
