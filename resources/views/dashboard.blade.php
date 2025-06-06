@include('layouts.header')

<body>
    <div class="container-scroller">
        @include('layouts.sidebar')
        <div class="container-fluid page-body-wrapper bg-dark">
            @include('layouts.navbar')
            @yield('content')
        </div>
    </div>
    @include('layouts.script')
</body>

</html>
