<?php

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $useremail = $_POST['email'];
    $message = $_POST['msg'];
    $conn = mysqli_connect("localhost", "", "", "");
    $sql = "INSERT INTO reports (email, title, message)
					VALUES ('$useremail', '$title', '$message')";
    $run_query = mysqli_query($conn, $sql);

    if($run_query) {
        
    } else {
        echo "Bir Hata Oluştu!";
    };
};
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta name="description" content="TORBACI">
  <meta name="author" content="torbacı huseyın">
  <meta name="keywords" content="huseyin, torbacihüseyin, torbaci, torbacı, huseyın, nomee6, nomee6.xyz, nomee6 xyz, nomee6xyz">
  <meta name="msapplication-tap-highlight" content="no">
  <link href="assets/pp.png" rel="shortcut icon" />
  <meta property="og:title" content="Torbaci Huseyin" />
  <meta property="og:description" content="Torbaci Huseyinin Kişisel Websitesi." />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:url" content="https://nomee6.xyz" />
  <meta property="og:site_name" content="TORBACİ HUSEYİN" />
  <meta property="og:image" content="https://nomee6.xyz/assets/A.png" />
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/pp.png">
  <title>TORBACI HUSEYIN</title>
  <link href="./main.css" rel="stylesheet"></head>
		<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   
      ym(86917472, "init", {
           clickmap:true,
           trackLinks:true,
           accurateTrackBounce:true,
           webvisor:true,
           ecommerce:"dataLayer"
      });
   </script>
   <noscript><div><img src="https://mc.yandex.ru/watch/86917472" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
   <!-- /Yandex.Metrika counter -->

   <!-- Matomo -->
   <script>
     var _paq = window._paq = window._paq || [];
     /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
     _paq.push(['trackPageView']);
     _paq.push(['enableLinkTracking']);
     _paq.push(['enableHeartBeatTimer']);
     (function() {
       var u="https://matomo.aliyasin.org/";
       _paq.push(['setTrackerUrl', u+'matomo.php']);
       _paq.push(['setSiteId', '5']);
       var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
       g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
     })();
   </script>
<!-- End Matomo Code -->
<script src="https://browser.sentry-cdn.com/6.13.3/bundle.min.js"></script>

<script>
  window.addEventListener('load', function () {
      var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
      var source = audioCtx.createBufferSource();
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'https://nomee6.xyz/assets/amasis.mp3');
      xhr.responseType = 'arraybuffer';
      xhr.addEventListener('load', function (r) {
          audioCtx.decodeAudioData(
                  xhr.response, 
                  function (buffer) {
                      source.buffer = buffer;
                      source.connect(audioCtx.destination);
                      source.loop = true;
                  });
          source.start(0);
      });
      xhr.send();
  });
</script>
<body>
<header>
  <nav class="navbar navbar-default active">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Gezinti Çubuğunu Aç</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.php" title="">
          <img src="./assets/icon.png" class="navbar-logo-img" alt="">
          TORBACİ HUSEYIN
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./index.php" title="">Ana Sayfa</a></li>
          <li><a href="#services" title="" data-target="#services" aria-expanded="false">Hizmetler</a></li>
          <li><a href="old/" title="">Eski Site</a></li>
          <li>
            <p>
              <a href="./donate.html" class="btn btn-default navbar-btn" title="">Bağış Yap</a>
            </p>
          </li>

        </ul>
      </div> 
    </div>
  </nav>
</header>

  <div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>TORBACİ HUSEYİN</h1>
          <p>Websiteme Hoşgeldin dostum. Burası tamamen zevk amaçlı yapılmıştır eğlenmene bak</p>
          <br>
          <a href="#services" class="btn btn-default btn-lg" title="" data-target="#services" aria-expanded="false">Tüm Hizmetlerimizi Keşfet</a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="text-center">
            <h2>Neden Böyle bir websitesi var?</h2>
            <p>24 Temmuz 2021 tarihinde nedeni bilinmeyen bir şekilde tamamen eğlence amaçlı olarak bu websitesi kurulmuştur. Kısacası Buranın açılma sebebi bilinmiyor. </p>
          </div>
       </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="text-center">
            <h2>Resmi Açıklama</h2>
            <p>Bu websitesi tamamen mizah amaçlı olup, hiçbir kurum, kuruluş, kişi veya örgütü hedef almamaktadır. Bunu göz önünde bulundurarak hareket ediniz.</p>
          </div>
       </div>
      </div>
    </div>
  </div>

  <div id="services" class="section-container">
    <div class="container">
      <div class="row">      
          <div class="col-xs-12">
            <div id="carousel1" class="carousel carousel-fade slide" data-ride="carousel">
            
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img class="img-responsive" src="./assets/eba.png" alt="First slide">
                        <div class="carousel-caption card-shadow reveal">
                          
                          <h3>NOMEE6 EĞİTİM</h3>
                          <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Önceki</span>
                          </a>
                          <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Sonraki</span>
                          </a>
                          <p>
                            Gençlere çok daha iyi bir gelecek hazırlamak adına elimizden geleni yaptığımız EBA Alternatifi ve öğrencileri sınavlara ve hayata daha iyi hazırladığımız bu hizmetimizi en kısa sürede denemenizi tavsiye ediyoruz. 
                          </p>
                          <a href="https://egitim.nomee6.xyz/" class="btn btn-primary" title="">
                            NOMEE6 Eğitimi Keşfet
                          </a>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="./assets/ayp.png" alt="First slide">
                        <div class="carousel-caption card-shadow reveal">

                          <h3>Allah Yönetim Paneli</h3>
                            <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                              <i class="fa fa-chevron-left" aria-hidden="true"></i>
                              <span class="sr-only">Önceki</span>
                            </a>
                            <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                              <i class="fa fa-chevron-right" aria-hidden="true"></i>
                              <span class="sr-only">Sonraki</span>
                            </a>
                          <p>
                            Allah Yönetim Paneli ile tüm güç sizin elinizde!
                          </p>
                          
                          <p>
                            Allah Yönetim Paneli ile dünyayı yönetebilir, ülkelerin mülteci seviyelerini yönetebilir, kuranı güncelleyebilir ve daha bir çok şeyi yapabilirsiniz. Sadece Dünya değil, Cennet, Cehennem, Dolar ve bankalarıda yönetebilirsiniz. Bütün güç elinizde!
                          </p>
                          <a href="https://ayp.nomee6.xyz" class="btn btn-primary" title="">
                            Allah Yönetim Paneline Git
                          </a>
                        </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="./assets/edevlet.jpg" alt="First slide">
                      <div class="carousel-caption card-shadow reveal">

                        <h3>NOMEE6 EDEVLET</h3>
                          <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Önceki</span>
                          </a>
                          <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Sonraki</span>
                          </a>
                        <p>
                          Nomee6 E-Devlet ile banka hesabınıza erişebilir, paranızı görüntüleyebilir, A-101'den ürün satın alabilirsiniz. 
                        </p>
                        <a href="https://devlet.nomee6.xyz" class="btn btn-primary" title="">
                          E-Devlete Git
                        </a>
                      </div>
                  </div>
                  <div class="item">
                      <img class="img-responsive" src="./assets/iskur.jpg" alt="First slide">
                      <div class="carousel-caption card-shadow reveal">

                        <h3>NOMEE6 İŞKUR</h3>
                          <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Önceki</span>
                          </a>
                          <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Sonraki</span>
                          </a>
                        <p>
                          Nomee6 İŞKUR ile iş bulabilir ve iş hayatına atılabilir veya kendi firmanızı kurup İşveren olabilirsiniz. 
                        </p>
                        <a href="https://iskur.nomee6.xyz" class="btn btn-primary" title="">
                          İŞKUR'a Git
                        </a>
                      </div>
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="./assets/cimer.jpeg" alt="First slide">
                    <div class="carousel-caption card-shadow reveal">

                      <h3>NOMEE6 CİMER</h3>
                        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                          <i class="fa fa-chevron-left" aria-hidden="true"></i>
                          <span class="sr-only">Önceki</span>
                        </a>
                        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          <span class="sr-only">Sonraki</span>
                        </a>
                      <p>
                        NOMEE6 Cimere rahatsız olduğunuz kişileri şikayet edebilir. Dolandırıcı şirketleri şikayet edebilirsiniz.
                      </p>
                      <a href="https://cimer.nomee6.xyz" class="btn btn-primary" title="">
                        Cimere Git
                      </a>
                    </div>
                </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container text-center">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-12">
          <h2>Geliştiriciler</h2>
          <p>Bu site geliştirilirken emeği geçen kişilerin bulunduğu bir tablodur.</p>
        </div>  
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <img src="./assets/yakkl.jpg" alt="" class="reveal img-responsive reveal-content image-center">
          <h3>Ali Yasin Yeşilyaprak</h3>
          <h4>Developer</h4>
          <p>Merhaba! Ben bu sitenin geliştiricisiyim. </p>
          <p>
            <a href="https://github.com/aliyasiny65" class="social-round-icon fa-icon" title="">
              <i class="fa fa-github" aria-hidden="true"></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  
    <div class="section-container">
    <div class="container">
      <div class="row">      
          <div class="col-xs-12">
            <div id="carousel2" class="carousel carousel-fade slide" data-ride="carousel">
            
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img class="img-responsive" src="./assets/bosluk.png" alt="First slide">
                        <div class="carousel-caption card-shadow reveal">
                          
                          <video width="280" height="240" controls loop>
                            <source src="assets/neredenereye.mp4" type="video/mp4">
                          </video>
                          <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Önceki</span>
                          </a>
                          <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Sonraki</span>
                          </a>
                        </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="./assets/bosluk.png" alt="First slide">
                      <div class="carousel-caption card-shadow reveal">
                        
                        <video width="280" height="240" controls loop>
                          <source src="assets/kiralrte.mp4" type="video/mp4">
                        </video>
                        <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
                          <i class="fa fa-chevron-left" aria-hidden="true"></i>
                          <span class="sr-only">Önceki</span>
                        </a>
                        <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          <span class="sr-only">Sonraki</span>
                        </a>
                      </div>
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="./assets/bosluk.png" alt="First slide">
                    <div class="carousel-caption card-shadow reveal">
                      
                      <video width="280" height="240" controls loop>
                        <source src="assets/osbir.mp4" type="video/mp4">
                      </video>
                      <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        <span class="sr-only">Önceki</span>
                      </a>
                      <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <span class="sr-only">Sonraki</span>
                      </a>
                    </div>
                </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  
  <div class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="section-container-spacer">
            <h2 class="text-center">İletişime Geç</h2>
            <p class="text-center">Hata/Bug bildirmek veya Öneri vermek için kullanabilirsiniz.</p>
          </div>
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content" method="POST">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="E-Posta">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="title" placeholder="Başlık">
                    </div>
                    <div class="form-group">
                      <textarea name="msg" class="form-control" rows="3" placeholder="İletiniz"></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Gönder</button>
                  </div>
                  <div class="col-md-5">
                    <ul class="list-unstyled address-container">
                      <li>
                        <span class="fa-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="2" /><polyline points="3 7 12 13 21 7" /></svg>
                        </span>
                        torbacihuseyin@nomee6.xyz
                      </li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
  
              <section class="section-container">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center">Mobil Uygulama</h2>
                        <p class="text-center">Mobil Uygulamamız ile birçok servisimize daha kolay erişebilir çevrimdışı içerikler ile internetiniz yokkende eğlenebilirsiniz. (Geliştirme aşamasındadır.)</p>
                        <div class="col-md-5">
                            <a href="apks/nomee6-mobile1.0.apk" class="btn btn-primary"><img src="assets/apk.png" alt="">APK İndir</a>
                        </div>
                    </div>

                    <img src="assets/mobilapp.png" alt="" class="reveal img-responsive reveal-content image-center">
                </div>
            </section>
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navbarFixedTopAnimation();
  });
</script>

<footer class="footer-container white-text-container">
  <div class="container">
    <div class="row">

     
      <div class="col-xs-12">
        <h3>TORBACİ HUSEYİN</h3>

        <div class="row">
          <div class="col-xs-12 col-sm-7">
            <p><small>NOMEE6 Inc. & Nomee6 Devlet Inc.</small>
            </p>
          </div>
          <div class="col-xs-12 col-sm-5">
            <p class="text-right">
              <a href="https://github.com/aliyasiny65/nomee6xyz" class="social-round-icon white-round-icon fa-icon" title="">
                <i class="fa fa-github" aria-hidden="true"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
    scrollRevelation('.reveal');
  });
</script>
<script type="text/javascript" src="./main.js"></script>
</body>
</html>
