<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Sport Center</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('layout/style.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="text-center mb-4">
              <img src="{{ asset('images/logo.png') }}" alt="Sport Center Logo" class="logo">
            </div>
            <h3 class="text-center">Register Akun</h3>
            <p class="text-center">Silahkan Melakukan Registrasi</p>
            <form method="POST" action="/register">
              @csrf
              <div class="form-group">
                <label for="name">Nama :</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Pemesan">
              </div>
              <div class="form-group">
                <label for="phone">Nomor Aktif (Whatsapp) :</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukan Nomor Aktif">
              </div>
              <div class="form-group">
                <label for="email">E-mail Aktif :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Aktif">
              </div>
              <div class="form-group">
                <label for="address">Alamat :</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Masukan Alamat Lengkap">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="agree" name="agree">
                <label class="form-check-label" for="agree">Saya Setuju</label>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Registrasi</button>
                <!-- <button type="reset" class="btn btn-danger">Batalkan</button> -->
                <button type="reset" class="btn btn-danger" onclick="window.location.href='/'">Batalkan</button>
              </div>
            </form>
          </div>
        </div>
        <footer class="text-center mt-4">
          <small>2024 SPORT CENTER. All rights reserved.</small>
          <div class="footer-links">
            <a href="#">informasi</a> |
            <a href="#">ketentuan</a> |
            <a href="#">prosedur</a> |
            <a href="#">jadwal</a>
          </div>
        </footer>
      </div>
    </div>
  </div>
</body>

</html>