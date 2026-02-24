<!-- resources/views/frontend/layouts/navbar.blade.php -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

<!-- Logo: Teks + Ikon Kupu-kupu (SVG) -->
<a href="/" class="logo d-flex align-items-center">
  <!-- Ikon kupu-kupu sederhana (SVG inline) -->
  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#6f42c1" viewBox="0 0 16 16" class="me-2">
    <path d="M8 4.734L1.5 1.5 0 3.03l1.5 1.5L8 7.766l6.5-3.236L16 3.03 14.5 1.5 8 4.734zM8 11.266L1.5 14.5 0 12.97l1.5-1.5L8 8.234l6.5 3.236L16 12.97 14.5 14.5 8 11.266z"/>
  </svg>
  <span class="sitename fw-bold" style="font-family: 'Jost', sans-serif; font-size: 1.25rem; color: #2563eb;">Butterfly</span>
</a>

    <!-- Navbar Menu -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#team">Team</a></li>
        <li class="dropdown">
          <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li><a href="#">Drop Down 2</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header><?php /**PATH C:\Projek\Projek\resources\views/frontend/layouts/navbar.blade.php ENDPATH**/ ?>