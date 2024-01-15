<!doctype html>
<html class="no-js" lang="zxx">
@include('includes.head')
 
    <body>
    <div class="container-xxl bg-white p-0">

        @include('includes.spinner')
		@include('includes.navbar')
        @include('includes.header')

	
@yield('content')
		
		@include('includes.footer')
		@include('includes.footerJs')

		
    </body>
</html>