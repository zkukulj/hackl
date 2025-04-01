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
<link rel="stylesheet" href="public/css/leftBorderAnimate.css">
<link rel="stylesheet" href="public/css/main2.css">
</head>
<body class="glass">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-card glass2 glass-border" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">
    ZAGREB SPORT
    <!-- <img src="public/img/logo.png" class="w3-image" alt=""> -->
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small hidden">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Scrollers -->
<div class="" style="width:100%;height:164px;margin-top:80px;" id="scrollers">
  <span>Ne propustite trenutna događanja..</span>
  <div class="w3-grid grid4">
		<div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top">
				<header class="w3-container">
          <h6 class="w3-underline">Stolni tenis</h6>
				</header>
        <div class="content">
          <span>Stolnoteniski turnir za rekreativce</span>
        </div>
        <footer>
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
    <div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top">
				<header class="w3-container">
          <h6 class="w3-underline">Plivanje</h6>
				</header>
        <div class="content">
          <span>Upis u školu plivanja na bazenu Mladost</span>
        </div>
        <footer>
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
		<div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top mobileHide">
				<header class="w3-container">
          <h6 class="w3-underline">Košarka</h6>
				</header>
        <div class="content">
          <span>3 x 3 hakl turnir za rekreativce</span>
        </div>
        <footer>
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
    <div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top mobileHide">
				<header class="w3-container">
          <h6 class="w3-underline">Badminton</h6>
				</header>
        <div class="content">
          <span>Badminton treninzi na velesajmu</span>
        </div>
        <footer>
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

<!-- About Section -->
<div class="w3-main-container " style="padding:16px 16px;" id="home">
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
      <span class="w3-jumbo w3-hide-small">Uživaj u sportu, Zagreb nudi puno</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Uživaj u sportu, Zagreb nudi puno</span><br>
      <p class="w3-large">U zdravom tijelu zdrav duh</p>
      <p class="w3-medium">Pretraži događanja ili filtriraj sportske aktivnosti izbornikom s lijeve strane.</p>
      <p> Isprobaj pretragu po četvrtima na mapi 
      <a onclick="event.preventDefault();document.getElementById('kartaCetvrti').style.display='block'" href="#" class="w3-link w3-btn w3-tiny w3-wide">Zagrebačke četvrti</a></p>
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
	<div class="w3-container glass3 defaultMargins" style="padding:28px 16px">
		<h3 class="w3-center">Trenutna sportska događanja u gradu Zagrebu</h3>
    <hr>
    <!-- Događanje 1 za datum -->
		<h2 class="w3-center w3-color" >01.05.2025</h2>

		<div class="w3-container" style="padding:28px 16px">
			<div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top">
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
			<div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top">
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
			<div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top">
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
			<div class="w3-panel w3-indigo w3-leftbar w3-rightbar w3-border-black w3-margin-top">
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

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-color w3-backcolor" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<!-- Modal for full size images on click-->
<div id="modalKolacici" class="w3-modal w3-color w3-backcolor w3-animate-zoom">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" onclick="this.parentElement.style.display='none'" title="Close Modal Image">×</span>
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
    ako niste omogućili opciju Nemoj me pratiti, ali odlučite isključiti se, kolačić piwik_ignore  bit će pohranjen u Vašem pregledniku. Nijednog posjetitelja s kolačićem piwik_ignore Google Analytics neće pratiti;
    ako ste na svojem pregledniku onemogućili sve kolačiće, i dalje ćemo prikupljati neke općenite podatke o Vašem pretraživanju (npr. broj posjetitelja na našoj stranici), ali oni će biti manje precizni i Vaši posjeti neće biti praćeni (ne upotrebljavaju se Piwik kolačići)
    Više o kolačićima možete naći ovdje:

    Cookies -  https://www.aboutcookies.org/.</p>
  </div>
</div>

<div id="kartaCetvrti" class="w3-modal w3-animate-zoom w3-backcolor w3-color" >
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" onclick="this.parentElement.style.display='none'" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <div class="w3-grid" style="grid-template-columns:1fr 1fr 1fr">
      <div>
        <img src="public/img/gradskeCetvrti.png" class="" alt="">
      </div>
      <div>
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
      <div>
        Lista događanja
      </div>
    </div>
  </div>
</div>

<!-- Contact Section trenutno skrivnemo-->
<div class="w3-container hidden" style="padding:28px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px" class="glass2">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

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
    <p>Powered by <a href="#" title="Hackl" target="_blank" class="w3-hover-text-green">Hackl</a></p>
  </div>
  <div>
    <button onclick="document.getElementById('modalKolacici').style.display='block'" class="w3-button w3-indigo">O kolačićima</button>
  </div>

  </div>
</footer>
 
<script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }


  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");

  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }

  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }
</script>

</body>
</html>
