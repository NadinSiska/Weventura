const inputFile = document.getElementById('kartu-identitas');
const fileName = document.querySelector('.file-name');

inputFile.addEventListener('change', function() {
    const file = this.files[0]; // Mengambil file yang dipilih
    fileName.textContent = file.name; // Menampilkan nama file
});