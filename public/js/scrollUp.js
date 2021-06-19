const scrollup = document.getElementsByClassName('scrollup')[0]

window.addEventListener('scroll', function () {
    scrollup.classList.toggle("active", window.scrollY > 300)
});

scrollup.addEventListener('click', () => {
    window.scroll({ top: 0, left: 0, behavior: "smooth" })
})