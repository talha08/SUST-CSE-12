<!DOCTYPE html>
<html lang="en">

@include('includes.header')
@yield('style')
<body>

@include('includes.sideBar')


@include('includes.topMenu')

<section class="wraper container-fluid">
    <section class="">
        @yield('content')
    </section>
</section>

@include('includes.footer')

@yield('script')
</body>
</html>