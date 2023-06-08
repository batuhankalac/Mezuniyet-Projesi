<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İLETİŞİM</title>
    <!-- BOOTSTRAP İKONLARI İÇİN CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>

     <!-- ÜST MENÜ BAŞLANGIÇ -->
     <header>
      <div class="reklam">
        <div class="container">
          <p>
            TÜM ÜRÜNLERDE %20 İNDİRİM "ANKUZEF" KODU İLE SİZLERİ BEKLİYOR...
          </p>
        </div>
      </div>
      <div class="header-row">
        <div class="container">
          <div class="header-wrapper">
            <div class="header-mobile">
              <i class="bi bi-list" id="btn-menu"></i>
            </div>
            <div class="header-sol">
              <a href="index.php" class="logo">
                <img src="img/beglogoust.png" style="width:70px; height:70px; margin-top:7px;">
              </a>
            </div>
            <div class="header-orta" id="sidebar">
              <nav class="navigation">
                <ul class="menu-list">
                  <li class="menu-list-item">
                    <a href="index.php" class="menu-link">ANASAYFA</a>
                  </li>

                  <li class="menu-list-item">
                    <a href="telefon.php" class="menu-link"
                      >TELEFON<i class="bi bi-chevron-down"></i
                    ></a>

                    <div class="menu-dropdown-wrapper">
                      <ul class="menu-dropdown-content">
                        <li>
                          <a href="#">Iphone</a>
                        </li>

                        <li>
                          <a href="#">Samsung</a>
                        </li>

                        <li>
                          <a href="#">Xiaomi</a>
                        </li>

                        <li>
                          <a href="#">Oppo</a>
                        </li>

                        <li>
                          <a href="#">Asus</a>
                        </li>
                      </ul>
                    </div>
                  </li>

                  <li class="menu-list-item">
                    <a href="laptop.php" class="menu-link"
                      >LAPTOP<i class="bi bi-chevron-down"></i
                    ></a>
                    <div class="menu-dropdown-wrapper">
                      <ul class="menu-dropdown-content">
                        <li>
                          <a href="#">Asus</a>
                        </li>

                        <li>
                          <a href="#">Monster</a>
                        </li>

                        <li>
                          <a href="#">Acer</a>
                        </li>

                        <li>
                          <a href="#">Toshiba</a>
                        </li>

                        <li>
                          <a href="#">Lenovo</a>
                        </li>
                      </ul>
                    </div>
                  </li>

                  <li class="menu-list-item">
                  <a href="hakkimizda.php" class="menu-link">HAKKIMIZDA</a>
                  </li>

                  <li class="menu-list-item">
                    <a href="iletisim.php" class="menu-link active">İLETİŞİM </a>
                  </li>
                </ul>
              </nav>
              <i class="bi-x-circle" id="close-sidebar"></i>
            </div>
            <div class="header-sag">
              <div class="header-sag-butonlar">
                <a href="login.php" class="header-account">
                  <i class="bi bi-person"></i>
                  
                </a>

                <button class="search-button">
                  <i class="bi bi-search"></i>
                </button>

                <a href="#">
                  <i class="bi bi-heart"></i>
                </a>

                <div class="header-cart">
                  <a href="sepet.html" class="header-cart-link">
                    <i class="bi bi-bag"></i>
                    <span class="header-cart-count">0</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ÜST MENÜ BİTİŞ -->
    
    <!-- ÜRÜN ARAMA BUTONU VE İÇERİKLERİ BAŞLANGIÇ -->
    <div class="modal-search">
      <div class="modal-wrapper">
        <h3 class="modal-title">Ürünleri Ara</h3>
        <p class="modal-text">
          Bulmak İstediğiniz Ürünleri Yazarak Arayabilirsiniz.
        </p>
        <form class="search-form">
          <input type="text" placeholder="Bulmak istediğiniz ürün" />
          <button>
            <i class="bi bi-search"></i>
          </button>
        </form>
        <div class="search-results">
          <div class="search-heading">
            <h3>BULUNAN ÜRÜNLER</h3>
          </div>
          <div class="results">
            <a href="#" class="result-item">
              <img src="img/ürünler/ürün1/1.png" alt="" class="search-thumb" />
              <div class="search-info">
                <h4>1. ÜRÜN BAŞLIĞI</h4>
                <span class="search-kod">1. ÜRÜN KODU</span>
                <span class="search-fiyat">1. ÜRÜN FİYAT</span>
              </div>
            </a>
            <a href="#" class="result-item">
              <img
                src="img/ürünler/sweatshirt-kadin/1.png"
                alt=""
                class="search-thumb"
              />
              <div class="search-info">
                <h4>2. ÜRÜN BAŞLIĞI</h4>
                <span class="search-kod">2. ÜRÜN KODU</span>
                <span class="search-fiyat">2. ÜRÜN FİYAT</span>
              </div>
            </a>
          </div>
        </div>
        <i class="bi bi-x-circle" id="close-search"></i>
      </div>
    </div>
    <!-- ÜRÜN ARAMA BUTONU VE İÇERİKLERİ BİTİŞ -->


    <!-- İLETİŞİM BAŞLANGIÇ -->
    <section class="contact">
      <div class="contact-top">
          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12236.707646733103!2d32.8288637!3d39.9374323!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a60865db145c0a6!2zQW5rYXJhIMOcbml2ZXJzaXRlc2kgR8O8bmXFnyBNZXlkYW7EsQ!5e0!3m2!1str!2str!4v1667318828293!5m2!1str!2str"
             width="100%" height="500"  style="border:0; padding-left: 50px; padding-right: 50px; margin-top: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
      <div class="contact-bottom">
        <div class="container">
          <div class="contact-titles">
              <h4>Bizle iletişime geç</h4>
              <h2>BÜYÜK BAŞLIK</h2>
              <p>UZUN BÜYÜK BİR PARAGRAF YAZMAK LAZIM BURAYA</p>
          </div>
          <div class="contact-elements">
              <form class="contact-form">
                  <div class="">
                      <label>
                          Adınız:
                          <span>*</span>
                      </label>
                      <input type="text" required>
                  </div>
                  <div class="">
                      <label>
                          E-Mail Adresiniz:
                          <span>*</span>
                      </label>
                      <input type="text" required>
                  </div>
                  <div class="">
                      <label>
                          Konu:
                          <span>*</span>
                      </label>
                      <input type="text" required>
                  </div>
                  <div class="">
                      <label>
                          Mesajınız:
                          <span>*</span>
                      </label>
                      <textarea id="author" name="author" type="text" value="" size="30" required=""></textarea>
                  </div>
                  <button class="btn btn-sm form-button">Mesajı Gönder</button>
              </form>
              <div class="contact-info">
                  <div class="contact-info-item">
                      <div class="contact-info-texts">
                          <strong> BK Teknoloji </strong>
                          <p class="contact-street">
                              Konum bilgileri yazıyor olacak</p>
                          <a href="tel:Telefon: +90 538 286 0109">Telefon: +90 536 638 37 57</a>
                          <a href="mailto:Email: info@BEG.com">Email: info@bkteknoloji.com</a>
                      </div>
                  </div>
                  <div class="contact-info-item">
                      <div class="contact-info-texts">
                          <strong> Açık Saatler</strong>
                          <p class="contact-date">
                              Pazartesi - Cuma : 09:00 - 17:00</p>
                          <p>Hafta sonu kapalı</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
    </section>
    <!-- İLETİŞİM BİTİŞ -->

    <!-- MARKALAR KISMI BAŞLANGIÇ -->
    <section class="brands">
      <div class="container">
        <div class="section-title">
          <h2>MARKALAR</h2>
        </div>
        <ul class="brand-list">
          <li class="brand-item">
            <a href="https://www.ankarauniversitesistore.com/">
              <img src="img/markalar/aumarka.png" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- MARKALAR KISMI BİTİŞ -->

<!-- ALT KISIM BAŞLANGIÇ -->

<footer class="footer">
    <div class="left-row">
        <div class="container">
            <div class="footer-row-wrapper">
                <div class="footer-left-wrapper">
                    <div class="footer-left">
                        <div class="footer-left-top">
                          <img src="img/beglogoalt.png" alt="Batuhan Group" >
                        </div>
                        
                    </div>
                    <div class="footer-left-bottom">
                      <p class="left-desc">BK Teknoloji</p>
                    </div>
                </div>
                <div class="footer-contact-wrapper">
                    <div class="footer-contact-top">
                        <h3 class="contact-title">
                            Yardıma ihtiyacın var mı? <br><br>
                            (+90) 536 638 37 57
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-row">
        <div class="container">
            <div class="footer-copyright">
              <div class="site-copyright">
                <p>
                    © 2023 BK Teknoloji - Tüm Hakları Saklıdır. Batuhan KALAÇ.
                </p>
              </div>
              <a href="#">
                <img src="img/markalar/cards.png" alt="">
              </a>
              <div class="footer-menu">
                <ul class="footer-menu-list">
                  <li class="list-item">
                    <a href="#">Gizlilik Politikası</a>
                  </li>
                  <li class="list-item">
                    <a href="#">Şartlar ve Koşullar</a>
                  </li>
                  <li class="list-item">
                    <a href="#">İade Politikası</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
    </div>
</footer>

    <!-- ALT KISIM BİTİŞ -->

    <script src="js/main.js" type="module"></script>
  </body>
</html>
