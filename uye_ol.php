<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artpedia - Dijital Sanat Galeriniz</title>
     <link rel="icon" type="image/png" href="images/logo.png">
      <!-- Site favicon (logo) -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
 <!-- Üst Menü (Header) -->
    <header>
        <div class="container">
            <!-- Site logosu -->
            <h1 class="logo"><a href="index.php">Artpedia</a></h1>
            
             <!-- Ana navigasyon menüsü -->
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="eserler.php">Eserler</a></li>
                    <li><a href="sanatcilar.php">Sanatçılar</a></li>
                    <li><a href="sanat_akimlari.php">Akımlar</a></li>
                </ul>
            </nav>

             <!-- Header butonları (Arama, Giriş, Üye Ol) -->
            <div class="header-actions">
                <div class="search-box">
                    <form action="arama_sonuclari.php" method="GET">
                        <input type="text" name="query" placeholder="Ara...">
                        <button type="submit" aria-label="Arama Yap">🔍</button>
                    </form>
                </div>

                 <!-- Giriş ve üyelik butonları -->
                <a href="giris_yap.php" class="btn-outline">Giriş Yap</a>
                <a href="uye_ol.php" class="btn-primary">Üye Ol</a>
            </div>
        </div>
    </header>


   
    <!-- Ana İçerik - Üyelik Formu -->
    <main class="auth-page">
        <div class="auth-container">
            <h2 class="auth-title">Üye Ol</h2>
            <form action="register_process.php" method="POST" class="auth-form">
                <div class="form-group">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">E-posta Adresi</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Şifreyi Tekrarla</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
               
               
                <button type="submit" class="btn-primary auth-btn">Üye Ol</button>
                <p class="auth-link-text">Zaten bir hesabın var mı? <a href="giris_yap.php">Giriş Yap</a></p>
            </form>
        </div>
    </main>

   
   <!-- Footer Bölümü -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about-us">
                    <h4>Artpedia</h4>
                    <p>Sanatın dijital dünyadaki kalbi.</p>
                </div>
                <div class="footer-section quick-links">
                    <h4>Hızlı Bağlantılar</h4>
                    <ul>
                        <li><a href="eserler.php">Eserler</a></li>
                        <li><a href="sanatcilar.php">Sanatçılar</a></li>
                        <li><a href="sanat_akimlari.php">Sanat Akımları</a></li>
                    </ul>
                </div>
               
                <div class="footer-section contact-info">
                    <h4>Bize Ulaşın</h4>
                    <p>E-posta: info@artpedia.com</p>
                    <p>Telefon: +90 546 261 81 25</p>
                </div>
            </div>

             <!-- Telif hakkı metni -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> Artpedia. Tüm Hakları Saklıdır.</p>
            </div>
        </div>
    </footer>

</body>
</html>