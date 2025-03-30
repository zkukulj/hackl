<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/scrollbar.css">
<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  body, html {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    letter-spacing: 2px;
  }

  .w3-bar .w3-button {
    padding: 16px;
  }
  /* Defaults */
  .glass {
      background: rgba(7, 23, 101, 0.9);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      /* border: 1px solid rgba(255, 255, 255, 0.7);*/
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: aliceblue;
    background-image:url('public/img/sports4.png');background-size:contain;background-blend-mode: lighten;
  }

  .glass3 {
    background-color: dodgerblue;
    padding: 10px;
    opacity:0.8;
  }

  .glass2 {
      background: rgba(30, 144, 255, 0.8);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: bisque;
    padding:10px;
  }
  .glass-border{
    border:none;
    border-radius: 0;
  }
  .hidden{
    display:none !important;
  }
  .border-left{
    border-left:1px solid white;
  }
  .border-right{
    border-right:1px solid white;
  }
  .grid-container {
    display: grid;
    grid-template-areas:
      'header header header header header header'
      'menu main main main main right'
      'menu footer footer footer footer footer';
    gap: 10px;
    background-color: dodgerblue;
    padding: 10px;
    opacity:0.8;
  }
  .item2 { grid-area: menu; }
  .item3 { grid-area: main; }
  .item4 { grid-area: right; }

  .sponsorBlock{
    min-width:144px;
    text-align:center;
  }
  .inputs{
    -webkit-text-stroke-color: darkgray;
  }
  .w3-dodgerblue{
    background-color: dodgerblue;
  }
  .padd48 {
    padding:48px;
  }
  .defaultMargins{
    margin-left: 16px;
    margin-right: 16px;
  }
  .item2>button{
    letter-spacing: 2px;;
  }
  .sponsorImage{
    width: 110px;
    height: auto;
  }
  header>h2{
    text-decoration: underline;
  }
</style>
</head>
<body class="glass">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-card glass2 glass-border" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
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

<!-- About Section -->
<div class="w3-container " style="padding:128px 16px;" id="home">
	<div class="grid-container">
		<div class="item2 border-right">
			<button class="w3-button w3-block">Nogomet</button>
			<button class="w3-button w3-block">Košarka</button>
			<button class="w3-button w3-block">Rukomet</button>
			<button class="w3-button w3-block">Stolni tenis</button>
			<button class="w3-button w3-block">Tenis</button>
			<button class="w3-button w3-block">Badminton</button>
			<button class="w3-button w3-block">Odbojka</button>
			<button class="w3-button w3-block">Padel</button>
			<button class="w3-button w3-block">Hokej</button>
			<button class="w3-button w3-block">Atletika</button>
			<button class="w3-button w3-block">Plivanje</button>
			<button class="w3-button w3-block">Vaterpolo</button>
			<button class="w3-button w3-block">Veslanje</button>
			<button class="w3-button w3-block">Ragbi</button>
			<button class="w3-button w3-block">Streličarstvo</button>
			<button class="w3-button w3-block">Šah</button>
		</div>
		
		<div class="w3-text-white item3 padd48">
      <span class="w3-jumbo w3-hide-small">Uživaj u sportu, Zagreb nudi puno</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Uživaj u sportu, Zagreb nudi puno</span><br>
      <p class="w3-large">U zdravom tijelu zdrav duh</p>
      <p class="w3-medium">Pretraži događanja ili filtriraj sportske aktivnosti izbornikom s lijeve strane</p>
      <p>
        <div class="w3-half">
          <input class="w3-input  w3-border-0 inputs" type="text" placeholder="Upiši termin za pretragu..">
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
		<h2 class="w3-center w3-color" style="color:white;" >01.05.2025</h2>

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
		<h2 class="w3-center w3-color" style="color:white;" >03.05.2025</h2>

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
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Contact Section -->
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
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="#" title="Hackl" target="_blank" class="w3-hover-text-green">Hackl</a></p>
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
