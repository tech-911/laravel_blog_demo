<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/_head')
    </head>


<body>
    @include('partials/_nav')



    {{-- ===============remaining body========================== --}}
    <div class="container">
        @include('partials/_messages')

        @yield('content')
        @include('partials/_footer')

    </div>{{-- container ending --}}

    {{-- ===============remaining body Ends========================== --}}

    @include('partials._javascript')

</body> 

</html>
