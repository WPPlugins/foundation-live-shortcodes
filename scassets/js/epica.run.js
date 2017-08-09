jQuery(function( $ ) {
	/* ====== columns layout ===== */	
    var $els = $('[class^="epc-build-columns"]');
    var cols = {};
    $els.each(function(i, col) {
        var classes = $(col).attr('class').split(' ');
        classes.forEach(function(str) {
            var match = str.match(/epc-columns-(\w+)-(\d+)/);
            if ( match ) {
                cols[match[1]] = cols[match[1]] || {};
                var current = cols[match[1]];
                if ( match[2] == 12 ) {
                    current.ids = [];
                    current.sum = 0;
                    return
                }
                current.ids = current.ids || [];
                current.sum = current.sum || 0;
                current.sum += ( +match[2] );
                current.ids.push(i);
                if (current.sum == 12) {
                    current.ids.forEach(function(id) {
				$els.eq(id).addClass('column-in-stream');
               if (id = i) $els.eq(id).removeClass('column-in-stream').addClass('column-end-stream');
                    });
                    current.ids = [];
                    current.sum = 0;
                }
            }
        });
    });
});