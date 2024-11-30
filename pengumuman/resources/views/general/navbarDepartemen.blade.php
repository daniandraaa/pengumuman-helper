<header
      class="navbar sticky top-0 bg-x-navy z-40 flex items-center justify-between gap-4 px-4 sm:px-12 py-4 "
    >
      <a href="/">
        <img
          src="./assets/images/logo.png"
          alt="logo"
          class="h-10"
        />
        <span class="sr-only">helPhin</span>
      </a>

      <button
        id="mobile-nav-trigger"
        class="block sm:hidden rounded-md p-1.5 hover:bg-x-blue"
      >
        <img src="./assets/images/icon-menu.png" alt="menu" class="h-6" />
        <span class="sr-only">Menu</span>
      </button>

      <div class="items-center gap-6 hidden sm:flex 2xl:text-xl">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/#about') }}">About</a>
        <a href="{{ url('/#team') }}">Team</a>
        <a href="{{ url('/#album') }}">Album</a>
        <a href="{{ url('/#contact') }}">Contact</a>
      </div>
    </header>

    <!-- Mobile navigation -->
    <aside
    style="z-index: 40;"
      id="mobile-nav"
      class="fixed inset-0 top-[4.5rem] -translate-x-full p-4 flex flex-col items-start gap-6 text-xl font-semibold bg-x-navy/80 backdrop-blur flex-grow overflow-y-auto"
    >
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/#about') }}">About</a>
        <a href="{{ url('/#team') }}">Team</a>
        <a href="{{ url('/#album') }}">Album</a>
        <a href="{{ url('/#contact') }}">Contact</a>
    </aside>