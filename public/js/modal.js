function openDeleteModal(id) {
    const modal = document.querySelector(`.delete-modal[name='${id}']`);
    if (modal) {
        document.body.parentNode.classList.add("modal-open");
        modal.classList.add("show");
    }
}

function closeDeleteModal(id) {
    const modal = document.querySelector(`.delete-modal[name='${id}']`);
    if (modal) {
        document.body.parentNode.classList.remove("modal-open");
        modal.classList.remove("show");
    }
}
