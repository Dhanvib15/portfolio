<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="side-menu {{ Route::is('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ Route::is(['goals.*', 'our-clients.*']) ? 'side-menu--active side-menu--open' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="shield"></i> </div>
                <div class="side-menu__title"> About Us <i data-lucide="chevron-down" class="side-menu__sub-icon "></i> </div>
            </a>
            <ul class="side-menu__sub-open">
                <li>
                    <a href="#" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="target"></i> </div>
                        <div class="side-menu__title"> Goals </div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
