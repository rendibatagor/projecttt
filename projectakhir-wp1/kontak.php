<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak - Renariza Cake & Bakery</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Kontak Renariza Cake & Bakery</h1>

    <nav>
  <a href="index.php">Beranda</a>
  <a href="tentangkami.php">Tentang Kami</a>
  <a href="daftarproduk.php">Produk</a>
  <a href="kontak.php">Kontak</a>
 </nav>

    <form id="kontakForm">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" required></textarea>
      </div>

      <button type="submit">Kirim</button>
      <p id="notif" style="color: red;"></p>
    </form>

    <div class="info-kontak">
      <h2>Hubungi Kami</h2>
      <p><strong>Email:</strong> <a href="mailto:renarizacakeandbakery@gmail.com">renarizacakeandbakery@gmail.com</a></p>
      <p><strong>Instagram:</strong> <a href="https://instagram.com/renariza.cakeandbakery" target="_blank">@renariza.cakeandbakery</a></p>
      <p><strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></p>
    </div>

    <footer>
      <p>&copy; 2025 Toko Kue Renariza. All rights reserved.</p>
    </footer>
  </div>

  <script src="script.js"></script>
</body>
</html>