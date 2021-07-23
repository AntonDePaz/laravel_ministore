
@include('../inc.header')
<body class=" bg-dark">
    <div id="app">

        @include('../inc.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

@include('../inc.footer')

