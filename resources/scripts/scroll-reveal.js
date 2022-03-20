import ScrollReveal from 'scrollreveal';

export default function scrollAnimations() {
  const sr = ScrollReveal();
  const revealList = document.querySelectorAll('.reveal');

  if (revealList) {
    const slideUp = {
      distance: '10%',
      origin: 'bottom',
      opacity: 0,
      easing: 'ease-in-out',
      delay: 500,
    };
    sr.reveal(revealList, slideUp);
  }
}
