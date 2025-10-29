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

   
    <main>
      
    <!-- Öne Çıkan Koleksiyonlar Bölümü -->
    <section id="hero-showcase">
            <div class="hero-content">
                <p class="welcome-text">Sanatın Sınırlarını Keşfedin</p>
                <h2 class="hero-heading">Artpedia ile Sanata Bir Adım Daha Yaklaşın</h2>
                <a href="eserler.php" class="btn-discover">Koleksiyonu Keşfet</a>
            </div>

            <div class="hero-bg" style="background-image: url('images/eserler/ana_sayfa_resmi.jpg');"></div>
        </section>

        <section id="featured-collections">
      
        <div class="container">
                <h3 class="section-title">Öne Çıkan Koleksiyonlar</h3>
                  <p class="section-subtitle">Eserler, Snataçılar, Sanat Akımları...</p>
                
                  <!-- Koleksiyon kartları-->
                  <div class="collection-grid">
                    <div class="collection-item">
                        <a href="eser_detay.php?id=inci_kupeli_kiz">
                         
                        <img src="images/eserler/barok_inci_küpeli_kız.jpg" alt="İnci Küpeli Kız">
                            <div class="item-overlay">
                                <h4>İnci Küpeli Kız</h4>
                                <p>Johennes Vermmer</p>
                            </div>
                        </a>
                    </div>
                  
                    <div class="collection-item">
                        <a href="eser_detay.php?id=yarali_melek">
                            
                        <img src="images/eserler/sem_yarali_melek.jpg" alt="Yaralı Melek">
                            <div class="item-overlay">
                                <h4>Yaralı Melek</h4>
                           
                                <p>Hugo Simberg</p>
                            </div>
                        </a>
                    </div>
                  
                  
                    <div class="collection-item">
                        <a href="sanatci_detay.php?id=sanatci1">
                            <img src="images/sanatcilar/Pablo_picasso_1.jpg" alt="Pablo Picasso">
                            <div class="item-overlay">
                                <h4>Pablo Picasso</h4>
                                <p>Yenilikçi, Kübist</p>
                            </div>
                        </a>
                    </div>
                   
                   
                    <div class="collection-item">
                        <a href="akim_detay.php?id=akim1">
                            <img src="images/eserler/rea_uyuyan_orguci.jpg" alt="Realizm">
                            <div class="item-overlay">
                                <h4>Realizm</h4>
                                <p>Yaşamın En Sade Hali</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        
         <!--CTA Bölümü -->
        <section id="cta-explore">
            <div class="container">
                <div class="cta-content">
                    <h3>Sanat Topluluğumuza Katılın!</h3>
                    <p>Yorum yapın, favorilerinizi işaretleyin ve sanatseverlerle etkileşime geçin.</p>
                    <a href="uye_ol.php" class="btn-primary-large">Şimdi Üye Ol</a>
                </div>
            </div>
        </section>

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