const sliderMain = new Swiper('.slider_main',{
	parallax: true,
	freeMode: true,
	centeredSlides: true,
	mousewheel: true,

	slidesPerView: 3.5,
	spaceBetween: 60
})

const sliderBg = new Swiper('.slider_bg',{
	parallax: true,
	centeredSlides: true,

	slidesPerView: 3.5,
	spaceBetween: 60
})
sliderMain.controller.control = sliderBg
document.querySelectorAll('.slider__item').forEach(item => {
	item.addEventListener('click', event => {
		item.classList.toggle('opened')
	})
})

let desc = document.querySelector('.description')
sliderMain.on('slideChange', e => {
	sliderMain.activeIndex > 0 ? desc.classList.add('hidden') : desc.classList.remove('hidden')
})