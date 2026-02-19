  <!-- HEADER -->
  <header
      class="fixed top-0 right-0 z-20
             h-16 w-full
             bg-gray-900 shadow
             px-4 flex items-center
             md:ml-64
             md:w-[calc(100%-16rem)]">

      <!-- LEFT (burger) -->
      <div class="flex items-center">
          <button onclick="openSidebar()" class="md:hidden text-gray-300 hover:text-white relative z-50">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
          </button>
      </div>
      <!-- RIGHT (search + auth) -->
      <div class="ml-auto flex items-center gap-3">
          <!-- SEARCH -->
          <input type="text" placeholder="Поиск..."
              class="hidden sm:block
                 border border-gray-700
                 bg-gray-800 text-gray-200
                 rounded px-3 py-1 text-sm
                 focus:outline-none focus:border-orange-600">
          <!-- AUTH -->
          <!-- AUTH -->
          {{-- @guest
              <a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-sm">
                  Войти
              </a>

              <a href="{{ route('register') }}"
                  class="bg-orange-600 hover:bg-orange-700 text-white px-3 py-1.5 rounded-lg text-sm font-semibold">
                  Регистрация
              </a>
          @endguest --}}


          @auth
              <span class="text-gray-300 text-sm">
                  {{ auth()->user()->name }}
              </span>

              <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                  @csrf
                  <button type="submit"
                      class="bg-orange-600 hover:bg-orange-700 text-white px-3 py-1.5 rounded-lg text-sm font-semibold">
                      Выйти
                  </button>
              </form>
          @endauth


      </div>
  </header>
