import * as bootstrap from 'bootstrap';

window.addEventListener('DOMContentLoaded', event => {
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    }

    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(responsiveNavItem => {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
});

document.querySelectorAll(".video-box").forEach(box => {
  if (box.classList.contains('mobile-only')) return;
  
  const mainVideo = box.querySelector("video.main");
  const smokeVideo = box.querySelector("video.smoke");

  // na początku wyświetla się poster
  mainVideo.pause();
  mainVideo.currentTime = 0;

  box.addEventListener("mouseenter", () => {
    mainVideo.play();
    smokeVideo.play();
  });

  box.addEventListener("mouseleave", () => {
    smokeVideo.pause();
    smokeVideo.currentTime = 0;
    smokeVideo.load();

    mainVideo.pause();
    mainVideo.currentTime = 0;
    mainVideo.load(); 

});

});
