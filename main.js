
window.onload = function(){
	const headerCon = document.querySelector('.nav1')
	let scrollPos = 0
	window.addEventListener('scroll',function(){
		if ((document.body.getBoundingClientRect()).top>scrollPos){
			headerCon.classList.add('menu-sticky')
			headerCon.style.top = '0';
			

		}else{
			headerCon.style.top = '-55px'
		}
		scrollPos = (document.body.getBoundingClientRect()).top
	});
}
