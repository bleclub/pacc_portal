<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Dynamic Title --}}
    <title>@yield('title')</title>

    {{-- Include Header --}}
    @include('layouts.header')

    @stack('css')
    
</head>
<body>

        <div class="wrapper">
            @include('layouts.navbar')
            @include('layouts.menu')
            
            <div class="content-wrapper">
                {{-- เริ่มต้น Content --}}
                @yield('content')
            </div>
        
        </div>

    {{-- Include Footer --}}
    @include('layouts.footer')

    @stack('js')
    
</body>
</html>