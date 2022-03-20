<!DOCTYPE html>
<html lang="en">
@include('partials/_head')

<body>
    @include('partials/_nav')




    {{-- ===============remaining body========================== --}}
    <div class="container">

        @yield('content')
        @include('partials/_footer')

    </div>{{-- container ending --}}

    {{-- ===============remaining body Ends========================== --}}

    @include('partials._javascript')

</body>

</html>
