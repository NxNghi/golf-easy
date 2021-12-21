const menuToggle = document.querySelector('.toggle .toggle__bar .bar__check');
const links = document.querySelector('.toggle .toggle__links');

menuToggle.addEventListener("click", () => {
	links.classList.toggle("toggle__links--slide");
});