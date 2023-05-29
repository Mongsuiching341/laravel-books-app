@include('components.header')
<body>
    @include('components.navbar')
    @yield('content')

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
@include('components.footer')


