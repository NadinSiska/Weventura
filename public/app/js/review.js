$(document).ready(function(){
    $('.reviews__slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});


// Ambil semua elemen card
const cards = document.querySelectorAll('.review__card');

// Looping setiap card
cards.forEach((card) => {
  // Ambil isi konten card
  const content = card.querySelector('.review__text');

  // Periksa jika isi konten melebihi tinggi maksimum
  if (content.offsetHeight > 100) { // Atur tinggi maksimum untuk teks
    // Tambahkan link "Baca Selengkapnya"
    const link = document.createElement('a');
    link.href = '#';
    link.textContent = 'Baca Selengkapnya';
    card.querySelector('.review__info').appendChild(link);
  }
});

