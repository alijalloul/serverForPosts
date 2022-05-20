const cancel_btn = document.getElementById('cancel_btn');

cancel_btn.addEventListener('click', () => {
    document.getElementById('title-input').value = "";
    document.getElementById('content-input').value = "";
});