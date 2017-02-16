/*ALcune utility per gestire lo stato focus e per fixare il problema text-shadow in IE*/

window.addEvent('domready',function(){
	
	var ul=$$('ul');
	
	
	var inputboxs=$$('input[type=text],input[type=password]');
	inputboxs.each(function(inputbox){
		
		inputbox.addEvent('focus',function(){
			
			inputbox.addClass('focus');
		
		});
		
		
		inputbox.addEvent('blur',function(){
			
			inputbox.removeClass('focus');
		
		});
		
		
	});
	
	ul.each(function(el){
		
		var li=el.getElements('li');	
		
		if(li.length > 0){
		
			li.each(function(this_li,index){
			
				if(index==0){
				
					this_li.addClass('first_li');
				
				}
				
				if(index==(li.length-1)){
					
					this_li.addClass('last_li');
				
				}
			
			});
		
		}
					 
	});
	


});