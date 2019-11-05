document.addEventListener('DOMContentLoaded',function(){
	// bat su kien cuon chuot
	var trangthai = 'bang300';
	// lay ve menu
	var doituongmenu = document.querySelector('.whytravel');
	window.addEventListener('scroll',function(event){
		console.log(window.pageYOffset);
		// if(window.pageYOffset > 300){
		// 	if(trangthai == 'bang300'){
		// 		console.log('ok');
		// 		trangthai = 'tren300'

		// 		doituongmenu.classList.add('nholai');
		// 	}
			
		// } else if(window.pageYOffset <= 300){
		// 	if(trangthai == 'tren300'){
		// 		doituongmenu.classList.remove('nholai');
		// 		trangthai = 'bang300';
		// 	}
		// }
	})



},false)