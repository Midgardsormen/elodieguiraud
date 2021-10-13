const toggleBlock = (buttonClass)=>{
    const buttons = document.querySelectorAll(buttonClass);
    buttons.forEach((container) => {
        console.log(container)
        container.addEventListener('click', (e)=>{
            console.log("test")
            console.log(e)
            e.target.parentNode.parentNode.parentNode.querySelector('.newsletter-block__form-container').classList.toggle('visible')
        });
      });
}
toggleBlock('.js-newsletter-toggle')

window.addEventListener('scroll', throttle(parallax, 14));

function throttle(fn, wait) {
  var time = Date.now();
  return function() {
    if ((time + wait - Date.now()) < 0) {
      fn();
      time = Date.now();
    }
  }
};

function parallax() {
  var scrolled = window.pageYOffset;
  var parallax = document.querySelector(".parallax");
  // You can adjust the 0.4 to change the speed
	var coords = (scrolled * 0.1) + 'px'
  parallax.style.transform = 'translateY(' + coords + ')';
};