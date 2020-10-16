@include('partials.user.header')
    @include('partials.user.navbar')
    @yield('content')
    <router-view></router-view>
    <vue-progress-bar></vue-progress-bar>
@include('partials.user.footer')