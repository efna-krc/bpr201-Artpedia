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
         <!-- Eserler galerisi bölümü -->
            <section id="all-artworks">
            <div class="container">
                 <!-- Bilgilendirme notu -->
                <div style="background-color: #fffbea; border-left: 4px solid #8BC34A; padding: 15px; margin-bottom: 30px; border-radius: 5px;">
                     <p style="margin: 0; color: #666; font-size: 0.95rem;">
                     <strong>Not:</strong> Şu anda detay sayfaları statik bir şekilde tek bir örneğe açılıyor. Sayfalar veri tabanı bağlantısından sonra dinamik hale gelecektir.</p>
                 </div>
                <div class="artwork-gallery-grid">
                </div>
            </div>
        </section>
        
          <!-- Eser kartları grid konteyneri -->
            <div class="container">
                <div class="artwork-gallery-grid">

                  <!-- Eser Kartları -->
                    <div class="gallery-item">
                        <a href="eser_detay.php?id=aziz_mattayanin_cagrisi">
                            <img src="images/eserler/barok_aziz-mattaya-cagri-wannart-0.jpg" alt="Aziz Matta'nın Çağrısı">
                    
                            <div class="gallery-info">
                           
                            <h4>Aziz Matta'nın Çağrısı</h4>
                                <p>Caravaggio</p>
                            </div>
                        </a>
                    </div>
                    
                   
                    <div class="gallery-item">
                        <a href="eser_detay.php?id=izlenim_gun_dogumu">
                            
                        <img src="images/eserler/emp_izlenim.jpg" alt="İzlenim: Gün Doğumu">
                            <div class="gallery-info">
                                <h4>İzlenim: Gün Doğumu</h4>
                                <p>Claude Monet</p>
                            </div>
                        </a>
                    </div>
                   
                    <div class="gallery-item">
                        <a href="eser_detay.php?id=inci_kupeli_kiz">
                            <img src="images/eserler/barok_inci_küpeli_kız.jpg" alt="İnci Küpeli Kız">
                     
                     
                            <div class="gallery-info">
                                <h4>İnci Küpeli Kız</h4>
                                <p>Johannes Vermeer</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="gallery-item">
                        <a href="eser_detay.php?id=yarali_melek">
                            <img src="images/eserler/sem_yarali_melek.jpg" alt="Yaralı Melek">
                            <div class="gallery-info">
                                <h4>Yaralı Melek</h4>
                                <p>Hugo Simberg</p>
                            </div>
                        </a>
                    </div>
                    
            
        <div class="gallery-item">
                        <a href="eser_detay.php?id=bellegin_azmi">
                            <img src="images/eserler/sür_bellegin_azmi.jpg" alt="Belleğin Azmi">
                            <div class="gallery-info">
                                <h4>Belleğin Azmi</h4>
                                <p>Salvador Dali</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="eser_detay.php?id=guerinca">
                            <img src="images/eserler/küb_guernica.jpg" alt="Guerinca">
                            <div class="gallery-info">
                                <h4>Guerinca</h4>
                                <p> Pablo Picasso</p>
                            </div>
                        </a>
                    </div>

                     <div class="gallery-item">
                        <a href="eser_detay.php?id=nehir_kenari">
                            <img src="images/eserler/emp_nehir_kenari.jpg" alt="Nehir Kenarı">
                            <div class="gallery-info">
                                <h4>Nehir Kenarı</h4>
                                <p> Georges Seurat</p>
                            </div>
                        </a>
                    </div>
                     <div class="gallery-item">
                        <a href="eser_detay.php?id=ciglik">
                            <img src="images/eserler/sem_ciglik.webp" alt="Çığlık">
                            <div class="gallery-info">
                                <h4>Çığlık</h4>
                                <p> Edvard Munch</p>
                            </div>
                        </a>
                    </div>

                     <div class="gallery-item">
                        <a href="eser_detay.php?id=gece_devriyesi">
                            <img src="images/eserler/barok_gece_devriyesi.jpg" alt="Gece Devriyesi">
                            <div class="gallery-info">
                                <h4>Gece Devriyesi</h4>
                                <p>Rembrandt van Rijn</p>
                            </div>
                        </a>
                    </div>

                    <div class="gallery-item">
                        <a href="eser_detay.php?id=la_grande_jatte_adasinda_pazar_ogleden_sonrasi">
                            <img src="images/eserler/emp_la_grande_jatte_adasinda_pazar_ogleden_sonrasi.webp" alt="La Grande Jatte Adası'nda Pazar Öğleden Sonrası">
                            <div class="gallery-info">
                                <h4>La Grande Jatte Adası'nda Pazar Öğleden Sonrası</h4>
                                <p>Georges Seurat</p>
                            </div>
                        </a>
                    </div>

                    
                    
                    <div class="gallery-item">
                        <a href="eser_detay.php?id=eve_donus">
                            <img src="images/eserler/rea_eve_donus.jpg" alt="Eve Dönüş">
                            <div class="gallery-info">
                                <h4>Eve Dönüş</h4>
                                <p>Hugo Simberg</p>
                            </div>
                        </a>
                   
                    </div>



                     <div class="gallery-item">
                        <a href="eser_detay.php?id=uyuyan_cingene">
                            <img src="images/eserler/sür_uyuyan_cingene.jpeg" alt="Uyuyan Çingene">
                            <div class="gallery-info">
                                <h4>Uyuyan Çingene</h4>
                                <p>Henri Rousseau</p>
                            </div>
                        </a>
                    </div>

                    <div class="gallery-item">
                        <a href="eser_detay.php?id=opucuk">
                            <img src="images/eserler/sem_opucuk.jpg" alt="Öpücük">
                           <div class="gallery-info">
                                <h4>Öpücük</h4>
                                <p>Gustav Klimt</p>
                            </div>
                        </a>
                    </div>





                     <div class="gallery-item">
                        <a href="eser_detay.php?id=sise_ve_baliklar">
                            <img src="images/eserler/küb_sise_ve_baliklar.jpg" alt="Şişe ve Balıklar">
                            <div class="gallery-info">
                                <h4>Şişe ve Balıklar</h4>
                                <p>Georges Braque</p>
                            </div>
                        </a>
                    </div>

                     <div class="gallery-item">
                        <a href="eser_detay.php?id=uyuyan_orguci">
                            <img src="images/eserler/rea_uyuyan_orguci.jpg" alt="Uyuyan Örgücü">
                            <div class="gallery-info">
                                <h4>Uyuyan Örgücü</h4>
                                <p>Gustave Courbet</p>
                            </div>
                        </a>
                    </div>

                     <div class="gallery-item">
                        <a href="eser_detay.php?id=mandolinli_kiz">
                            <img src="images/eserler/küb_mandolinli_kiz.jpg" alt="Mandolinli Kız">
                            <div class="gallery-info">
                                <h4>Mandolinli Kız</h4>
                                <p>Pablo Picasso</p>
                            </div>
                        </a>
                    </div>

                    <div class="gallery-item">
                        <a href="eser_detay.php?id=tas_kiricilar">
                            <img src="images/eserler/rea_tas_kiricilar.jpg" alt="Taş Kırıcılar">
                            <div class="gallery-info">
                                <h4>Taş Kırıcılar</h4>
                                <p>Gustave Courbet</p>
                            </div>
                        </a>
                    </div>

                    <div class="gallery-item">
                        <a href="eser_detay.php?id=brain_chain">
                            <img src="images/eserler/sür_brain_chain.png" alt="BrainChain">
                            <div class="gallery-info">
                                <h4>BrainChain</h4>
                                <p>Willem Den Broeder</p>
                            </div>
                        </a>
                    </div>
           <!-- Eser kartları bitti-->
               </div>
               
                <!-- Sayfalandırma (pagination) alanı -->
               <div class="pagination">
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