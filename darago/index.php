<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darago - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container-full">

        <!-- SISI KIRI -->
        <div class="branding-panel">

            <img src="Logo Burung Dara.png"
                 alt="Logo Burung Dara"
                 class="img-logo-kecil">

            <div class="middle-content">
                <img src="logo with text.png"
                     alt="Logo Darago Utuh"
                     class="img-logo-utama">
            </div>

        </div>

        <!-- SISI KANAN -->
        <div class="form-panel">

            <div class="form-box">

                <h2>Masuk</h2>

                <!-- FORM LOGIN -->
                <form action="login.php" method="POST">

                    <div class="input-group">
                        <label for="email">Email</label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Masukkan email kamu"
                            required>
                    </div>

                    <div class="input-group">
                        <label for="password">Kata sandi</label>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Masukkan kata sandi"
                            required>
                    </div>

                    <button type="submit" class="btn-utama">
                        MASUK
                    </button>

                </form>

                <div class="buat-akun-link">
                    <p>
                        Belum punya akun?
                        <a href="#" id="open-modal">
                            Buat Akun
                        </a>
                    </p>
                </div>

            </div>

        </div>

    </div>

    <!-- MODAL REGISTER -->
    <div class="modal-overlay" id="register-modal">

        <div class="modal-content">

            <span class="close-btn" id="close-modal">
                &times;
            </span>

            <h2>Buat Akun</h2>

            <!-- FORM REGISTER -->
            <form action="register.php" method="POST">

                <!-- NAMA -->
                <div class="input-group">
                    <label for="reg-nama">Nama</label>

                    <input
                        type="text"
                        name="nama"
                        id="reg-nama"
                        placeholder="Nama lengkap"
                        required>
                </div>

                <!-- EMAIL -->
                <div class="input-group">
                    <label for="reg-email">Email</label>

                    <input
                        type="email"
                        name="email"
                        id="reg-email"
                        placeholder="Alamat email"
                        required>
                </div>

                <!-- PASSWORD -->
                <div class="input-group">
                    <label for="reg-password">Password</label>

                    <input
                        type="password"
                        name="password"
                        id="reg-password"
                        placeholder="Masukkan password"
                        required>
                </div>

                <!-- TTL -->
                <div class="input-group">

                    <label>TTL (Tanggal Lahir)</label>

                    <div class="ttl-inputs">

                        <input
                            type="number"
                            placeholder="DD"
                            min="1"
                            max="31"
                            required>

                        <input
                            type="number"
                            placeholder="MM"
                            min="1"
                            max="12"
                            required>

                        <input
                            type="number"
                            placeholder="YYYY"
                            min="1900"
                            max="2026"
                            required>

                    </div>

                </div>

                <button
                    type="submit"
                    class="btn-utama"
                    style="margin-top: 15px;">

                    DAFTAR

                </button>

            </form>

        </div>

    </div>

    <script src="script.js"></script>

</body>
</html>