export default function buttonScroll() {
  const scrollButton = document.getElementById('scroll-contact');
  const scrollDestination = document.getElementById('scroll-contact-footer');

  function handleScroll(e) {
    e.preventDefault();

    scrollDestination.scrollIntoView({
      behavior: 'smooth',
    });
  }

  if (scrollButton) {
    scrollButton.addEventListener('click', function (e) {
      handleScroll(e);
    });
  }
}
