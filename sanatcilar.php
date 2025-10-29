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
       <!-- Sanatçılar galerisi bölümü -->
        <section id="artist-gallery">
            <div class="container">
                   <!-- Bilgilendirme notu -->
                 <div style="background-color: #fffbea; border-left: 4px solid #8BC34A; padding: 15px; margin-bottom: 30px; border-radius: 5px;">
                     <p style="margin: 0; color: #666; font-size: 0.95rem;">
                     <strong>Not:</strong> Şu anda detay sayfaları statik bir şekilde tek bir örneğe açılıyor. Sayfalar veri tabanı bağlantısından sonra dinamik hale gelecektir.</p>
                 </div>



                  <!-- Sanatçı kartları grid konteyneri -->
                <div class="artist-grid">
                  
                    <div class="artist-item">
                        <a href="sanatci_detay.php?id=gustave_courbet">
                            <img src="images/sanatcilar/Gustave Courbet.jpg" alt="Gustave Courbet">
                            <div class="artist-info">
                                <h4>Gustave Courbet</h4>
                               
                            </div>
                        </a>
                    </div>

                    <!-- Sanatçı kartları -->
                    <div class="artist-item">
                        <a href="sanatci_detay.php?id=henri_roussea">
                            <img src="images/sanatcilar/Henri Roussea.jpg" alt="Henri Roussea">
                            <div class="artist-info">
                                <h4>Henri Roussea</h4>
                               
                            </div>
                        </a>
                    </div>
                    
                   
                   
                    <div class="artist-item">
                        <a href="sanatci_detay.php?id=gustav_klimt">
                            <img src="images/sanatcilar/Gustav Klimt.webp" alt="Gustav Klimt">
                            <div class="artist-info">
                                <h4>Gustav Klimt</h4>
                     </div>
                        </a>
                    </div>

                    <div class="artist-item">
                        <a href="sanatci_detay.php?id=salvador_dali">
                            <img src="images/sanatcilar/salvador-dali.jpg!Portrait.jpg" alt="Salvador Dalí">
                            <div class="artist-info">
                                <h4>Salvador Dalí</h4>
                              
                            </div>
                        </a>
                    </div>

                    <div class="artist-item">
                         
                      <a href="sanatci_detay.php?id=pablo_picasso">
                            <img src="images/sanatcilar/Pablo_picasso_1.jpg" alt="Pablo Picasso">
                            <div class="artist-info">
                                <h4>Pablo Picasso</h4>
                            
                            </div>
                        </a>
                    </div>

                    <div class="artist-item">
                        <a href="sanatci_detay.php?id=claude_monet">
                           
                        
                        <img src="images/sanatcilar/Claude Monet.jpg" alt="Claude Monet">
                            <div class="artist-info">
                                <h4>Claude Monet</h4>
                              
                            </div>
                        </a>
                    </div>

                     <div class="artist-item">
                        <a href="sanatci_detay.php?id=edvard_munch">
                        <img src="images/sanatcilar/edvard_munch.webp" alt="Edvard Munch">
                            <div class="artist-info">
                          
                    <h4>Edvard Munch</h4>
                             </div>
                        </a>
                    </div>

                     <div class="artist-item">
                        <a href="sanatci_detay.php?id=georges_seurat">
                          
                        <img src="images/sanatcilar/georges seurat.webp" alt="Georges Seurat">
                            <div class="artist-info">
                                <h4>Georges Seurat</h4>
                             </div>
                        </a>
                    </div>

                    
                     <div class="artist-item">
                        <a href="sanatci_detay.php?id=hugo_simberg">
                        
                        <img src="images/sanatcilar/hugo_simberg.jpg" alt="Hugo Simberg">
                            <div class="artist-info">
                                <h4>Hugo Simberg</h4>
                             </div>
                        </a>
                    </div>

                    <div class="artist-item">
                        <a href="sanatci_detay.php?id=johannes_vermmer">
                           
                        <img src="images/sanatcilar/johannes vermmer.jpg" alt="Johennes Vermmer">
                            <div class="artist-info">
                        
                            <h4>Johennes Vermmer</h4>
                             </div>
                        </a>
                    </div>

                     <div class="artist-item">
                        <a href="sanatci_detay.php?id=caravaggio">
                            
                        <img src="images/sanatcilar/Caravaggio.jpg" alt="Caravaggio">
                            <div class="artist-info">
                                <h4>Caravaggio</h4>
                             </div>
                        </a>
                    </div>

                     <div class="artist-item">
                        <a href="sanatci_detay.php?id=rembrandt_van_rijn">
                            <img src="images/sanatcilar/Rembrandt van Rijn.jpg" alt="CRembrandt van Rijn">
                            <div class="artist-info">
                          
                            <h4>Rembrandt van Rijn</h4>
                             </div>
                        </a>
                    </div>

                     <div class="artist-item">
                        <a href="sanatci_detay.php?id=willem_den_broeder">
                            <img src="images/sanatcilar/Willem den Broeder.jpg" alt="Willem den Broeder">
                            <div class="artist-info">
                                <h4>Willem den Broeder</h4>
                             </div>
                        </a>
                    </div>
                    <!-- Sanatçı kartları bitti-->

                    

               
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