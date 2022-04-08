<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    {{-- <a href="index.html" class="logo">
                        <img src={{ $navs[0]->logo }} alt="EduWell Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">{{ $navs[0]->tabs }}</a>
                        </li>
                        <li class="scroll-to-section"><a href="#services">{{ $navs[1]->tabs }}</a></li>
                        <li class="scroll-to-section"><a href="#courses">{{ $navs[2]->tabs }}</a></li>
                        <li class="scroll-to-section"><a href="#testimonials">{{ $navs[3]->tabs }}</a></li>
                        <li class="scroll-to-section"><a href="#contact-section">{{ $navs[4]->tabs }}</a></li> --}}
                    <li class="has-sub">
                        <a href="javascript:void(0)">Connexion</a>
                        <ul class="sub-menu">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <li><a href="{{ url('/dashboard') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        </li>

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}"
                                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </ul>
                    </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
