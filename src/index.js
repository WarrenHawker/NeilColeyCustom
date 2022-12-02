const toggleButton = document.getElementsByClassName('nav-toggle')[0];
const navBar = document.getElementsByClassName('nav')[0];

toggleButton.addEventListener('click', () => {
	navBar.classList.toggle('mobile');
});

const navBarLinks = document.querySelectorAll('.nav-bar-links');

navBarLinks.forEach((link) => {
	link.addEventListener('click', () => {
		document.body.classList.remove('mobile');
	});
});
