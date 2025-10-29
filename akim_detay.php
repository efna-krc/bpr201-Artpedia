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
         <!-- Sanat Akımı Hero Bölümü - Görsel, Başlık ve Dönem Bilgisi -->
        <section id="movement-detail-hero">
            <div class="container">
                <img src="images/eserler/emp_izlenim.jpg" alt="Empresyonizm Akımı" class="movement-hero-image">
                <h1 class="movement-title">Empresyonizm</h1>
                <p class="movement-period">1870'ler – 1880'ler</p>
                <p class="movement-intro">Fransa'da 19. yüzyılın sonlarında ortaya çıkan, ışık, renk ve an kavramını öne çıkartan etkileyici bir sanat akımıdır .</p>
            </div>
        </section>
          <!-- Akım İçerik Bölümü -->
        <section id="movement-content-section" class="container">
             <!-- Akım hakkında detaylı bilgi -->
            <div class="movement-main-info">
                <h2>Akım Hakkında</h2>
                <p>
                    Empresyonizm (İzlenimcilik), 19. yüzyılın sonlarında Fransa'da ortaya çıkan ve sanat tarihinde çığır açan bir sanat akımıdır. Adını Claude Monet'nin "İzlenim, Gün Doğumu" (Impression, soleil levant) adlı tablosundan almıştır. Empresyonist ressamlar, stüdyo yerine açık havada (en plein air) çalışmayı tercih ederek, anlık ışık ve renk değişimlerini yakalamaya odaklandılar. Geleneksel sanatın akademik kurallarına ve detaylı çizimlere karşı çıkarak, fırça darbelerinin görünür olduğu, dinamik ve canlı yüzeyler oluşturdular.
                </p>
                <p>
                    Akımın temel özellikleri arasında, nesnelerin kendisinden ziyade, ışığın nesneler üzerindeki anlık etkisini ve yarattığı "izlenimi" yansıtma çabası bulunur. Renk teorisi ve optik prensiplerine büyük önem verdiler; gölgeleri siyah yerine complementary (tamamlayıcı) renklerle oluşturdular ve parlak, saf renkleri birincil fırça darbeleriyle tuvale aktardılar. Bu sayede, izleyicinin gözünde renklerin karışmasını sağlayarak daha canlı ve ışıklı bir etki elde ettiler.
                </p>
                <p>
                    Başlıca Empresyonist ressamlar arasında Claude Monet, Pierre-Auguste Renoir, Edgar Degas, Camille Pissarro, Alfred Sisley ve Berthe Morisot sayılabilir. Manzara resimleri, şehir hayatı sahneleri, portreler ve gündelik yaşamdan kesitler, bu akımın sıkça işlediği konulardı. Empresyonizm, daha sonra Neo-Empresyonizm, Post-Empresyonizm ve Kübizm gibi birçok modern sanat akımının da öncüsü olmuştur.
                </p>
                <p>
                    Empresyonistlerin sanat dünyasına getirdiği yenilikler, zamanla kabul görmüş ve modern sanatın gelişiminde dönüm noktası olmuştur. Onlar, resmin sadece gerçeğin kopyalanması olmadığını, aynı zamanda sanatçının anlık duygu ve algılarının da bir ifadesi olabileceğini göstermişlerdir.
                </p>
            </div>
        <!-- Akıma ait örnek eserler -->
            <div class="movement-featured-artworks">
                <h3>Öne Çıkan Eserler</h3>
                <div class="artwork-grid-mini">
                    <div class="artwork-item-mini">
                        <a href="eser_detay.php?id=izlenim_gun_dogumu">
                            <img src="images/eserler/emp_izlenim.jpg" alt="İzlenim: Gün Doğumu">
                            <h4>İzlenim: Gün Doğumu</h4>
                            <p>Claude Monet</p>
                        </a>
                    </div>
                    <div class="artwork-item-mini">
                        <a href="eser_detay.php?id=la_grande_jatte_adasinda_pazar_ogleden_sonrasi">
                            <img src="images/eserler/emp_la_grande_jatte_adasinda_pazar_ogleden_sonrasi.webp" alt="La Grande Jatte Adası'nda Pazar Öğleden Sonrası">
                            <h4>La Grande Jatte Adası'nda Pazar Öğleden Sonrası</h4>
                            <p>Georges Seurat</p>
                        </a>
                    </div>
                    <div class="artwork-item-mini">
                        <a href="eser_detay.php?id=nehir_kenari">
                            
                        <img src="images/eserler/emp_nehir_kenari.jpg" alt="Nehir Kenarı">
                            <h4>Nehir Kenarı</h4>
                            <p>Georges Seurat</p>
                        </a>
                    </div>
                </div>
            </div>
         

             <!-- Yorumlar Bölümü -->
            <section id="movement-comments-section">
                <h3>Yorumlar (0)</h3>
                <div class="comments-list">
                   
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