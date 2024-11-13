window.addEventListener('load', function() {
    const inputFile = document.getElementById('kartu-identitas');
    const fileNameDisplay = document.getElementById('file-name');

    if (inputFile && fileNameDisplay) {
        inputFile.addEventListener('change', function() {
            if (inputFile.files.length > 0) {
                fileNameDisplay.textContent = inputFile.files[0].name; // Menampilkan nama file yang diunggah
            } else {
                fileNameDisplay.textContent = 'Belum ada file yang diunggah'; // Pesan default jika tidak ada file
            }
        });
    } else {
        console.error('Elemen tidak ditemukan');
    }
});