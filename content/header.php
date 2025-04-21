<!-- Navbar (sit on top) -->
<div class="w3-top whitesmoke">
  <div class="w3-bar w3-card glass2 glass-border" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide w3-bold">
    <img src="./public/img/zglogo.webp" style="height:24px;width:auto;" class="w3-image" alt="">
    ZAGREB SPORT
    <!-- <img src="public/img/logo.png" class="w3-image" alt=""> -->
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-barr w3-hide-small">
        <a href="#home" class="w3-bar-item w3-button w3-right">POČETNA</a>
        <a href="#events" class="w3-bar-item w3-button w3-right">DOGAĐAJI</a>
        <a href="#objects" class="w3-bar-item w3-button w3-right">OBJEKTI</a>
        <a href="#contact" class="w3-bar-item w3-button w3-right">KONTAKT</a>
      </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-link w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars" style="font-size:24px;" ></i>
    </a>
    <a href="javascript:void(0)" class="w3-bar-item w3-link w3-right" onclick="w3_open()">
      <img src="./public/img/hr.png" class="langIcon" alt="">
    </a>
    <a href="javascript:void(0)" class="w3-bar-item w3-link w3-right" onclick="w3_open()">
      <img src="./public/img/en.png" class="langIcon" alt="">
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">POČETNA</a>
  <a href="#events" onclick="w3_close()" class="w3-bar-item w3-button">DOGAĐAJI</a>
  <a href="#objects" onclick="w3_close()" class="w3-bar-item w3-button">OBJEKTI</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">KONTAKT</a>
</nav>