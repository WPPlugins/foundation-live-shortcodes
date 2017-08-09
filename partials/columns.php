<div id="epc-shortcode-header" class="showthis">
<h4>Create Columns</h4>
</div>

<div id="contruct_this_shortcode" class="row">
<div class="large-12 columns"><h4>Define shortcode parameters</h4></div>
<hr>
<div class="text-right">
<button class="button tiny" id="clone_this_group">ADD A COLUMN</button> 
</div><!--/*.text-right-->
<hr>
<div class="large-12 columns">
<div class="fields-cloned" id="clone_wrapper">
<label>Columns size
        <select id="add-column">
          <option value="1">size 1</option>
          <option value="2">size 2</option>
          <option value="3">size 3</option>
          <option value="4">size 4</option>
          <option value="5">size 5</option>
          <option value="6">size 6</option>
          <option value="7">size 7</option>
          <option value="8">size 8</option>
          <option value="9">size 9</option>
          <option value="10">size 10</option>
          <option value="11">size 11</option>
          <option value="12">size 12</option>
        </select>
</label>
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
<div class="epc_foundationcolumns row">

</div>

</div>




<script>
jQuery(function(a){a(document).foundation();a("#display-preview-shortcode").click(function(){if(a("#preview-wrapper").hasClass("masked")){a("#preview-wrapper").removeClass("masked").addClass("showthis");}else{a("#preview-wrapper").removeClass("showthis").addClass("masked");}});var b='<div class="fields-cloned" id="clone_wrapper"><hr><label>Columns size<select id="add-column"><option value="1">size 1</option><option value="2">size 2</option><option value="3">size 3</option><option value="4">size 4</option><option value="5">size 5</option><option value="6">size 6</option><option value="7">size 7</option><option value="8">size 8</option><option value="9">size 9</option><option value="10">size 10</option><option value="11">size 11</option><option value="12">size 12</option></select></label><button style="float:right;margin-top:22px" class="remove_field button tiny alert">remove</button></div>';a("#clone_this_group").on("click",function(){a(b).clone().insertAfter(".fields-cloned:last");});a(".row").on("click",".remove_field",function(d){d.preventDefault();a(this).parent("div").remove();});a("#refresh-preview").click(c);a("#add-column").html(c).change(c);function c(){var e=a(".fields-cloned").map(function(g){return'<div class="epc-colpreview columns large-'+a("#add-column",this).val()+'"><div>Add your column content here</div></div>';}).get().join("");var f=a(".fields-cloned").map(function(g){return'[epc_column number="'+g+'" size="'+a("#add-column",this).val()+'"]Add your column content here[/epc_column]';}).get().join("");a(".epc_foundationcolumns").html(e);var d=("[epc_columnsblock]"+f+"[/epc_columnsblock]");a("#epc-construct-shortcode").val(d);}});

</script>
