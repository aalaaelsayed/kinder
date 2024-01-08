<!doctype html>
<html class="no-js" lang="zxx">
@include('includes.head')
 
    <body>
	
        @include('includes.spinner')
		@include('includes.navbar')

	
@yield('content')
		
		@include('includes.footer')
		@include('includes.footerJs')

		
    </body>
</html>