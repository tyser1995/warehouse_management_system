<div class="wrapper">
    @include('layouts.navbars.auth')
    <div>
        @include('layouts.navbars.navs.auth')
        <div class="main-panel">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
</div>