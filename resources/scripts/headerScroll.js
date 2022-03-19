import Headroom from 'headroom.js';

export default function headerScroll() {
  const siteHeader = document.getElementById('site-header');
  const siteApp = document.getElementById('app');

  const headroom = new Headroom(siteHeader, {
    offset: 150,
    tolerance: 2,
    classes: {
      initial: 'animated',
      unpinned: '-translate-y-full',
    },
  });

  let resizeTimer;

  function adjustHeight() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      siteApp.style.paddingTop = siteHeader.offsetHeight + 'px';
    }, 250);
  }

  function init() {
    headroom.init();
    document.addEventListener('readystatechange', function () {
      adjustHeight();
    });
  }

  window.onresize = adjustHeight;

  init();
}
