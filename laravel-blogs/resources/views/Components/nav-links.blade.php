      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li>
            <x-nav-link href="/" title="Home" :active="request()->is('/')"> Home </x-nav-link>
          </li>

          <li>
            <x-nav-link href="/about" title="About" :active="request()->is('about')"> About </x-nav-link>
          </li>

          <li>
            <x-nav-link href="/contact" title="Contact" :active="request()->is('contact')"> Contact </x-nav-link>
          </li>
        </ul>
      </nav>