<?php
session_start(); // Oturum başlatılır.

// Veritabanı bağlantısı
$servername = "127.0.0.1"; // Yerel sunucu adresi
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$dbname = "safakyapi1db"; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Giriş kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $pass = $_POST["password"];
    
    // Kullanıcı bilgilerini veritabanında kontrol et
    $sql = "SELECT * FROM kullanicilar WHERE name_ = ? AND password_ = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Giriş başarılı
        $_SESSION["username"] = $name;
        header("Location: stok_takip.php");
        exit;
    } else {
        // Giriş başarısız
        $error = "Kullanıcı adı veya şifre yanlış!";
    }
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Şafak Yapı , Parke , Süpürgelik , Showroom , Uygun , 
    Ucuz , Dayanıklı ,Suya Dayanıklı , Suya Dayanıklı Parke , Her Renk Parke">
    <meta name="description" content="Şafak Yapı ile evinize sadece parke değil huzur ve 
    şıklık getirin.">
    <meta author="Mustafa Esat Yücel">
    <title>ŞAFAK YAPI</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="index.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.21.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
   
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Sayfa 2">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">    <link rel="stylesheet" href="style.css">

  <style>

     /* Form Konteyneri */
     
     .panel {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
            justify-content: center;
            margin: auto;
        }

        /* Başlık */
        .panel h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Giriş Alanları */
        .panel label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
            font-weight: bold;
        }

        .panel input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Giriş Butonu */
        .panel button {
            width: 100%;
            padding: 10px;
            background-color:rgb(56, 56, 56);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .panelbutton:hover {
            background-color:rgb(78, 78, 78);
        }

        /* Hata Mesajı */
        .panel .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
        
        header{
          padding-bottom: 100px;
        }
        
  </style>

  
</head>
  <body data-home-page="Sayfa-2.html" data-home-page-title="ŞAFAK YAPI" data-path-to-root="/" data-include-products="false" class="u-body u-xl-mode" data-lang="tr"><header class="u-clearfix u-header u-header" id="sec-0bfd"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="index.html" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="subemiz.html" style="padding: 10px 20px;">Şubemiz</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="hakkinda.html" style="padding: 10px 20px;">Hakkında</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="http://localhost/phpmyadmin/safakyapi1/iletisim.php" style="padding: 10px 20px;">İletişim</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="projelerimiz.html" style="padding: 10px 20px;">Projelerimiz</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="http://localhost/phpmyadmin/safakyapi1/login.php" style="padding: 10px 20px;">Üye Girişi</a>
                </li></ul>
          </div>
          <hr>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="subemiz.html">Şubemiz</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="hakkinda.html">Hakkında</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/phpmyadmin/safakyapi1/iletisim.php">İletişim</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="projelerimiz.html">Projelerimiz</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/phpmyadmin/safakyapi1/login.php">Üye Girişi</a>
                    </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>
    <div class="panel" id="panel">
    <h2>Admin Paneli Girişi</h2>
    <form  class="girispanel" id="girispanel" method="POST" action="">
        <label for="username">Kullanıcı Adı:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Şifre:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Giriş Yap</button>
    </form>
    <?php
    // Hata mesajını göster
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
    </div>
    


       
    



    <footer class="u-align-center u-clearfix u-container-align-center u-footer u-grey-80 u-footer" id="sec-8ac6"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"></p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text">
        <span>Producer of this site</span>
        <a class="u-link" href="" target="_blank" rel="nofollow">
          <span>Mustafa Esat Yücel</span>
        </a>
      </p>
    </section>
  
    <script src="script.js"></script>
</body></html>