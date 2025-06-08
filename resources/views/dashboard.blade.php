@include('layouts.header')
<style>
    .blog-menu {
        padding: 20px;
        background-color: rgb(20, 23, 31);
        height: 85%;
        width: 95%;
        margin: 100px auto;
        border-radius: 10px;
        display: flex;
        justify-content: space-around;
    }

    .blog-menu .box{
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        background-color: #332D56;
        width: 20%;
        color: white;
        height: 100px;
    }
</style>

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
