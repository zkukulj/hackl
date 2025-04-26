<?php
// header('Cache-Control: no-cache,must-revalidate',true);
// ob_start();
// session_start();
// require 'functions/db.php';
// $db  = new DbHandle();
// if( !$db ) {
//   echo "Database connection error!";
//   exit;
// }
// if (!defined('DOCUMENT_ROOT')) {define('DOCUMENT_ROOT', $_SERVER["DOCUMENT_ROOT"]."/hackaton");}
// #12457b
// #54af3c
?>
<!DOCTYPE html>
<html>

<head>
  <title>Sport Zagreb</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/main_z.css?v=<?= hash_file('md5', 'public/css/main_z.css') ?>" />
  <link rel="stylesheet" href="public/css/scrollbar.css">
  <link rel="stylesheet" href="public/css/chat.css">
  <!-- <link rel="stylesheet" href="public/css/leftBorderAnimate.css"> -->
  <link rel="stylesheet" href="public/css/topEventsSlideshow.css">
  <link rel="stylesheet" href="public/css/objektiGrid.css">
  <link rel="stylesheet" href="public/css/flatpickr.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/material_blue.css">
  <link rel="stylesheet" type="text/css" href="public/css/reminderForEvents.css">

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="glass">
  <div class="chatbox-bubble" onclick="open_chat(this)">💬</div>
  <div class="chatbox w3-animate-right">
    <div class="chatbox-toolbar">
      <div class="chatbox-title">Virtualni pomoćnik, vama na usluzi!</div>
      <div class="chatbox-close" onclick="close_chat(this)">✖</div>
    </div>
    <div class="chatbox-messages" id="chatbox-messages"></div>
    <div class="chatbox-input">
      <textarea class="w3-input" placeholder="Upišite poruku.." maxlength="512" id="chatbox-input"></textarea>
      <button title="Pošalji" id="sendMsgBtn" onclick="sendMessage()"><i class="fa fa-paper-plane"></i></button>
    </div>
  </div>
  <?php
  require 'content/header.php';
  ?>
  <!-- Popup Prozor -->
  <div id="reminder-popup">
    <div class="w3-center">
      <h2>Email podsjetnik za sportski događaj</h2>
    </div>
    <select id="events-select" class="hidden">
      <option>Učitavam događaje...</option>
    </select>
    <div class="w3-center">
      <hr>
      <h2 id="popupEventDate"></h2>
      <h3 id="popupEventTitle"></h3>
      <hr>
    </div>
    <label>
      <p class="label-title">Koliko dana prije želiš podsjetnik:</p>
      <select id="reminder-days">
        <option value="1">1 dan</option>
        <option value="2">2 dana</option>
        <option value="3">3 dana</option>
        <option value="4">4 dana</option>
        <option value="5">5 dana</option>
      </select>
    </label>
    <input
      type="email"
      id="user-email"
      placeholder="Unesi svoj email"
      required />

    <button id="save-reminder">Podsjeti me</button>
    <button id="close-popup">❌</button>
  </div>

  <main class="h-[70vh] py-20">
    <div class="container max-w-8xl mx-auto flex flex-col items-center justify-center">
      <div class="w-2/3 md:w-1/3 lg:w-1/4 xl:w-2/5 mb-8">
        <img src="public/img/logo-sport-zagreb.svg?v=2" alt="" class="w-full" />
      </div>

      <hgroup class>
        <h1 class="text-[#54af3c] !text-7xl font-bold">Uživaj u sportu</h1>
        <!-- <h2 class="!text-5xl text-center !mt-6">Zagreb nudi puno</h2> -->
      </hgroup>

      <form action="" class="w-3/4 flex items-center justify-center mt-8 relative rounded-2xl overflow-hidden border border-[#12457b]">
        <input type="text" class="w-full relative outline-none border-none p-4" placeholder="Pretraži sportska događanja.." />

        <button type="submit" class="bg-[#12457b] text-white p-4  absolute right-0 top-0 bottom-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
            <path d="M21 21l-6 -6" />
          </svg></button>
      </form>
    </div>
  </main>

  <!-- // * Lista sportova -->
  <section class="mt-20">
    <div class="container mx-auto max-w-8xl">
      <div class="grid grid-cols-4 gap-10">

        <?php for ($i = 0; $i < 8; $i++): ?>
          <a href="#">
            <div class="flex flex-col bg-[#12457b] items-center justify-center rounded-2xl overflow-hidden p-8 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out text-white hover:bg-[#54af3c]">
              <div class="w-2/3 h-[100px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-play-handball w-full h-full">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M13 21l3.5 -2l-4.5 -4l2 -4.5" />
                  <path d="M7 6l2 4l5 .5l4 2.5l2.5 3" />
                  <path d="M4 20l5 -1l1.5 -2" />
                  <path d="M15 7a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                  <path d="M9.5 5a.5 .5 0 1 0 0 -1a.5 .5 0 0 0 0 1z" fill="currentColor" />
                </svg>
              </div>
              <h3 class=" text-2xl font-bold !mt-10">Nogomet</h3>
              <!-- <p class="text-center ">Zagreb je dom mnogim nogometnim klubovima i natjecanjima.</p> -->
            </div>
          </a>
        <?php endfor; ?>
      </div>

      <div class="mt-10 flex items-center justify-between w-full">
        <h2>Niste pronasli sport koji Vas zanima?</h2>

        <a href="#" class="px-6 py-4 !bg-[#54af3c] !text-white rounded-2xl flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
          </svg>
          <span>Prikazi sve sportove </span>

        </a>
      </div>
  </section>


  <!-- About Section Glavni view -->
  <!-- <div class="w3-main-container " id="home">
    <div class="glassx">
      <div class="grid-container glassx2">
        <div class="item3 padd48 logoHolder glassx2 w3-center mainFrame1">
          <img class="logoImg" src="public/img/logo-sport-zagreb.svg" alt="">
        </div>
        <div class=" item3 padd48 glassx2 mainFrame2">
          <h1 class="text-red-500 text-8xl">test</h1>
          <div class="w3-jumbo w3-hide-small imgBackground w3-center w3-bold flexPadd ">Uživaj u sportu</div>
          <div class="w3-jumbo w3-hide-small w3-center w3-bold hidden">Zagreb nudi puno</div>
          <div class="w3-xxlarge w3-hide-large w3-hide-medium w3-center">Uživaj u sportu,</div>
          <div class="w3-xxlarge w3-hide-large w3-hide-medium w3-center">Zagreb nudi puno</div>
          <h3 class="w3-xlarge w3-hide-small w3-center">U zdravom tijelu zdrav duh</h3>
          <br>
          <div class="w3-large w3-center">
            <input class="w3-input inputs" type="text" placeholder="Pretraži sportska događanja..">
          </div>
          <br>
          <div class="w3-large w3-center">
            <h3>
              Dobrodošli na internet stranice grada Zagreba na kojima možete pronaći informacije o svim sportskim aktivnostima koje se odvijaju u Zagrebu.
            </h3>
            <hr>
            <h3>
              Pretraži događanja ili ih filtriraj na razne načine
            </h3>
            <hr>
            <h3>
              Prema vrsti sportske aktivnosti
              <button class="w3-btn fa fa-arrow-up" onclick="contentSwitch('vrsteSporta')"></button>
            </h3>
            <h3>Po zagrebačkim četvrtima
              <button class="w3-btn fa fa-arrow-up" onclick="contentSwitch('kartaCetvrti')"></button>
            </h3>
            <h3>
              Po sportskim objektima
              <a href="#objects" class="w3-btn fa fa-arrow-up"></a>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Događanja -->
  <div class="w3-container glass3 defaultMargins bigScreen" id="events">
    <h3 class="w3-center">Trenutna sportska događanja u gradu Zagrebu</h3>
    <!-- Događanja za trenutni mjesec -->
    <div class="w3-container w3-flex objektFlex">
      <h5>Filtriraj po datumima:</h5>
    </div>
    <div class="w3-container w3-flex objektFlex">
      <input class="w3-input bookSelect" type="text" id="mainDatePicker" placeholder="Odaberi datum od - do">
    </div>
    <div class="grid grid-cols-2 gap-10" id="eventsEvents">
    </div>

  </div>
  <hr class="borderTopBlue">

  <!-- Modal za kolačiće-->
  <div id="modalKolacici" class="w3-modal w3-color w3-white w3-animate-zoom">
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
        ako niste omogućili opciju Nemoj me pratiti, ali odlučite isključiti se, kolačić SugarStone_ignore bit će pohranjen u Vašem pregledniku. Nijednog posjetitelja s kolačićem SugarStone_ignore Google Analytics neće pratiti;
        ako ste na svojem pregledniku onemogućili sve kolačiće, i dalje ćemo prikupljati neke općenite podatke o Vašem pretraživanju (npr. broj posjetitelja na našoj stranici), ali oni će biti manje precizni i Vaši posjeti neće biti praćeni (ne upotrebljavaju se SugarStone kolačići)
        Više o kolačićima možete naći ovdje:

        Cookies - https://www.aboutcookies.org/.</p>
    </div>
  </div>

  <!-- Modal za događanja po četvrtima-->
  <div id="kartaCetvrti" class="w3-modal w3-animate-zoom w3-white w3-color">
    <span class="w3-button w3-large w3-black w3-padding-small w3-display-topright" onclick="closeMap(this)" title="Zatvori">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-transparent" style="width: 100%;position:relative;">
      <div class="modalGrid">
        <div>
          <img src="public/img/gradskeCetvrti.png" usemap="#image-map">
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
        <ul class="w3-ul ulMobile w3-col s6">
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

  <!-- Modal za događanja po vrstama sporta-->
  <div id="vrsteSporta" class="w3-modal w3-animate-zoom w3-white w3-color">
    <span class="w3-button w3-large w3-black w3-padding-small w3-display-topright" onclick="closeMap(this)" title="Zatvori">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-transparent" style="width: 100%;position:relative;">
      <div class="w3-center">
        <h3>Odaberite vrstu sporta</h3>
        <hr>
        <div class="modalGrid item2 border-right">
          <button class="w3-btn leftBorderAnimate ">Nogomet <span class="w3-badge ">5</span></button>
          <button class="w3-btn leftBorderAnimate ">Košarka <span class="w3-badge">2</span></button>
          <button class="w3-btn leftBorderAnimate ">Rukomet <span class="w3-badge">2</span></button>
          <button class="w3-btn leftBorderAnimate">Stolni tenis <span class="w3-badge">3</span></button>
          <button class="w3-btn leftBorderAnimate">Tenis <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Badminton <span class="w3-badge">1</span></button>
          <button class="w3-btn leftBorderAnimate">Odbojka <span class="w3-badge">2</span></button>
          <button class="w3-btn leftBorderAnimate">Padel <span class="w3-badge">2</span></button>
          <button class="w3-btn leftBorderAnimate">Hokej <span class="w3-badge">1</span></button>
          <button class="w3-btn leftBorderAnimate">Atletika <span class="w3-badge">7</span></button>
          <button class="w3-btn leftBorderAnimate">Plivanje <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Vaterpolo <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Veslanje <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Ragbi <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Streličarstvo <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Šah <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Softball <span class="w3-badge">5</span></button>
          <button class="w3-btn leftBorderAnimate">Ples <span class="w3-badge">5</span></button>
        </div>
        <hr>
        <div class="">
          Lista događanja
        </div>
      </div>
      <div class="">
      </div>
    </div>
  </div>

  <!-- Modal za događanja po objektima-->
  <div id="objektiModal" class="w3-modal w3-animate-zoom w3-white w3-color">
    <span class="w3-button w3-large w3-black w3-padding-small w3-display-topright" onclick="closeMap(this)" title="Zatvori">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-transparent w3-center" style="width: 100%;position:relative;">
      <div class="w3-container w3-center" id="objectsFrame">
        <h3> Sportski događaji u objektu</h3>
        <h5 id="objectName"></h5>
        <div class="w3-container imgHolderObjekti">
          <img id="objectImg" src="" alt="Sportski objekt" class="w3-center w3-round w3-image">
        </div>
        <div class="w3-container">
          <h4>Sportska događanja</h4>
          <div class="w3-container w3-flex objektFlex">
            <input type="text" class="w3-input inputs" data-filter-id="objectEvents" onkeyup="filterEvents(this)" placeholder="Filtriraj događanja za ovaj objekt..">
          </div>
          <hr>
          <div class="w3-container w3-flex objektFlex">
            <h5>Filtriraj po datumima:</h5>
          </div>
          <div class="w3-container w3-flex objektFlex">
            <input class="w3-input bookSelect" type="text" id="datePicker" placeholder="Odaberi datum od - do">
          </div>
        </div>
        <hr>
        <div class="w3-container" id="objectEvents">
        </div>
      </div>
    </div>
  </div>

  <!-- Objekti-->
  <div class="w3-container glass3 bigScreen" id="objects">
    <hr>
    <h3 class="w3-center">SPORTSKI OBJEKTI</h3>
    <div id="objektiHolder" style="margin-top:48px" class="glass3">
    </div>
  </div>
  <hr class="borderTopBlue">

  <!-- Contact Section -->
  <div class="w3-container glass3 bigScreen" style="padding:28px 16px" id="contact">
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
  <hr class="borderTopBlue">
  <!-- Scrollers slideshow-->
  <div class="" id="scrollers">
    <div class="w3-row">
      Ne propustite trenutna događanja..
    </div>
    <div class="w3-grid grid4">
      <div class="w3-panel w3-scrollers topScrollers">
        <header class="w3-container">
          <h6 class="w3-underline fade-text scrollPlace"></h6>
        </header>
        <div class="content">
          <span class="fade-text scrollEvent"></span>
        </div>
        <footer>
          <div class="w3-left">
            <span class="fade-text scrollDate"></span>
          </div>
          <div class="w3-right fade-text">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
          </div>
        </footer>
      </div>
      <div class="w3-panel w3-scrollers topScrollers">
        <header class="w3-container">
          <h6 class="w3-underline fade-text scrollPlace"></h6>
        </header>
        <div class="content">
          <span class="fade-text scrollEvent"></span>
        </div>
        <footer>
          <div class="w3-left">
            <span class="fade-text scrollDate"></span>
          </div>
          <div class="w3-right fade-text">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
          </div>
        </footer>
      </div>
      <div class="w3-panel w3-scrollers topScrollers mobileHide">
        <header class="w3-container">
          <h6 class="w3-underline fade-text scrollPlace"></h6>
        </header>
        <div class="content">
          <span class="fade-text scrollEvent"></span>
        </div>
        <footer>
          <div class="w3-left">
            <span class="fade-text scrollDate"></span>
          </div>
          <div class="w3-right fade-text">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
          </div>
        </footer>
      </div>
      <div class="w3-panel w3-scrollers topScrollers mobileHide middleHide">
        <header class="w3-container">
          <h6 class="w3-underline fade-text scrollPlace"></h6>
        </header>
        <div class="content">
          <span class="fade-text scrollEvent"></span>
        </div>
        <footer>
          <div class="w3-left">
            <span class="fade-text scrollDate"></span>
          </div>
          <div class="w3-right fade-text">
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
  <hr class="borderTopBlue">
  <!-- Footer -->
  <footer class="w3-center w3-padding-64 glass3 defaultMargins bigScreen">
    <a href="#home" class="w3-button w3-indigo"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <hr>
    <div class="w3-grid grid3">
      <div class="w3-xlarge w3-section">
        <h5>Podijeli sa društvom</h5>
        <i id="facebook" class="socialsShares fa fa-facebook-official w3-hover-opacity"></i>
        <i id="instagram" class="socialsShares fa fa-instagram w3-hover-opacity"></i>
        <i id="snapchat" class="socialsShares fa fa-snapchat w3-hover-opacity"></i>
        <i id="pinterest" class="socialsShares fa fa-pinterest-p w3-hover-opacity"></i>
        <i id="twitter" class="socialsShares fa fa-twitter w3-hover-opacity"></i>
        <i id="linkedin" class="socialsShares fa fa-linkedin w3-hover-opacity"></i>
      </div>
      <div>
        <p>Powered by <a href="#" title="SugarStone" target="_blank" class="w3-hover-text-green">SugarStone</a></p>
      </div>
      <div>
        <button onclick="document.getElementById('modalKolacici').style.display='block'" class="w3-button w3-indigo">O kolačićima</button>
      </div>

    </div>
  </footer>
  <script src="public/js/flatpickr.js"></script>
  <script src="public/js/hr.js"></script>
  <script src="public/js/topEventsSlideshow.js"></script>
  <script src="public/js/reminderForEvents.js"></script>
  <script src="public/js/webworkers.js"></script>
  <script src="public/js/chat.js"></script>
  <script src="public/js/mapSpots.js"></script>
  <!-- <script src="public/js/acctoolbar.min.js"></script> -->
  <script src="public/js/main-z.js"></script>
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