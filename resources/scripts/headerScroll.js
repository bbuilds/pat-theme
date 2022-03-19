import Headroom from 'headroom.js';

export default function headerScroll() {
  const siteHeader = document.getElementById('site-header');
  // const siteApp = document.getElementById('app');

  const headroom = new Headroom(siteHeader, {
    offset: 150,
    tolerance: 2,
    classes: {
      initial: 'animated',
      pinned: 'slideDown',
      unpinned: 'slideUp',
    },
  });

  headroom.init();
}
