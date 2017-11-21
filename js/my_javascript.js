
        var source;
    
		var pageID = 0;
		$(document).ready(function(){
			requestOnePageData(pageID);
			resetTabullet();
			//next page
			$("#next").submit(function(event){
				pageSwap('up');
			});
			//previous page
			$("#prev").submit(function(event){
				pageSwap('down');
			});
		});	
	    function requestOnePageData(page){
			$.ajax({
				'method': 'POST',
				'url': 'table.php',
				dataType: 'json',
				data: { 'page': page }
			}).done(function( data ) {
				source = data;
				resetTabullet();				
			});
		}
		function resetTabullet() {
                $("#table").tabullet({
                    data: source,
                    action: function (mode, data) {
                        console.dir(mode);
                        if (mode === 'save') {
                            source.push(data);
                        }
                        if (mode === 'edit') {
                            for (var i = 0; i < source.length; i++) {
                                if (source[i].id == data.id) {
                                    source[i] = data;
                                }
                            }
                        }
                        if(mode == 'delete'){
                            for (var i = 0; i < source.length; i++) {
                                if (source[i].id == data) {
                                    source.splice(i,1);
                                    break;
                                }
                            }
                        }
                        resetTabullet();
                    }
                });
            }

		function pageSwap(direction){
			event.preventDefault();
			 $('table tbody').children().remove();
			if(direction == 'up'){
				pageID = pageID + 1;
			}else{
				pageID = pageID - 1;
			}

			requestOnePageData(pageID);
		}


		