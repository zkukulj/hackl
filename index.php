
<?php
  header('Cache-Control: no-cache,must-revalidate',true);
  ob_start();
  session_start();
  require 'functions/db.php';
  $db  = new DbHandle();
  if( !$db ) {
    echo "Database connection error!";
    exit;
  }
  if (!defined('DOCUMENT_ROOT')) {define('DOCUMENT_ROOT', $_SERVER["DOCUMENT_ROOT"]."/hackaton");}
  echo DOCUMENT_ROOT;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Zagreb Sport</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/scrollbar.css">
  <link rel="stylesheet" href="public/css/chat.css">
  <link rel="stylesheet" href="public/css/leftBorderAnimate.css">
  <link rel="stylesheet" href="public/css/textInOut.css">
  <link rel="stylesheet" href="public/css/main2.css">
  <link rel="stylesheet" href="public/css/objektiGrid.css">
</head>
<body class="glass">
  <div class="chatbox-bubble" onclick="open_chat(this)">💬</div>
  <div class="chatbox w3-animate-right">
  <div class="chatbox-toolbar">
      <div class="chatbox-title">Trebate pomoć? Pitajte nas..</div>
      <div class="chatbox-close" onclick="close_chat(this)">✖</div>
  </div>
      <div class="chatbox-messages" id="chatbox-messages"></div>
      <div class="chatbox-input">
        <textarea class="w3-input" placeholder="Upišite poruku.." maxlength="512" id="chatbox-input" ></textarea>
        <button title="Pošalji" onclick="sendMessage()"><i class="fa fa-paper-plane"></i></button>
      </div>
  </div>
  <!-- <div class="w3-logo-container"></div> -->

  <?php
    require 'content/header.php';
  ?>
  <!-- Scrollers slideshow-->
  <div class="" id="scrollers">
    <span>Ne propustite trenutna događanja..</span>
    <div class="w3-grid grid4">
      <div class="w3-panel w3-scrollers ">
          <header class="w3-container">
            <h6 class="w3-underline fade-text">Stolni tenis</h6>
          </header>
          <div class="content">
            <span class="fade-text">Stolnoteniski turnir za rekreativce</span>
          </div>
          <footer>
            <div class="w3-left">
              <span class="fade-text">01.03.2025</span>
            </div>
            <div class="w3-right">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
              <i class="fa fa-instagram w3-hover-opacity"></i>
              <i class="fa fa-snapchat w3-hover-opacity"></i>
              <i class="fa fa-pinterest-p w3-hover-opacity"></i>
              <i class="fa fa-twitter w3-hover-opacity"></i>
              <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
          </footer>
      </div>
      <div class="w3-panel w3-scrollers ">
          <header class="w3-container">
            <h6 class="w3-underline fade-text">Plivanje</h6>
          </header>
          <div class="content">
            <span class="fade-text">Upis u školu plivanja na bazenu Mladost</span>
          </div>
          <footer>
            <div class="w3-left">
              <span class="fade-text">01.03.2025</span>
            </div>
            <div class="w3-right">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
              <i class="fa fa-instagram w3-hover-opacity"></i>
              <i class="fa fa-snapchat w3-hover-opacity"></i>
              <i class="fa fa-pinterest-p w3-hover-opacity"></i>
              <i class="fa fa-twitter w3-hover-opacity"></i>
              <i class="fa fa-linkedin w3-hover-opacity"></i>
          </div>
          </footer>
      </div>
      <div class="w3-panel w3-scrollers mobileHide">
          <header class="w3-container">
            <h6 class="w3-underline fade-text">Košarka</h6>
          </header>
          <div class="content">
            <span class="fade-text">3 x 3 hakl turnir za rekreativce</span>
          </div>
          <footer>
            <div class="w3-left">
              <span class="fade-text">01.03.2025</span>
            </div>
            <div class="w3-right">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
          </footer>
      </div>
      <div class="w3-panel w3-scrollers mobileHide middleHide">
          <header class="w3-container">
            <h6 class="w3-underline fade-text">Badminton</h6>
          </header>
          <div class="content">
            <span class="fade-text">Badminton treninzi na velesajmu</span>
          </div>
          <footer>
            <div class="w3-left">
              <span class="fade-text">01.03.2025</span>
            </div>
            <div class="w3-right">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
          </footer>
      </div>
    </div>
  </div>

  <!-- About Section Glavni view -->
  <div class="w3-main-container " id="home">
    <div class="grid-container">
      <div class="item2 border-right">
        <button class="w3-btn w3-block leftBorderAnimate ">Nogomet <span class="w3-badge ">5</span></button>
        <button class="w3-btn w3-block leftBorderAnimate ">Košarka <span class="w3-badge">2</span></button>
        <button class="w3-btn w3-block leftBorderAnimate ">Rukomet <span class="w3-badge">2</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Stolni tenis <span class="w3-badge">3</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Tenis <span class="w3-badge">5</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Badminton <span class="w3-badge">1</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Odbojka <span class="w3-badge">2</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Padel <span class="w3-badge">2</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Hokej <span class="w3-badge">1</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Atletika <span class="w3-badge">7</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Plivanje <span class="w3-badge">5</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Vaterpolo <span class="w3-badge">5</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Veslanje <span class="w3-badge">5</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Ragbi <span class="w3-badge">5</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Streličarstvo <span class="w3-badge">5</span></button>
        <button class="w3-btn w3-block leftBorderAnimate">Šah <span class="w3-badge">5</span></button>
      </div>
      
      <div class="w3-text-white item3 padd48">
        <div class="w3-jumbo w3-hide-small">Uživaj u sportu, Zagreb nudi puno</div>
        <div class="w3-xxlarge w3-hide-large w3-hide-medium">Uživaj u sportu, Zagreb nudi puno</div>
        <p class="w3-large w3-hide-small">U zdravom tijelu zdrav duh</p>
        <p class="w3-medium">Pretraži događanja ili filtriraj sportske aktivnosti izbornikom s lijeve strane.</p>
        <p> Isprobaj pretragu po četvrtima na mapi 
          <a onclick="event.preventDefault();document.getElementById('kartaCetvrti').style.display='block'" href="#" class="w3-bold w3-link w3-btn w3-tiny w3-wide">Zagrebačke četvrti</a>
        </p>
        <p>
          Možeš pretraživati i po objektima ..
          <a href="#objects" class="w3-bold w3-link w3-btn w3-tiny w3-wide">Sportski Objekti</a>
        </p>
        <p>
          <div class="w3-half">
            <input class="w3-input inputs" type="text" placeholder="Upiši termin za pretragu..">
          </div>
          <div class="w3-half">
            <button class="w3-button w3-indigo w3-padding-large w3-small w3-color-black w3-border-0">Pretraži</button>
          </div>
        </p>
      </div>
      <div class="item4 border-left sponsorBlock w3-hide-small">
        <h5>Sponzori</h5>
        <div class="container glass2">
          <img src="public/img/sponsor.png" class="sponsorImage" alt="">
          <h6>Sponsor name</h6>
        </div>
        <hr>
        <div class="container glass2">
          <img src="public/img/sponsor.png" class="sponsorImage" alt="">
          <h6>Sponsor name</h6>
        </div>
        <hr>
        <div class="container glass2">
          <img src="public/img/sponsor.png" class="sponsorImage" alt="">
          <h6>Sponsor name</h6>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Događanja -->
  <div class="w3-container glass3 defaultMargins" id="events" style="padding:28px 16px">
      <h3 class="w3-center">Trenutna sportska događanja u gradu Zagrebu</h3>
      <hr>
      <!-- Događanje 1 za datum -->
      <h2 class="w3-center w3-color" >01.05.2025</h2>

      <div class="w3-container" style="padding:28px 16px">
        <div class="w3-panel w3-scrollers w3-leftbar w3-rightbar w3-border-black w3-margin-top">
          <header class="w3-container">
          <h2>Stolni tenis</h2>
            <h3>Stolnoteniski turnir za rekreativce i sve stolnoteniske entuzijaste</h3>
          </header>
          <div class="w3-container">
            <p>Poštovani igrači, 
              pozivamo vas na idući STCZ turnir u nedjelju, 01.05.2025. s početkom od 18 sati. 
              (Velesajam, paviljon 6, prvi kat)...
            </p>
          </div>
        </div>
      </div>
        <!-- Događanje 2 za datum -->
      <div class="w3-container" style="padding:28px 16px">
        <div class="w3-panel w3-scrollers w3-leftbar w3-rightbar w3-border-black w3-margin-top">
          <header class="w3-container">
          <h2>Plivanje</h2>
            <h3>Upis u školu plivanja na bazenu Mladost</h3>
          </header>
          <div class="w3-container">
            <p>Poštovani plivači, 
              pozivamo vas da se upišete u školu plivanja 01.05.2025. od 18 do 21 sat. 
              u prostorijama Plivačkog kluba Mladost...
            </p>
          </div>
        </div>
      </div>

      <hr>
      <!-- Događanje 1 za datum -->
      <h2 class="w3-center w3-color" >03.05.2025</h2>

      <div class="w3-container" style="padding:28px 16px">
        <div class="w3-panel w3-scrollers w3-leftbar w3-rightbar w3-border-black w3-margin-top">
          <header class="w3-container">
          <h2>Stolni tenis</h2>
            <h3>Stolnoteniski turnir za rekreativce i sve stolnoteniske entuzijaste</h3>
          </header>
          <div class="w3-container">
            <p>Poštovani igrači, 
              pozivamo vas na idući STCZ turnir u nedjelju, 01.05.2025. s početkom od 18 sati. 
              (Velesajam, paviljon 6, prvi kat)...
            </p>
          </div>
        </div>
      </div>
        <!-- Događanje 2 za datum -->
      <div class="w3-container" style="padding:28px 16px">
        <div class="w3-panel w3-scrollers w3-leftbar w3-rightbar w3-border-black w3-margin-top">
          <header class="w3-container">
            <h2>Plivanje</h2>
            <h3>Upis u školu plivanja na bazenu Mladost</h3>
          </header>
          <div class="w3-container">
            <p>Poštovani plivači, 
              pozivamo vas da se upišete u školu plivanja 01.05.2025. od 18 do 21 sat. 
              u prostorijama Plivačkog kluba Mladost...
            </p>
          </div>
        </div>
      </div>

  </div>

  <!-- Modal za kolačiće-->
  <div id="modalKolacici" class="w3-modal w3-color w3-backcolor w3-animate-zoom">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" onclick="this.parentElement.style.display='none'" title="Zatvori">×</span>
    <div class="w3-modal-content w3-center w3-transparent w3-padding-64">
      <p>Izjava o kolačićima</p>
      <p>Izjava o kolačićima (Cookie policy)
      Kako bismo vam pružili najbolje iskustvo naše stranice te kako bi stranica radila ispravno, ova stranica na vaše računalo sprema malu količinu informacija (cookies - kolačići). 
      Korištenjem stranica pristajete na uporabu kolačića. Blokiranjem kolačića i dalje možete pregledavati stranicu, no neke njezine funkcionalnosti neće Vam biti dostupne.</p>

      <p>Što je kolačić?</p>
      <p>Kolačić je informacija spremljena na Vaše računalo od strane web-stranice koju posjetite. Kolačići omogućuju stranici da 
      prikaže informacije prilagođene Vašim potrebama. Oni obično spremaju Vaše postavke i postavke za web-stranicu, kao što su preferirani jezik, 
      e-mail adresa ili lozinka. Poslije, kada opet otvorite istu web-stranicu, 
      internetski preglednik šalje natrag kolačiće koji pripadaju toj stranici.</p>

      <p>Isto tako nama omogućuju da mjerimo posjećenost i izvore prometa na našim web-stranicama te sukladno tomu možemo poboljšati 
      performanse na našim stranicama.</p>

      <p>Sve informacije koje kolačići prikupljaju akumuliraju se i anonimne su, a omogućuju nam praćenje učinkovitosti stranice i 
      ne dijele se ni s kojim drugim subjektima.</p>

      <p>Sve ove informacije mogu biti spremljene jedino ako Vi to omogućite, web-stranice ne mogu dobiti pristup informacijama koji 
      im Vi niste dali i ne mogu pristupiti drugim datotekama na Vašem računalu.</p>

      <p>Onemogućavanje kolačića</p>
      <p>Isključivanjem kolačića odlučujete hoćete li dopustiti pohranjivanje kolačića na Vašem računalu. 
      Postavke kolačića mogu se kontrolirati i konfigurirati u Vašem web-pregledniku. 
      Ako onemogućite kolačiće, nećete moći upotrebljavati neke od funkcionalnosti na našim web-stranicama.</p>

      <p>Isključivanje (Opting out)
      Prema zadanim postavkama pretraživanja mrežne stranice posjetitelja prati 
      Google Analytics kako bi se izradili anonimni statistički podaci koji se rabe za unapređenje korisničkog iskustva.</p>

      <p>Nemoj me pratiti preferencije</p>
      <p>Nemoj me pratiti funkcija je koja posjetiteljima omogućuje isključivanje opcije da ih mrežne 
      stranice prate u bilo koju svrhu, uključujući uporabu servisa za analitiku, 
      oglašivačkih mreža i društvenih platformi. Opcije Nemoj me pratiti dostupne su u nizu preglednika, uključujući:

      Firefox,
      Internet Explorer,
      Chrome,
      Safari,
      Opera</p>
      

      <p>ako u svojem pregledniku omogućite opciju Nemoj me pratiti, Google Analytics poštovat će vaš izbor;
      ako ste omogućili opciju Nemoj me pratiti, neće Vas se pratiti. To predstavlja dodatak isključivanja prikupljanja i analize podataka za izradu statističkih podataka za našu web-stranicu;
      ako niste omogućili opciju Nemoj me pratiti, ali odlučite isključiti se, kolačić SugarStone_ignore  bit će pohranjen u Vašem pregledniku. Nijednog posjetitelja s kolačićem SugarStone_ignore Google Analytics neće pratiti;
      ako ste na svojem pregledniku onemogućili sve kolačiće, i dalje ćemo prikupljati neke općenite podatke o Vašem pretraživanju (npr. broj posjetitelja na našoj stranici), ali oni će biti manje precizni i Vaši posjeti neće biti praćeni (ne upotrebljavaju se SugarStone kolačići)
      Više o kolačićima možete naći ovdje:

      Cookies -  https://www.aboutcookies.org/.</p>
    </div>
  </div>

  <!-- Modal za događanja po četvrtima-->
  <div id="kartaCetvrti" class="w3-modal w3-animate-zoom w3-white w3-color" >
    <span class="w3-button w3-large w3-black w3-padding-small w3-display-topright" onclick="closeMap(this)" title="Zatvori">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-transparent" style="width: 100%;position:relative;">
      <div class="modalGrid" >
        <div>
            <img src="public/img/gradskeCetvrti.png" usemap="#image-map" >
            <map id="image-map" name="image-map">
                <area alt="Brezovica" title="Brezovica" data="area17" coords="178,314,159,307,145,293,129,278,118,267,108,274,106,283,95,281,86,287,72,310,55,299,44,302,36,297,32,287,16,293,10,313,11,327,15,342,29,349,42,359,56,365,71,371,84,376,93,383,99,392,111,402,117,412,114,421,126,427,144,411,152,399,150,386,157,375,164,361,164,351,171,328,164,330,164,340" shape="poly">
                <area alt="Sesvete" title="Sesvete" data="area16" coords="356,227,316,209,279,199,276,189,266,176,262,166,262,158,276,152,272,136,263,128,274,122,268,114,259,99,252,93,254,72,259,63,246,54,236,42,250,27,263,21,273,26,284,22,288,8,300,11,307,7,318,8,321,17,327,24,330,35,332,45,334,60,336,70,340,76,343,86,337,96,350,99,356,98,364,114,373,127,379,134,374,141,380,150,384,158,372,158,364,168,360,178" shape="poly">
                <area alt="Novi Zagreb - zapad" title="Novi Zagreb - zapad" data="area7" coords="180,312,165,308,151,302,141,295,132,282,124,270,115,265,105,275,105,281,94,279,97,268,92,260,84,258,80,250,70,249,60,247,62,242,48,238,50,230,56,227,61,222,56,217,54,202,61,208,65,215,73,222,82,228,92,227,100,225,108,229,116,236,127,240,136,242,145,240,150,232,159,227,168,224,176,223,177,241,177,253,184,256,180,262,182,268,176,273,183,278,189,281,196,280,206,288,205,296,204,302,194,301,186,305" shape="poly">
                <area alt="Trešnjevka - jug" title="Trešnjevka - jug" data="area9" coords="103,213,100,219,98,225,106,227,112,235,124,240,135,243,145,237,155,227,156,217" shape="poly">
                <area alt="Novi Zagreb – istok" title="Novi Zagreb – istok" data="area6" coords="176,222,184,222,196,226,225,251,223,259,215,260,209,269,207,278,206,288,195,280,178,274,182,267,184,257,177,254" shape="poly">
                <area alt="Stenjevec" title="Stenjevec" data="area13" coords="64,215,71,208,74,196,81,194,104,196,130,198,117,212,104,212,98,224,81,227" shape="poly">
                <area alt="Trešnjevka – sjever" title="Trešnjevka – sjever" data="area8" coords="132,198,137,198,146,196,153,198,160,199,164,205,157,217,117,213" shape="poly">
                <area alt="Trnje" title="Trnje" data="area3" coords="198,199,209,212,196,214,198,220,198,226,183,221,170,222,154,226,157,218,164,204,181,204" shape="poly">
                <area alt="Donji grad" title="Donji grad" data="area1" coords="156,194,160,200,164,204,180,204,196,198,193,192,182,192,177,196,166,193" shape="poly">
                <area alt="Peščenica – Žitnjak" title="Peščenica – Žitnjak" data="area5" coords="225,252,233,257,240,255,246,249,258,237,266,229,274,224,279,216,285,219,292,222,298,214,296,204,277,198,250,203,235,205,236,194,232,186,225,187,215,189,208,190,201,189,195,194,210,211,197,215,198,223,200,229" shape="poly">
                <area alt="Donja Dubrava" title="Donja Dubrava" data="area12" coords="223,180,233,176,240,173,255,175,262,175,268,178,275,188,277,195,260,200,246,203,235,205,236,194,232,185,224,186" shape="poly">
                <area alt="Gornja Dubrava" title="Gornja Dubrava" data="area11" coords="231,42,229,50,233,55,232,65,233,73,227,81,227,93,227,102,221,108,219,116,211,120,214,128,213,139,216,150,216,159,220,167,221,180,240,173,261,174,264,166,267,154,276,151,273,137,264,133,263,126,273,124,272,117,265,112,261,102,252,93,254,75,256,65,250,61,246,53,236,44" shape="poly">
                <area alt="Podsljeme" title="Podsljeme" data="area15" coords="128,104,136,103,142,98,148,91,154,90,163,82,169,80,172,73,181,67,192,62,198,55,204,54,212,51,218,48,223,43,230,43,229,49,232,55,232,66,232,73,227,80,227,90,226,97,226,103,220,109,218,116,210,120,215,126,212,135,214,144,217,151,216,160,210,152,204,145,200,138,190,136,182,137,176,140,175,147,172,154,163,153,153,151,153,158,145,163,143,155,145,145,144,135,142,124,138,116,131,113" shape="poly">
                <area alt="Maksimir" title="Maksimir" data="area4" coords="175,143,180,146,180,153,184,159,186,166,187,172,189,177,192,184,191,191,198,191,205,188,212,190,224,187,223,180,220,163,212,158,209,150,201,138,191,136,184,137" shape="poly">
                <area alt="Gornji grad – Medveščak" title="Gornji grad – Medveščak" data="area2" coords="154,158,155,165,157,174,159,179,155,188,157,194,169,192,177,194,187,192,193,192,190,178,186,171,186,162,183,155,181,146,176,143,173,156,163,153,154,150" shape="poly">
                <area alt="Črnomerec" title="Črnomerec" data="area10" coords="127,103,119,110,114,116,111,125,114,132,117,139,114,144,109,151,109,163,113,158,118,162,117,172,120,178,118,187,123,195,144,198,157,197,154,189,157,179,155,166,154,158,147,163,144,156,146,144,144,125,139,116,132,115" shape="poly">
                <area alt="Podsused – Vrapče" title="Podsused – Vrapče" data="area14" coords="121,105,111,107,107,112,102,117,99,123,97,131,93,136,88,140,84,144,78,146,71,145,68,152,64,156,59,162,51,159,46,163,46,170,48,179,49,186,53,192,56,200,62,208,65,213,73,205,76,192,84,192,101,194,123,194,118,183,119,175,116,169,116,159,110,161,107,154,111,146,117,140,114,131,113,123,113,115" shape="poly">
            </map>
        </div>
        <div class="w3-hide-small">
          <ul class="w3-ul">
                  <li>1. Donji grad</li>
                  <li>2. Gornji grad – Medveščak</li>
                  <li>3. Trnje</li>
                  <li>4. Maksimir</li>
                  <li>5. Peščenica – Žitnjak</li>
                  <li>6. Novi Zagreb – istok</li>
                  <li>7. Novi Zagreb – zapad</li>
                  <li>8. Trešnjevka – sjever</li>
                  <li>9. Trešnjevka – jug</li>
                  <li>10. Črnomerec</li>
                  <li>11. Gornja Dubrava</li>
                  <li>12. Donja Dubrava</li>
                  <li>13. Stenjevec</li>
                  <li>14. Podsused – Vrapče</li>
                  <li>15. Podsljeme</li>
                  <li>16. Sesvete</li>
                  <li>17. Brezovica</li>
                </ul>
        </div>
        <div class="w3-hide-small">
          Lista događanja
        </div>
      </div>
      <div class="w3-hide-medium w3-hide-large">
          <ul class="w3-ul ulMobile w3-col s6">
              <li>1. Donji grad</li>
              <li>2. Gornji grad Medveščak</li>
              <li>3. Trnje</li>
              <li>4. Maksimir</li>
              <li>5. Peščenica – Žitnjak</li>
              <li>6. Novi Zagreb – istok</li>
              <li>7. Novi Zagreb – zapad</li>
              <li>8. Trešnjevka – sjever</li>
            </ul>
            <ul class="w3-ul ulMobile w3-col s6" >
              <li>9. Trešnjevka – jug</li>
              <li>10. Črnomerec</li>
              <li>11. Gornja Dubrava</li>
              <li>12. Donja Dubrava</li>
              <li>13. Stenjevec</li>
              <li>14. Podsused – Vrapče</li>
              <li>15. Podsljeme</li>
              <li>16. Sesvete</li>
              <li>17. Brezovica</li>
            </ul>
        </div>
    </div>
  </div>

  <!-- Modal za događanja po objektima-->
  <div id="objektiModal" class="w3-modal w3-animate-zoom w3-white w3-color" >
    <span class="w3-button w3-large w3-black w3-padding-small w3-display-topright" onclick="closeMap(this)" title="Zatvori">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-transparent" style="width: 100%;position:relative;">

    </div>
  </div>

  <!-- Objekti-->
  <div class="w3-container glass3" id="objects">
    <hr>
    <h3 class="w3-center">SPORTSKI OBJEKTI</h3>
    <div id="objektiHolder" style="margin-top:48px" class="glass3">
    </div>
  </div>

  <!-- Contact Section trenutno skrivnemo-->
  <div class="w3-container glass3" style="padding:28px 16px" id="contact">
    <hr>
    <h3 class="w3-center">KONTAKT</h3>
    <p class="w3-center w3-large">Kontaktirajte nas, odgovoriti ćemo najbrže što možemo!</p>
    <div style="margin-top:48px" class="glass3">
      <form action="#" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> POŠALJI
          </button>
        </p>
      </form>
    </div>
  </div>
  <hr>
  <!-- Footer -->
  <footer class="w3-center w3-padding-64 glass3 defaultMargins">
    <a href="#home" class="w3-button w3-indigo"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <hr>
    <div class="w3-grid grid3">
    <div class="w3-xlarge w3-section">
      <h5>Podijeli sa društvom</h5>
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <div>
      <p>Powered by <a href="#" title="SugarStone" target="_blank" class="w3-hover-text-green">SugarStone</a></p>
    </div>
    <div>
      <button onclick="document.getElementById('modalKolacici').style.display='block'" class="w3-button w3-indigo">O kolačićima</button>
    </div>

    </div>
  </footer>
 
  <script>
  // Tu ćemo spremiti sve evente
    var main_Object = {
      events: []
    };
    // Modal Image Gallery N/A
    const onClick = (element) => {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      let captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // ZA sidebar koji se nalazi u content/header/
    let mySidebar = document.getElementById("mySidebar");

    const w3_open = () => {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }
    // Close the sidebar with the close button
    const w3_close = () => {
        mySidebar.style.display = "none";
    }
    // END SIDEBAR
    // TOP SLIDESHOW TEXT FADE IN OUT
    const fadeOutText = () => {
      const textElements = document.querySelectorAll('.fade-text');
      textElements.forEach(element => {
        element.classList.add('fade-out-text');
      });
      //fadeInText();
    }
    const fadeInText = () => {
      const textElements = document.querySelectorAll('.fade-text');
      textElements.forEach(element => {
        element.classList.remove('fade-out-text');
      });
    }
    // Trigger fade-out teksta after 3 seconds
    setTimeout(fadeOutText, 3000);
    // END TOP SLIDESHOW TEXT FADE IN OUT
    // ZA SPORTSKE DOGAĐAJE BLOCK BUILDER
    const buildEventContent = (event) => {
      
    }

    // ASYNC PREUZIMANJE PODATAKA 
    if(typeof(Worker) !== "undefined") {
      if(typeof(w) == "undefined") {
        w  = new Worker("public/js/getEvents.js");
        w2 = new Worker("public/js/getProperties.js");
        w.postMessage({"location":location.origin});
        w2.postMessage({"location":location.origin});
      }
    }
    w2.onmessage = function(event) {
      if (event.data.rez.length > 0) {
        document.getElementById("objektiHolder").innerHTML = "";
        document.getElementById("objektiHolder").innerHTML = event.data.rez;
      } else {
        console.log("No data received from worker.");
      }
    }
    w.onmessage = function(event) {
      if(event.data.rez.length > 0) {
        main_Object.events = event.data.rez;
        event.data.rez.forEach(e => {
          buildEventContent(e);
        });
      }
    }
    // END ASYNC PREUZIMANJE PODATAKA
  </script>
  <script src="public/js/chat.js"></script>
  <script src="public/js/mapSpots.js"></script>
  <script src="public/js/acctoolbar.min.js"></script>
  <script>
  // Accessibility tools script
    window.onload = function() {
      window.micAccessTool = new MicAccessTool({
        link: 'http://your-awesome-website.com/your-accessibility-declaration.pdf',
        contact: 'mailto:your-mail@your-awesome-website.com',
        buttonPosition: 'left', // default is 'left'
        forceLang: 'en-EN' // default is 'en' may be 'he-IL', 'ru-RU', or 'fr_FR'
      });
    }
  </script>
</body>
</html>
