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
        <!-- Sanat akımları galerisi bölümü -->
        <section id="movement-gallery">
            <div class="container">
                   <!-- Bilgilendirme notu -->
                <div style="background-color: #fffbea; border-left: 4px solid #8BC34A; padding: 15px; margin-bottom: 30px; border-radius: 5px;">
                     <p style="margin: 0; color: #666; font-size: 0.95rem;">
                     <strong>Not:</strong> Şu anda detay sayfaları statik bir şekilde tek bir örneğe açılıyor. Sayfalar veri tabanı bağlantısından sonra dinamik hale gelecektir.</p>
                 </div>
            
                  <!-- Sanat akımları kartları grid konteyneri -->
            <div class="movement-grid">
                   
             <!-- Sanat Akımı kartları-->
                 <div class="movement-item">
                        <a href="akim_detay.php?id=empresyonizm">
                            <img src="images/eserler/emp_la_grande_jatte_adasinda_pazar_ogleden_sonrasi.webp" alt="Empresyonizm">
                            <div class="movement-info">
                        <h4>Empresyonizm</h4>
                                <p>Işığın Güzel Yansımaları</p>
                            </div>
                        </a>
                    </div>

                    <div class="movement-item">
                        <a href="akim_detay.php?id=barok">
                            <img src="images/eserler/barok_inci_küpeli_kız.jpg" alt="Barok">
                            <div class="movement-info">
                                <h4>Barok</h4>
                                <p>Zengin ve Dramatik Sanat</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="movement-item">
                        <a href="akim_detay.php?id=surrealizm">
                            <img src="images/eserler/sür_bellegin_azmi.jpg" alt="Sürrealizm">
                            <div class="movement-info">
                                <h4>Sürrealizm</h4>
                                <p>Bilinçaltının Sınırsız Dünyası</p>
                            </div>
                        </a>
                    </div>

                    
                    <div class="movement-item">
                        <a href="akim_detay.php?id=kübizm">
                            <img src="images/eserler/küb_mandolinli_kiz.jpg" alt="Kübizm">
                            <div class="movement-info">
                        <h4>Kübizm</h4>
                                <p>Biçimin Parçalanması</p>
                            </div>
                        </a>
                   
                   
                    </div>

                    <div class="movement-item">
                        <a href="akim_detay.php?id=sembolizm">
                            <img src="images/eserler/sem_yarali_melek.jpg" alt="Sembolizm">
                            <div class="movement-info">
                                <h4>Sembolizm</h4>
                                <p>Sembollerin Duygulara Yansıması</p>
                            </div>
                        </a>
                    </div>

                
                
                    <div class="movement-item">
                        <a href="akim_detay.php?id=realizm">
                            <img src="images/eserler/rea_uyuyan_orguci.jpg" alt="Realizm">
                            <div class="movement-info">
                                <h4>Realizm</h4>
                                <p>Yaşamın En Sade Hali</p>
                            </div>
                        </a>
                    </div>
                    <!-- Sanat Akımı kartları bitti-->
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