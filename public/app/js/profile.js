function enableEdit() {
    document.getElementById('edit-modal').style.display = 'flex';
    
    // Mengisi form dengan data yang ada
    document.getElementById('edit-name').value = document.getElementById('name').innerText;
    document.getElementById('edit-username').value = document.getElementById('username').innerText.slice(1);
    document.getElementById('edit-email').value = document.getElementById('email').innerText;
    document.getElementById('edit-phone').value = document.getElementById('phone').innerText;
    document.getElementById('edit-address').value = document.getElementById('address').innerText;
    document.getElementById('edit-dob').value = '2007-01-01'; // Sesuaikan format tanggal
    document.getElementById('edit-gender').value = document.getElementById('gender').innerText;
}

function closeModal() {
    document.getElementById('edit-modal').style.display = 'none';
}

document.getElementById('edit-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Mengupdate data di halaman
    document.getElementById('name').innerText = document.getElementById('edit-name').value;
    document.getElementById('username').innerText = '@' + document.getElementById('edit-username').value;
    document.getElementById('email').innerText = document.getElementById('edit-email').value;
    document.getElementById('phone').innerText = document.getElementById('edit-phone').value;
    document.getElementById('address').innerText = document.getElementById('edit-address').value;
    document.getElementById('gender').innerText = document.getElementById('edit-gender').value;

    closeModal();
});
