 $(function(){
 	$('.bonnut li').click(function(event) {
 		$('.bonnut li').removeClass('active');
 		$(this).addClass('active');

 		x = $(this).index();
 		x = x + 1;
 		// console.log(" vi tri cua phan tu dc click la " + x); 
 		$('.bonnd ul li').removeClass('hienlen');
 		$('.bonnd ul li:nth-child('+ x +')').addClass('hienlen')
 	});
 
})  
 