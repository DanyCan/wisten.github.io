(function($) {
		  
	$.fn.easyPaginate = function(options){

		var defaults = {				
			step: 4,
			delay: 100,
			numeric: true,
			nextprev: true,
			auto:false,
			pause:4000,
			clickstop:true,
			controls: 'pagination',
			current: 'current' 
		}; 
		
		var options = $.extend(defaults, options); 
		var step = options.step;
		var lower, upper;
		var children = $(this).children();
		var count = children.length;
		var obj, next, prev;		
		var page = 1;
		var timeout;
		var clicked = false;
		
		function show(){
			clearTimeout(timeout);
			lower = ((page-1) * step);
			upper = lower+step;
			$(children).each(function(i){
				var child = $(this);
				child.hide();
				if(i>=lower && i<upper){ setTimeout(function(){ child.fadeIn('fast') }, ( i-( Math.floor(i/step) * step) )*options.delay ); }
				if(options.nextprev){
					if(upper >= count) { next.fadeOut('fast'); } else { next.fadeIn('fast'); };
					if(lower >= 1) { prev.fadeIn('fast'); } else { prev.fadeOut('fast'); };
				};
			});	
			$('li','#'+ options.controls).removeClass(options.current);
			$('li[data-index="'+page+'"]','#'+ options.controls).addClass(options.current);
			
			if(options.auto){
				if(options.clickstop && clicked){}else{ timeout = setTimeout(auto,options.pause); };
			};
		};
		
		
		var int_oo = 0;
		var number_pag = Math.ceil(count/step);
		function auto(){
			
			if(upper<= count || int_oo<number_pag){ page++; int_oo++; 
				if(page<=number_pag){show();}else{
				 docallAgain();
				}
			}
			else{
			 docallAgain();
			}
			
					
		};
		function docallAgain(){
				page = 0;
				 int_oo = 0;
				 number_pag = Math.ceil(count/step);
				 auto();
		}
		this.each(function(){ 
			
			obj = this;
			
			if(count>step){
				
				var pages = Math.floor(count/step);
				if((count/step) > pages) pages++;
				
				var ol = $('<ol id="'+ options.controls +'"></ol>').insertAfter(obj);
				
				if(options.nextprev){
					prev = $('<li class="prev">Previous</li>')
						.hide()
						.appendTo(ol)
						.click(function(){
							clicked = true;
							page--;
							show();
						});
				};
				
				if(options.numeric){
					for(var i=1;i<=pages;i++){
					$('<li data-index="'+ i +'">'+ i +'</li>')
						.appendTo(ol)
						.click(function(){	
							clicked = true;
							page = $(this).attr('data-index');
							show();
						});					
					};				
				};
				
				if(options.nextprev){
					next = $('<li class="next">Next</li>')
						.hide()
						.appendTo(ol)
						.click(function(){
							clicked = true;			
							page++;
							show();
						});
				};
			
				show();
			};
		});	
		
	};	

})(jQuery);