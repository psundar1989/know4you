 <!-- Preloader Start -->
      <div class="preloader">
        <div class="loading-container">
          <div class="loading"></div>
          <div id="loading-icon">
            <img src="{{ asset('assets/images/loader1.png') }}" alt="" />
          </div>
        </div>
      </div>
      <!-- Preloader End -->
      <!-- Header Start -->
      <header class="main-header">
        <div class="header-sticky">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <!-- Logo Start -->
              <a class="navbar-brand" href="{{ url('/')}}">
                <img src="{{ asset('assets/images/logo/logo.png') }}"  class="logos" alt="Logo" />
              </a>
              <!-- Logo End -->
              <!-- Main Menu Start -->
              <div class="collapse navbar-collapse main-menu">
                <div class="nav-menu-wrapper">
                  <ul class="navbar-nav mr-auto" id="menu">
                    <li class="nav-item submenu">
                      <a class="nav-link" href="">Start</a>
                      <ul>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Durchbruch in Minuten</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Markenzeichen-Angebote </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Angebots-Palette</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Maßgeschneiderte Lösungen</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Willkommen </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/success-story')}}">Erfolg </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/blogs')}}"> blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/contact-us')}}"> Kontakt</a>
                    </li>
                  </ul>
                </div>
                <!-- Header Btn Start -->
                <div class="header-btn d-inline-flex">
                  <a href="tel:+789859664" class="btn-phone">
                    <i class="fa-solid fa-phone-volume"></i>+41792883385 </a>
                  <a href="{{ url('/contact-us')}}" class="btn-default">get in touch</a>
                </div>
                <!-- Header Btn End -->
              </div>
              <!-- Main Menu End -->
              <div class="navbar-toggle"></div>
            </div>
          </nav>
          <div class="responsive-menu"></div>
        </div>
      </header>
      <!-- Header End -->