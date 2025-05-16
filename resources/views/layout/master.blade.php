<!doctype html>
<html class="no-js" lang="zxx">
   {{--head  --}}
   @include('layout.head')
    <body>

		<!-- Get Pro Button -->
		@include('layout.pro_button')

		<!-- Header Area -->
        @include("layout.header")
		<!-- End Header Area -->

        <!-- begin of content -->
        @yield('content')
        <!-- end of content -->

        @include('layout.footer')


        @include('layout.scripts')


    </body>
</html>
