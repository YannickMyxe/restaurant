const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')
const navLogo = document.querySelector('#navbar__logo')

const mobileMenu = () =>{
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active')
}

menu.addEventListener('click', mobileMenu)

const highlightMenu = () => {
    const elem = document.querySelector('.highlighMenu')
    const homeMenu = document.querySelector('#home-page')
    const aboutMenu = document.querySelector('#about-page')
    const servicesMenu = document.querySelector('#services-page')
    let scrollPos = window.scrollY

    if(window.innerWidth > 960 && scrollPos < 600){
        homeMenu.classList.add('highlighMenu')
        aboutMenu.classList.remove('highlighMenu')
        return
    } else if(window.innerWidth > 960 && scrollPos < 1400){
        aboutMenu.classList.add('highlighMenu')
        homeMenu.classList.remove('highlighMenu')
        servicesMenu.classList.remove('highlighMenu')
        return
    } else if(window.innerWidth > 960 && scrollPos < 2345){
        aboutMenu.classList.remove('highlighMenu')
        servicesMenu.classList.add('highlighMenu')
        return
    }

    if((elem && window.innerWidth < 960 && scrollPos < 600) || elem){
        elem.classList.remove('highlighMenu')
    }
}

window.addEventListener('scroll', highlightMenu)
window.addEventListener('click', highlightMenu)

const hideMobileMenu = () => {
    const menuBars = document.querySelector('.is-active')
    if(window.innerWidth <= 768 && menuBars){
        menu.classList.toggle('is-active')
        menuLinks.classList.remove('active')
    }
}

menuLinks.addEventListener('click', hideMobileMenu)