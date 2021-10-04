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