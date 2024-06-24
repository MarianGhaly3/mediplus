<!doctype html>
<html class="no-js" lang="zxx">
    <head>
		@include('includes.head')	
    </head>

    <body>
	
		<!-- Preloader -->
		@include('includes.preloader')
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		@include('includes.ProButton')
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
            @include('includes.nav')
			<!-- End Topbar -->

			<!-- Header Inner -->
            @include('includes.headerInner')
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

        @yield('content')
		
		<!-- Footer Area -->
		@include('includes.footer')
		<!--/ End Footer Area -->

		@include('includes.footerJS')

    </body>
</html>