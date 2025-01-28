document.addEventListener("DOMContentLoaded", function () {
  const sidenav = document.getElementById("sidenav");
  const modalToggleButtons = document.querySelectorAll('[data-modal-toggle="add-transaksi-modal"]');
  const modal = document.getElementById("add-transaksi-modal");

  // Function to update z-index of sidenav
  const updateSidenavZIndex = (newIndex) => {
    if (sidenav) sidenav.classList.replace(`z-${newIndex === 0 ? "990" : "0"}`, `z-${newIndex}`);
  };

  // Event Listener for opening modal
  modalToggleButtons.forEach((button) => {
    button.addEventListener("click", () => {
      if (modal.classList.contains("hidden")) {
        updateSidenavZIndex(0);
      } else {
        updateSidenavZIndex(990);
      }
    });
  });

  // Event Listener for modal close
  modal.addEventListener("click", (event) => {
    if (
      event.target === modal || // Clicking outside modal
      event.target.closest('[data-modal-toggle="add-transaksi-modal"]') // Clicking close button
    ) {
      updateSidenavZIndex(990);
    }
  });
});
