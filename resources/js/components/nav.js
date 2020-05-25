const navSlide = () => {
	const menu_icon = document.querySelector('.menu_icon');
	const nav = document.querySelector('.nav_links');
	const navLinks = document.querySelectorAll('.nav_links li');


	menu_icon.addEventListener('click', () => {
		//Toggle Nav
		nav.classList.toggle('nav_active');

		//Animate Links
		navLinks.forEach((link, index) => {
			if (link.style.animation) {
				link.style.animation = '';
			} else {
				link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.9}s`;
			}	
		});
	});

}

//Warum funz de+as Zeug so nicht?
// const app = ()=>{
// 	navSlide();
// }

navSlide();