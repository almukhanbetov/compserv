  <!-- SIDEBAR -->
  <aside id="sidebar"
      class="custom-scroll fixed z-40 inset-y-0 left-0 w-64
           bg-gray-900 text-white
           flex flex-col h-screen overflow-y-auto
           transform -translate-x-full
           md:translate-x-0
           transition-transform duration-300 ease-in-out">
      <!-- LOGO -->
      <div
          class="p-6 border-b border-gray-700
             flex items-center justify-center
             sticky top-0 z-10
             bg-gray-900 shadow-md">
          <img src="web/img/logo/logo.png" alt="DevOps Admin" class="h-20 object-contain">
      </div>
      <!-- MENU -->
      <nav class="p-4 space-y-3 flex-1">
          @php
              $categories = \App\Models\Category::whereNull('parent_id')->with('children')->orderBy('position')->get();
          @endphp
          <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800">
              Users
          </a>
          <a href="{{ route('admin.categories.index') }}">
              Categories
          </a>
          @foreach ($categories as $category)
              <div class="mb-2">
                  <a href="#" class="block px-4 py-2 bg-gray-800 rounded">
                      {{ $category->name }}
                  </a>

                  @foreach ($category->children as $child)
                      <a href="#" class="block px-8 py-2 text-sm text-gray-400 hover:text-white">
                          {{ $child->name }}
                      </a>
                  @endforeach
              </div>
          @endforeach
          @foreach ($adminCategories as $category)
              <div>
                  <div class="px-4 py-2 text-sm font-semibold text-gray-400 uppercase">
                      {{ $category->name }}
                  </div>

                  {{-- Дочерние категории --}}
                  @foreach ($category->children as $child)
                      <a href="#" class="block px-6 py-2 text-sm hover:bg-gray-800 rounded">
                          {{ $child->name }}
                      </a>
                  @endforeach

                  {{-- Services --}}
                  @if ($category->type === 'service')
                      @foreach ($category->services as $service)
                          <a href="{{ route('admin.services.edit', $service) }}"
                              class="block px-6 py-2 text-sm hover:bg-gray-800 rounded">
                              • {{ $service->title }}
                          </a>
                      @endforeach
                  @endif

                  {{-- Educations --}}
                  @if ($category->type === 'education')
                      @foreach ($category->educations as $education)
                          <a href="{{ route('admin.educations.edit', $education) }}"
                              class="block px-6 py-2 text-sm hover:bg-gray-800 rounded">
                              • {{ $education->title }}
                          </a>
                      @endforeach
                  @endif

              </div>
          @endforeach

      </nav>

      <!-- CTA -->
      <div class="p-4 border-t border-gray-700">
          <button
              class="w-full bg-orange-600 hover:bg-orange-700
               text-white font-semibold py-2 rounded-lg">
              Оставить заявку
          </button>
      </div>

  </aside>
