  <div class="navbar-area">
      <div class="mobile-nav">
          <a href="index.html" class="logo">
              <img src="{{ asset('assets/images/logos/logo-1.png') }}" class="logo-one" alt="Logo">
              <img src="{{ asset('assets/images/logos/logo-2.png') }}" class="logo-two" alt="Logo">
          </a>
      </div>
      <div class="main-nav">
          <div class="container">
              <nav class="navbar navbar-expand-md navbar-light ">
                  <a class="navbar-brand" href="index.html">
                      <img src="{{ asset('assets/images/logos/logo-1.png') }}" class="logo-one" alt="Logo">
                      <img src="{{ asset('assets/images/logos/logo-2.png') }}" class="logo-two" alt="Logo">
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto">
                          {{-- <a href="{{ route('pages.home') }}" class="nav-link"
                              class="nav-link {{ request()->routeIs('pages.home') ? 'active' : '' }}">
                              Главная
                          </a> --}}
                          <li class="nav-item">
                              <a href="{{ route('pages.home') }}"
                                  class="nav-link {{ request()->routeIs('pages.home') ? 'active' : '' }}">
                                  Главная
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.about') }}"
                                  class="nav-link {{ request()->routeIs('pages.about') ? 'active' : '' }}">
                                  О нас
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.services') }}"
                                  class="nav-link {{ request()->routeIs('pages.services') ? 'active' : '' }}">
                                  Услуги
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.educations') }}"
                                  class="nav-link {{ request()->routeIs('pages.educations') ? 'active' : '' }}">
                                  Обучение
                              </a>
                          </li>
                           <li class="nav-item">
                              <a href="{{ route('pages.contacts') }}"
                                  class="nav-link {{ request()->routeIs('pages.contacts') ? 'active' : '' }}">
                                  Контакты
                              </a>
                          </li>
                          {{-- 👇 ТВОЯ ВСТАВКА --}}
                          @auth
                              @if (auth()->user()->role == 'user')
                                  <li class="nav-item">
                                      <a href="/my-codes" class="nav-link">
                                          Мои решения
                                      </a>
                                  </li>
                              @endif
                          @endauth
                      </ul>
                      <div class="nav-side d-display">
                          <div class="nav-side-item">
                              <div class="search-box">
                                  <i class='bx bx-search'></i>
                              </div>
                          </div>
                          <div class="nav-side-item">
                              <div class="get-btn">
                                  <a href="{{ route('login') }}" class="default-btn btn-bg-two border-radius-50">Войти
                                      <i class='bx bx-chevron-right'></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
      <div class="side-nav-responsive">
          <div class="container-max">
              <div class="dot-menu">
                  <div class="circle-inner">
                      <div class="in-circle circle-one"></div>
                      <div class="in-circle circle-two"></div>
                      <div class="in-circle circle-three"></div>
                  </div>
              </div>

              <div class="container">
                  <div class="side-nav-inner">
                      <div class="side-nav justify-content-center align-items-center">
                          <div class="side-nav-item nav-side">
                              <div class="search-box">
                                  <i class='bx bx-search'></i>
                              </div>
                              <div class="get-btn">
                                  <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote
                                      <i class='bx bx-chevron-right'></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
