<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BK Teknoloji</title>
    <!-- GLİDE.JS CSS İÇİN CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
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
                    <a href="index.php" class="menu-link active">ANASAYFA</a>
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
                    <a href="iletisim.php" class="menu-link">İLETİŞİM </a>
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
    

    <!-- SLİDER BAŞLANGIÇ -->
    <section class="slider">
      <div class="slider-elements">
        <div class="slider-item fade">
          <div class="slider-image">
            <img src="img/slider/slider2.png" class="img-fluid" alt="">
        </div>
        <div class="container">
          <p class="slider-title">KIŞ MEVSİMİ İNDİRİMLERİ BAŞLADI</p>
          <h2 class="slider-heading">%50 İndirim!</h2>
          <a href="#kategori" class="btn btn-lg btn-primary">Alışverişe Başla</a>
        </div>
      </div>
      <div class="slider-item fade">
        <div class="slider-image">
          <img src="img/slider/slider3.png" class="img-fluid" alt="">
        </div>
        <div class="container">
          <p class="slider-title">KIŞ MEVSİMİ İNDİRİMLERİ BAŞLADI</p>
          <h2 class="slider-heading">%50 İndirim!</h2>
          <a href="#" class="btn btn-lg btn-primary">Alışverişe Başla</a>
        </div>
      </div>
      <div class="slider-item fade">
        <div class="slider-image">
          <img src="img/slider/slider3.jpg" class="img-fluid" alt="">
          </div>
          <div class="container">
            <p class="slider-title">KIŞ MEVSİMİ İNDİRİMLERİ BAŞLADI</p>
            <h2 class="slider-heading">%50 İndirim!</h2>
            <a href="#" class="btn btn-lg btn-primary">Alışverişe Başla</a>
          </div>
        </div>
        <div class="slider-buttons">
          <button onclick="plusSlide(-1)">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button onclick="plusSlide(1)">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>

        <div class="slider-dots">
          <button class="slider-dot active" onclick="currentSlide(1)">
            <span></span>
          </button>
          <button class="slider-dot" onclick="currentSlide(2)">
            <span></span>
          </button>
          <button class="slider-dot" onclick="currentSlide(3)">
            <span></span>
          </button>
        </div>
      </div>
    </section>
    <!-- SLİDER BİTİŞ -->


    <!-- KATEGORİ ALANI BAŞLANGIÇ -->
    <section class="categories" id="kategori">
      <div class="container">
        <div class="section-title">
          <h2>ÜRÜNLER</h2>
          <p>EN ÇOK ARANAN ÜRÜNLER</p>
        </div>

        <ul class="category-list">
          <li class="category-item">
            <a href="#">
              <img
                src="img/categories/erkeksweat.png"
                class="category-image"
                alt=""
              />
              <span class="category-title">Iphone</span>
            </a>
          </li>
          <li class="category-item">
            <a href="#">
              <img
                src="img/categories/erkeksort.png"
                class="category-image"
                alt=""
              />
              <span class="category-title">Samsung</span>
            </a>
          </li>
          <li class="category-item">
            <a href="#">
              <img
                src="img/categories/erkekayakkabi.png"
                class="category-image"
                alt=""
              />
              <span class="category-title">Xiaomi</span>
            </a>
          </li>
          <li class="category-item">
            <a href="#">
              <img
                src="img/categories/kadinsweat.png"
                class="category-image"
                alt=""
              />
              <span class="category-title">Asus</span>
            </a>
          </li>
          <li class="category-item">
            <a href="#">
              <img
                src="img/categories/kadinsort.png"
                class="category-image"
                alt=""
              />
              <span class="category-title">Monster</span>
            </a>
          </li>
          <li class="category-item">
            <a href="#">
              <img
                src="img/categories/kadinayakkabi.png"
                class="category-image"
                alt=""
              />
              <span class="category-title">Lenovo</span>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- KATEGORİ ALANI BİTİŞ -->


    <!-- ÜRÜNLER KISMI BAŞLANGIÇ -->
    <section class="products">
      <div class="container">
        <div class="section-title">
          <h2>ÖNERİLEN ÜRÜNLER</h2>
          <p>SON SATILAN ÜRÜNLER</p>
        </div>
          <div class="product-wrapper product-carousel">
            <div class="glide__track" data-glide-el="track">
              <ul class="product-list glide__slides" id="product-list"></ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="bi bi-chevron-left"></i>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="bi bi-chevron-right"></i>
              </button>
            </div>
          </div>
      </div>
    </section>
    <!-- ÜRÜNLER KISMI BİTİŞ -->


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

    <!-- scriptler -->
<script src="js/main.js" type="module"></script>
<script src="js/slider.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="js/glide.js" type="module"></script>
  </body>
</html>
