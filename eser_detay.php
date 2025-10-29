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
        <!-- Eser Hero Bölümü - Başlık ve Sanatçı Bilgisi -->
        <section id="artwork-detail-hero">
            <div class="container">
                <h1 class="artwork-title">Yaralı Melek</h1>
                <p class="artwork-meta">
                    <a href="sanatci_detay.php?id=hugo_simberg">Hugo Simberg</a> | 1903
                </p>
            </div>
        </section>
         <!-- Eser İçerik Bölümü -->
        <section id="artwork-content" class="container">
            <div class="artwork-main-image">
                <img src="images/eserler/sem_yarali_melek.jpg" alt="Yaralı Melek">
            </div>
         <!-- Eser açıklaması ve detayları -->
            <div class="artwork-description">
                <h2>Eser Hakkında</h2>
                
              <p> Yaralı Melek (Fince: Haavoittunut enkeli) (1903), Fin sembolist ressamın bir tablosudur.Hugo SimbergSimberg'in en tanınmış eserlerinden biri olan eser, 2006 yılında Ateneum Sanat Müzesi tarafından yapılan bir oylamada Finlandiya'nın "ulusal resmi" seçilmiştir.</p>
              <p> Diğer Simberg eserleri gibi, atmosfer de melankoliktir: Alnı sargılı ve kanlı kanadıyla meleksi merkez figür, iki genç taşıyıcısının kasvetli kıyafetleri. Sağdaki figürün doğrudan bakışları izleyiciyi etkiler.</p>
              <p> Alay, arka planda Töölönlahti Körfezi'nin bulunduğu, Helsinki'nin Eläintarha kentindeki tanınabilir bir manzaradan geçer. Aynı yol bugün hala Töölönlahti Körfezi'nin kıyısından geçmektedir. Hugo Simberg zamanında, park işçi sınıfı arasında boş zaman aktiviteleri için popüler bir yerdi. O dönemde Eläintarha parkında birçok hayır kurumu bulunuyordu; Yaralı Melek'te sağlıklı oğlanlar yaralı kızı Kör Kızlar Okulu'na ve Sakatlar Yurdu'na doğru taşıyor. Kız, şifa ve yeniden doğuşu simgeleyen bir demet kardelen tutuyor.</p>
              <p> Simberg, izleyicinin kendi çıkarımlarını yapmasını önererek herhangi bir dekonstrüksiyon sunmayı reddetti. Ancak Simberg'in menenjit hastası olduğu ve iyileşme sürecinde tablonun ona bir güç kaynağı olduğu biliniyor. Bu aynı zamanda mecazi olarak da okunabilir: Menenjitin boyun tutulması, uyuşukluk ve ışığa karşı hassasiyete neden olduğu bilinir ve bunların her biri merkezdeki figür tarafından sergilenir. Kanatlar yerine akciğerler olarak yorumlandığında, böyle bir teşhis küçük yaralanmayı bile açıklar, çünkü tüberküloz menenjit üst akciğerlerde sıyrıklara neden olur.</p>
              <p>Simberg'den 1905-06 yıllarında Tampere Katedrali için freskler yapması istendiğinde, en sevdiği tablo olan Yaralı Melek'in daha büyük bir versiyonuydu.</p>
                    
            </div>
           
            <!-- Yorumlar Bölümü -->

            <section id="comments-section">
                <h3>Yorumlar (0)</h3>
                <div class="comments-list">
                     <!-- Yorumlar buraya dinamik olarak eklenecek -->
                    <div class="comment-item">
                        
                </div>

                <div class="comment-form-container">
                    <h3>Yorumunuzu Ekleyin</h3>
                    <form action="#" method="POST" class="comment-form">
                        <div class="form-group">
                            <label for="comment-name">Adınız:</label>
                            <input type="text" id="comment-name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="comment-email">E-posta (Gizli Kalacaktır):</label>
                            <input type="email" id="comment-email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="comment-text">Yorumunuz:</label>
                            <textarea id="comment-text" name="comment" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Yorum Yap</button>
                    </form>
                </div>
            </section>
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