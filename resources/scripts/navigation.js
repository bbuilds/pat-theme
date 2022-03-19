import MicroModal from 'micromodal';

export default function toggleMobileMenu() {
  function navigationToggleModal(modal) {
    const dialogContainer = modal.querySelector(`.modal-dialog`);
    const isHidden = 'true' === modal.getAttribute('aria-hidden');
    modal.classList.toggle('has-modal-open', !isHidden);
    dialogContainer.toggleAttribute('aria-modal', !isHidden);

    if (isHidden) {
      dialogContainer.removeAttribute('role');
      dialogContainer.removeAttribute('aria-modal');
    } else {
      dialogContainer.setAttribute('role', 'dialog');
      dialogContainer.setAttribute('aria-modal', 'true');
    } // Add a class to indicate the modal is open.

    const htmlElement = document.documentElement;
    htmlElement.classList.toggle('has-modal-open');
  } // Open on click functionality.

  MicroModal.init({
    onShow: navigationToggleModal,
    onClose: navigationToggleModal,
    openClass: 'is-menu-open',
    awaitOpenAnimation: true,
  });
}
