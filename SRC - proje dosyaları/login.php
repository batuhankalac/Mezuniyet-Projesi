
<?php
include("baglanti.php");


$username_err = "";
$parola_err = "";

if(isset($_POST["giris"])){
/* KULLANICI ADI DOĞRULAMA SORGUSU */
    if(empty($_POST["kullaniciadi"])){

        $username_err = "Kullanıcı adı boş bırakılamaz!";

    } else {
            $username = $_POST["kullaniciadi"];
        }


        /* ŞİFRE SORGUSU */

if(empty($_POST["parola"])){
    $parola_err = "Şifre alanı boş bırakılamaz!";
} else if(strlen($_POST["parola"])<4){

    $username_err = "Şifre en az 4 karakterden oluşmalıdır!";
} else {
    $parola = $_POST["parola"];;
}



if(isset($username) && isset($parola)){

    $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
    $calistir = mysqli_query($baglanti, $secim);
    $kayitsayisi = mysqli_num_rows($calistir);

    if($kayitsayisi > 0){

        $ilgilikayit = mysqli_fetch_assoc($calistir);
        $hashlisifre = $ilgilikayit["parola"];

        if(password_verify($parola, $hashlisifre)){

            session_start();
            $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
            $_SESSION["email"] = $ilgilikayit["email"];
            header("location:profile.php");

        } else {

            echo '<div class="alert alert-danger" role="alert">
        Şifre Yanlış!
      </div>';

        }
        
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Kullanıcı Adı Hatalı!
      </div>';
    }

    mysqli_close($baglanti);

}

}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Girişi</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
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


<section class="account-page">
  <div class="container">
    <div class="account-wrapper">
      <div class="account-column">
        <h2>Giriş Paneli</h2>
                <form action="login.php" method="POST">
                    <div>
                        <label> 
                             <span> Kullanıcı Adı:</span>
                             <input type="text" class="form-control
            
            <?php
                if(!empty($username_err)){
                    echo "is-invalid";
                }
            ?>
            
            " name="kullaniciadi" placeholder="Kullanıcı Adınız">
            <div id="validationServer03Feedback" class="invalid-feedback">

                <?php 
                echo $username_err;
                ?>    
                </div>
                      </label>
                    </div>

          <div>
            <label>
              <span> Şifre:</span>
              <input type="password" class="form-control
            
            <?php
                if(!empty($parola_err)){
                    echo "is-invalid";
                }
            ?>
            
            " name="parola" placeholder="Şifreniz">
            <div id="validationServer03Feedback" class="invalid-feedback">
            <?php 
                echo $parola_err;
                ?>     
                </div>
            </label>
            </div>
            <button type="submit" class="btn btn-sm btn-primary" name="giris"><b>Giriş Yap</b></button>
            <button class="btn btn-sm">Henüz üye değil misin? <a href = "kayit.php">Kayıt Ol!</a></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="js/glide.js" type="module"></script>
  </body>
</html>