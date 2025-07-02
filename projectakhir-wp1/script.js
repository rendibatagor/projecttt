document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('kontakForm');
  const notif = document.getElementById('notif');

  form.addEventListener('submit', function (event) {
    const nama = document.getElementById('nama').value.trim();
    const email = document.getElementById('email').value.trim();
    const pesan = document.getElementById('pesan').value.trim();

    if (nama === '' || email === '' || pesan === '') {
      event.preventDefault(); // Mencegah form terkirim
      notif.textContent = 'Semua field wajib diisi!';
      return;
    }

    if (!validateEmail(email)) {
      event.preventDefault();
      notif.textContent = 'Format email tidak valid!';
      return;
    }

    notif.textContent = ''; // Hapus notifikasi jika valid
  });

  function validateEmail(email) {
    // Regex sederhana untuk cek format email
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email.toLowerCase());
  }
});