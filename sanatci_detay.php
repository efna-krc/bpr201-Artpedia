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
         <!-- Sanatçı Hero Bölümü - Portre, İsim ve Yaşam Tarihleri -->
        <section id="artist-detail-hero">
            <div class="container">
            
            <img src="images/sanatcilar/Pablo_picasso_1.jpg" alt="Pablo Picasso Portresi" class="artist-hero-image">
                <h1 class="artist-name">Pablo Picasso</h1>
                <p class="artist-lifespan">1881 - 1973</p>
                <p class="artist-intro">Fransa'da yaşamış İspanyol ressam, heykeltıraş, sahne tasarımcısı, şair ve oyun yazarıdır. 20. yüzyıl sanatının en iyi bilinen isimlerindendir. Georges Braque ile birlikte kübizm akımının temelini atmış, asamblajı icat etmiş, kolajın icadında yer almış ve çok çeşitli tarzların gelişimine katkı vermiştir.</p>
            </div>
        </section>
         <!-- Sanatçı İçerik Bölümü -->
        <section id="artist-biography" class="container">
           <!-- Biyografi metni -->
        <div class="biography-content">
                <h2>Biyografi</h2>
                <p>Küçük yaşta resim yapmaya ressam ve resim öğretmeni babası tarafından yönlendirildi. Resim yeteneği kısa sürede keşfedildi ve 1895'te Güzel Sanatlar Okulu'na girdi. 1901 yılından itibaren anne soyadı olan Picasso'yu kullanmaya başladı. Eserleri İspanyol bir dergi olan Juventut'ta yayınlandı.</p>
               
                <p>En tanınmış eseri Alman hava kuvvetlerinin Guernica kasabasını bombalamasını anlatan Guernica adlı eseridir. Resim 1937'de yapılmıştır. Bu resim şu anda Madrid'de Reina Sofía Müzesinde bulunmaktadır. Picasso, bir sergisi sırasında kendisine, "Bu resmi siz mi yaptınız" diye soran bir Alman generaline, "Hayır, siz yaptınız" cevabını vermiştir. Bu resim Picasso'nun savaşa ve Guernica'nın bombalanmasına karşı duyduğu güçlü nefreti anlatmaktadır. Resimdeki insan ve hayvan figürleri acı, hüzün ve savaşa karşı duyulan nefreti yansıtmaktadır.</p>
                
                <p>
                    En devrimci dönemi, Georges Braque ile birlikte geliştirdiği **Kübizm**'dir (1907-1914). Kübist eserlerde nesneler parçalara ayrılır, farklı açılardan aynı anda gösterilir ve geleneksel perspektif reddedilir. Bu akım, modern sanatta köklü değişikliklere yol açmıştır. "Avignonlu Kızlar" (Les Demoiselles d'Avignon) bu dönemin en bilinen eserlerinden biridir.
                </p>
                <p>
                    Picasso, Kübizm'den sonra da farklı stiller ve tekniklerle denemeler yapmaya devam etti. Sürrealizm'den klasikçiliğe, neoklasizmden heykeltıraşlığa kadar birçok alanda eserler verdi. Savaşın yıkımını anlatan anti-savaş tablosu **"Guernica"** (1937), modern sanatın en güçlü politik ifadelerinden biri olarak kabul edilir.</p>
                <p>Hayatındaki birkaç önemli kadından Marie-Thèrése Walter ve Jacqueline Roque intihar ettiler, Hohlova ve Dora Maar ise sinir krizleri yaşadılar. Oğlu Paulo depresyon sonucu alkolizmden öldü. Torunu Pablito da ressamın cenazesine katılmasına son nikahlı eşi Jacqueline Roque izin vermeyince aynı yıl klorak içerek intihar etti</p>
           <p>Picasso'nun son vasiyetnamesine onu akıl sağlığı yerinde değilken yazdığı gerekçesiyle itiraz eden Françoise Gilot ile Jacqueline Roque arasındaki miras davası önce itiraz reddedilmekle birlikte sonunda Picasso'nun oğlu Paulo'nun ölümünden sonra, miras sahiplerinin Jacqueline ile birlikte Picasso'nun çocukları ve torunları Claude, Paloma, Maya, Bernard ve Marina Picasso olduğuna karar verildi.</p>
           
           </div>
            <!-- Sanatçının öne çıkan eserleri -->
            <div class="artist-featured-artworks">
                <h3>Öne Çıkan Eserleri</h3>
                
                
                <div class="artwork-grid-mini">
                    <div class="artwork-item-mini">
                        <a href="eser_detay.php?id=guerinca">
                            <img src="images/eserler/küb_guernica.jpg" alt="Guernica">
               
                            
                     
                            <h4>Guernica</h4>
                        </a>
                    </div>
                    <div class="artwork-item-mini">
                        <a href="eser_detay.php?id=mandolinli_kiz">
                            <img src="images/eserler/küb_mandolinli_kiz.jpg" alt="Mandolinli Kız">
                            <h4>Mandolinli Kız</h4>
                        </a>
             
             
                    </div>
                </div>
            </div>
             <!-- Yorumlar Bölümü -->
            <section id="artist-comments-section">
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