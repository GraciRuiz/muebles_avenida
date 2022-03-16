let nav = document.querySelector('#nav')
document.addEventListener('scroll', () => {
    //Operador ternario
    (window.scrollY > 150) ? nav.classList.add('scrollNav'): nav.classList.remove('scrollNav')
})